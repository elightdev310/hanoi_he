<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use Validator;
use Exception;
use Response;

use Illuminate\Support\Facades\Mail;

use App\Submission;
use App\Mail\EventRegistered;

class EventController extends Controller
{
    public function __construct()
    {

    }

    public function submissions_page(Request $request)
    {
        // $this->sendSubmissionMail(Submission::find(1));

        $submissions = Submission::orderBy('created_at', 'DESC')->paginate(10);
        return view('event.submissions', ['submissions'=>$submissions]);
    }

    public function submissions_export(Request $request)
    {
        $headers = array(
            "Content-type" => "text/csv",
            "Content-Disposition" => "attachment; filename=submissions.csv",
            "Pragma" => "no-cache",
            "Cache-Control" => "must-revalidate, post-check=0, pre-check=0",
            "Expires" => "0"
        );

        $submissions = Submission::all();
        $columns = array('First name', 'Last name', 'Company', 'Job designation', 'Email address', 'Contact number', 'Submitted at', 'Event');

        $callback = function() use ($submissions, $columns)
        {
            $file = fopen('php://output', 'w');
            fputcsv($file, $columns);

            foreach($submissions as $sm) {
                $row = array(
                        $sm->first_name,
                        $sm->last_name,
                        $sm->company,
                        $sm->job_designation,
                        $sm->email,
                        $sm->phone,
                        $sm->created_at->format('Y-m-d H:i'),
                        $sm->getEventTypeName()
                    );
                fputcsv($file, $row);
            }
            fclose($file);
        };
        return Response::stream($callback, 200, $headers);

    }

    public function hcm_eblast_page(Request $request)
    {
        return view('event.hcm_eblast_page');
    }

    public function hanoi_eblast_page(Request $request)
    {
        return view('event.hanoi_eblast_page');
    }

    public function register_form_page(Request $request, $type)
    {
        $params = array('type' => $type);
        return view('event.register_form_page', $params);
    }

    public function register_action(Request $request, $type)
    {
        try {
            $validator = Validator::make($request->all(), [
                'first_name'        => 'required',
                'last_name'         => 'required',
                'company'           => 'required',
                'job_designation'   => 'required',
                'email'             => 'required',
                'phone'             => 'required',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            if (Submission::checkExist($request->input('email'), $request->input('type'))) {
                return redirect()->back()->withErrors('You are already registered.')->withInput();
            }

            $submission = Submission::create([
                'first_name'       => $request->input('first_name'),
                'last_name'        => $request->input('last_name'),
                'company'          => $request->input('company'),
                'job_designation'  => $request->input('job_designation'),
                'email'            => $request->input('email'),
                'phone'            => $request->input('phone'),
                'type'             => $request->input('type'),
            ]);
            if ($submission) {
                $this->sendSubmissionMail($submission);

                return redirect()->back()->with('status', 'You have been successfully registered and should receive a confirmation email shortly.');
            } else {
                return redirect()->back()->withErrors('Failed to create submission.')->withInput();
            }

        } catch(Exception $e) {
            return redirect()->back()->withErrors('Failed to register information.('.$e->getMessage().')')->withInput();
        }
    }

    protected function sendSubmissionMail(Submission $submission)
    {
        // Send mail to submitter
        Mail::to($submission->email)->send(new EventRegistered($submission, true));

        // Send mail to admin
        $to_mail = 'to-loan.tran@henkel.com';
        Mail::to($to_mail)->send(new EventRegistered($submission, false));
    }
}
