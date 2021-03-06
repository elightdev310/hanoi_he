<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use Validator;
use Exception;
use Response;

use Illuminate\Support\Facades\Mail;

use App\Submission;
use App\WebinarRegister;
use App\DieAttach;
use App\Mail\EventRegistered;
use App\Mail\WebinarRegistered;

class EventController extends Controller
{
    public function __construct()
    {

    }

    public function home_page(Request $request) {
      return view('welcome');
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






    public function semi_page()
    {
        return view('webinar.semi_page');
    }

    public function webinar_register_action(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'first_name'        => 'required',
                'last_name'         => 'required',
                'company_email'     => 'required|email',
                'country'           => 'required',
                'organization'      => 'required',
                'job_title'         => 'required',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            if (WebinarRegister::checkExist($request->input('company_email'))) {
                return redirect('semi#register-form')->withErrors('You are already registered.')->withInput();
            }

            $wr = WebinarRegister::create([
                'first_name'       => $request->input('first_name'),
                'last_name'        => $request->input('last_name'),
                'company_email'    => $request->input('company_email'),
                'country'          => $request->input('country'),
                'organization'     => $request->input('organization'),
                'job_title'        => $request->input('job_title'),
            ]);

            if ($wr) {
                //$this->sendWebinarRegisterMail($wr);

                return redirect('semi#register-form')->with('status', 'You have been successfully registered and should receive a confirmation email shortly.');
            } else {
                return redirect('semi#register-form')->withErrors('Failed to register.')->withInput();
            }

        } catch(Exception $e) {
            return redirect('semi#register-form')->withErrors('Failed to register information.('.$e->getMessage().')')->withInput();
        }
    }

    protected function sendWebinarRegisterMail(WebinarRegister $wr)
    {
        // Send mail to submitter
        Mail::to($wr->company_email)->send(new WebinarRegistered($wr, true));

        // Send mail to admin
        $to_mail = 'to-loan.tran@henkel.com';
        Mail::to($to_mail)->send(new WebinarRegistered($wr, false));
    }

    public function submissions_webinar_page(Request $request)
    {
        $wrs = WebinarRegister::orderBy('created_at', 'DESC')->paginate(10);
        return view('event.submissions_webinar', ['wrs'=>$wrs]);
    }

    public function submissions_webinar_export(Request $request)
    {
        $headers = array(
            "Content-type" => "text/csv",
            "Content-Disposition" => "attachment; filename=submissions_webinar.csv",
            "Pragma" => "no-cache",
            "Cache-Control" => "must-revalidate, post-check=0, pre-check=0",
            "Expires" => "0"
        );

        $wrs = WebinarRegister::all();
        $columns = array('First name', 'Last name', 'Company email', 'Country', 'Organization', 'Job Title', 'Submitted at');

        $callback = function() use ($wrs, $columns)
        {
            $file = fopen('php://output', 'w');
            fputcsv($file, $columns);

            foreach($wrs as $wr) {
                $row = array(
                    $wr->first_name,
                    $wr->last_name,
                    $wr->company_email,
                    $wr->country,
                    $wr->organization,
                    $wr->job_title,
                    $wr->created_at->format('Y-m-d H:i'),
                );
                fputcsv($file, $row);
            }
            fclose($file);
        };
        return Response::stream($callback, 200, $headers);

    }




    ///////////////////////////////////////////////////////////////////////////
    /// Die Attach
    ///////////////////////////////////////////////////////////////////////////

    /**
     * Page URL: die-attach
     */
    public function die_attach_page()
    {
        return view('event.die_attach_page');
    }

