<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Mail;
use Exception;

use App\Submission;

class EventController extends Controller
{
    public function __construct()
    {

    }

    public function submissions_page(Request $request)
    {
        $submissions = Submission::orderBy('created_at', 'DESC')->paginate(10);
        return view('event.submissions', ['submissions'=>$submissions]);
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
                return redirect()->back()->with('status', 'You have been successfully registered and should receive a confirmation email shortly.');
            } else {
                return redirect()->back()->withErrors('Failed to create submission.')->withInput();
            }

        } catch(Exception $e) {
            return redirect()->back()->withErrors('Failed to register information.('.$e->getMessage().')')->withInput();
        }
    }
}