    /**
     * Action URL: die-attach
     */
    public function die_attach_register(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'first_name'    => 'required',
                'last_name'     => 'required',
                'company_email' => 'required|email',
                'country'       => 'required',
                'organization'  => 'required',
                'job_title'     => 'required',
                'time_slot'     => 'required',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            if (DieAttach::checkExist($request->input('company_email'))) {
                return redirect('die-attach#die_attach_form')->withErrors('You are already registered.')->withInput();
            }

            $da = DieAttach::create([
                'first_name'    => $request->input('first_name'),
                'last_name'     => $request->input('last_name'),
                'company_email' => $request->input('company_email'),
                'country'       => $request->input('country'),
                'organization'  => $request->input('organization'),
                'job_title'     => $request->input('job_title'),
                'time_slot'     => $request->input('time_slot'),
                'quiz'          => '',
            ]);

            if ($da) {
                return redirect()->route('die_attach_quiz_page', ['id'=>$da->id]);
            } else {
                return redirect('die-attach#die_attach_form')->withErrors('Failed to register.')->withInput();
            }

        } catch (Exception $e) {
            return redirect('die-attach#die_attach_form')->withErrors('Failed to register information.(' . $e->getMessage() . ')')->withInput();
        }
    }

    /**
     * Page URL: die-attach/quiz
     */
    public function die_attach_quiz_page(Request $request, $id)
    {
        return view('event.die_attach_quiz_page', ['id'=>$id]);
    }

    /**
     * Action URL: die-attach/quiz
     *
     * Submit quiz answer
     */
    public function die_attach_quiz_submit(Request $request, $id)
    {
        try {
            if ($da = DieAttach::find($id)) {
                $data = array();
                $data['quiz1'] = $request->input('quiz1');
                $data['quiz2'] = $request->input('quiz2');
                $data['quiz3'] = $request->input('quiz3');
                $da->quiz = serialize($data);
                $result = $da->save();

                if ($result) {
                    return redirect('die-attach')->with('status', 'You have been successfully registered.');
                }
            }
            return back()->withErrors('Failed to register.')->withInput();

        } catch (Exception $e) {
            return back()->withErrors('Failed to register information.(' . $e->getMessage() . ')')->withInput();
        }
    }


    /**
     * Page URL: submissions/die_attach
     * Submission Page for Die Attach
     */
    public function submissions_die_attach_page(Request $request)
    {
        $das = DieAttach::orderBy('created_at', 'DESC')->paginate(10);
        return view('event.submissions_die_attach', ['das'=>$das]);
    }

    /**
     * Page URL: submissions/die_attach/export
     * Submission Export for Die Attach
     */
    public function submissions_die_attach_export(Request $request)
    {
        $headers = array(
            "Content-type" => "text/csv",
            "Content-Disposition" => "attachment; filename=submissions_die_attach.csv",
            "Pragma" => "no-cache",
            "Cache-Control" => "must-revalidate, post-check=0, pre-check=0",
            "Expires" => "0"
        );

        $das = DieAttach::all();
        $columns = array('First name', 'Last name', 'Company email', 'Country', 'Organization', 'Job Title', 'Date & Time', 'Venue', 'Submitted at');
        $columns[] = "Which resin chemistry is used in die-attach products?";
        $columns[] = "What's the commonly used die-attach curing temperature?";
        $columns[] = "Which are more important to cause epoxy bleed out?";
        $columns[] = "What die-attach material property is important for small die sizes?";
        $columns[] = "What die-attach material property is important for large die sizes?";
        $columns[] = "Which material/s will impact MSL performance of a package?";
        $columns[] = "What impacts the most in curing die-attach in a package?";
        $columns[] = "What volatiles evaporates during die-attach curing?";
        $columns[] = "What cause die-attach to shrink during curing?";
        $columns[] = "What property/ies of die-attach material that allow sit to stick well in leadframe and die surface?";
        $columns[] = "What generally cause die-attach delamination?";
        $columns[] = "What is freeze-thaw-void (FTV)?";
        $columns[] = "What is the cause of FTV?";
        $columns[] = "Will FTV formations cause a material's formulation change?";

        $columns[] = "Please specify and Henkel Product Highlights you are interested in:";
        $columns[] = "What specific topic do expect to be discussed during the training?";

        $callback = function() use ($das, $columns)
        {
            $file = fopen('php://output', 'w');
            fputcsv($file, $columns);

            foreach($das as $r) {
                $data = empty($r->quiz)? array():unserialize($r->quiz);
                $row = array(
                    $r->first_name,
                    $r->last_name,
                    $r->company_email,
                    $r->country,
                    $r->organization,
                    $r->job_title,
                    DieAttach::getTimefromTimeSlot($r->time_slot),
                    DieAttach::getVenuefromTimeSlot($r->time_slot),
                    $r->created_at->format('Y-m-d H:i'),

                    $this->get_die_attach_quiz1_answer($data, 'rc'),
                    $this->get_die_attach_quiz1_answer($data, 'ct'),
                    $this->get_die_attach_quiz1_answer($data, 'eb'),
                    $this->get_die_attach_quiz1_answer($data, 'sd'),
                    $this->get_die_attach_quiz1_answer($data, 'ld'),
                    $this->get_die_attach_quiz1_answer($data, 'msl'),
                    $this->get_die_attach_quiz1_answer($data, 'curing'),
                    $this->get_die_attach_quiz1_answer($data, 've'),
                    $this->get_die_attach_quiz1_answer($data, 'shrink'),
                    $this->get_die_attach_quiz1_answer($data, 'leadframe'),
                    $this->get_die_attach_quiz1_answer($data, 'delamination'),
                    $this->get_die_attach_quiz1_answer($data, 'ftv'),
                    $this->get_die_attach_quiz1_answer($data, 'ftv-cause'),
                    $this->get_die_attach_quiz1_answer($data, 'formulation'),

                    empty($data['quiz2'])? '':$data['quiz2'],
                    empty($data['quiz3'])? '':$data['quiz3'],
                );
                fputcsv($file, $row);
            }
            fclose($file);
        };
        return Response::stream($callback, 200, $headers);
    }

    protected function get_die_attach_quiz1_answer($data, $key) {
        if (empty($data['quiz1']) || empty($data['quiz1'][$key])) {
            return '';
        }

        $quiz1 = $data['quiz1'];
        $result = array();
        if (empty($quiz1[$key]['others'])) {
            unset($quiz1[$key]['others_text']);
        }
        foreach ($quiz1[$key] as $k=>$answer) {
            if ( $k == 'q' || $k == 'others' ) {

            } else {
                $result[] = $answer;
            }
        }
        return implode(", ", $result);
    }
}
