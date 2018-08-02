@extends('layouts.simple')

@section('htmlheader_title')Webinar @endsection

@section('page_id')webinar-semi @endsection

@section('content')
    <div class="content-header">
        <img src="{{asset('images/Semi-sintering-Landing-Page.jpg')}}" class="img-fluid" alt="Webinar Aug.22" width="100%">
    </div>

    <h2 class="title font-weight-bold color-red mt-5 mb-3">Learn More about Simplified New Approaches to High Thermal Die Attach</h2>

    <p>Join distinguished industry experts <strong>Jan Vardaman</strong> of <strong>TechSearch International</strong> and <strong>Davy Nakada</strong> of <strong>Henkel Corporation</strong> for a discussion about the market conditions driving a new approach to high thermal conductive die attach materials and processes.</p>
    <p>Increases in the demand for high-performance power devices have underscored the need for better thermal control at the die level.  This, combined with impending environmental legislation and the challenging processes associated with current materials, has accelerated the requirement for an easily-processed, effective die attach solution for managing the heat generated at the die level.  Register now to secure your spot and improve your competitive advantage by being among those in the know.</p>

    <h5 class="color-dark-blue mt-4 font-weight-bold">ABOUT THE SPEAKERS</h5>

    <div class="speaker-box clearfix">
        <div class="float-left mb-3 mr-3">
            <img src="{{asset('images/Jans_pic6-10.jpg')}}" class="img-fluid" alt="E. Jan Vardaman" >
        </div>
        <div class="mt-3">
            <p class="collapse" id="collapseSummary1">
                <span class="color-red font-weight-bold">E. Jan Vardaman</span>
                is president and founder of TechSearch International, Inc., which has provided semiconductor packaging market research and technology trend analysis since 1987.  She is the co-author of How to Make IC Packages (by Nikkan Kogyo Shinbunsha), a columnist with Printed Circuit Design & Fab/Circuits Assembly magazine, and the author of numerous publications on emerging trends in semiconductor packaging and assembly.  Jan is a senior member of IEEE EPS, an IEEE EPS Distinguished Lecturer, and a member of industry associations SEMI, SMTA, IMAPS, and MEPTEC.  In 2012, Jan received the IMAPS GBC Partnership award.   Before founding TechSearch International, she served on the corporate staff of Microelectronics and Computer Technology Corporation (MCC), the electronics industry’s first pre-competitive research consortium.
            </p>
            <a class="float-right collapsed btn btn-secondary" data-toggle="collapse" href="#collapseSummary1" aria-expanded="false" aria-controls="collapseSummary"></a>
        </div>
    </div>

    <div class="speaker-box clearfix">
        <div class="float-left mb-3 mr-3">
            <img src="{{asset('images/Henkel-1029.JPG')}}" class="img-fluid" alt="Davy Nakada" >
        </div>
        <div class="mt-3">
            <p class="collapse" id="collapseSummary2">
                <span class="color-red font-weight-bold">Davy Nakada</span>
                Vice President, Semiconductor Packaging Materials - Americas for Henkel Corporation’s Adhesive Electronics Strategic Business Unit.  In this position, his responsibilities include support of the existing semiconductor packaging business in the region, as well as the development of Americas-initiated global opportunities. During Davy’s 15+ year tenure with Henkel, he has managed the company’s business efforts in Japan and Korea; held marketing, sales and business development roles; and successfully led cross-functional teams.  Prior to joining Henkel, Davy worked at leading global electronic materials and components companies including Honeywell International and Hitachi High Technologies.
                <br/><br/>
                Davy holds a Bachelor’s degree from the University of California, Berkeley, and a post-graduate professional certification in business development from the University of California, Los Angeles.  He is proficient in Japanese, and continues to use his language skills to help foster Henkel’s global growth.
            </p>
            <a class="float-right collapsed btn btn-secondary" data-toggle="collapse" href="#collapseSummary2" aria-expanded="false" aria-controls="collapseSummary"></a>
        </div>
    </div>

    <h4 id="register-form" class="color-dark-blue mt-5 mb-5 font-weight-bold text-center">REGISTER NOW!</h4>

    @include('layouts.includes.status_message')

    <form class="register-form" action="{{ route('webinar_register_action') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="">First Name*</label>
                    <input type="text" class="form-control" name="first_name" data-validation="required" value="{{ old('first_name') }}">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="">Last Name*</label>
                    <input type="text" class="form-control" name="last_name" data-validation="required" value="{{ old('last_name') }}">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="">Company Email*</label>
                    <input type="text" class="form-control" name="company_email" data-validation="required" value="{{ old('company_email') }}">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="">Country*</label>
                    <input type="text" class="form-control" name="country" data-validation="required" value="{{ old('country') }}">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="">Organization*</label>
                    <input type="text" class="form-control" name="organization" data-validation="required" value="{{ old('organization') }}">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="">Job Title*</label>
                    <input type="text" class="form-control" name="job_title" data-validation="required" value="{{ old('job_title') }}">
                </div>
            </div>
            <div class="col-sm-12">
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="checkbox-register" data-validation="required">
                    <label class="form-check-label" for="checkbox-register">By checking this box, you submit your information to the webinar organizer, who will use it to communicate with you regarding this event and their other services.</label>
                </div>
            </div>
            <div class="col-sm-12 text-center">
                <button type="submit" class="btn btn-primary btn-lg">Register</button>
            </div>
        </div>
    </form>
    <div class="clearfix">
        <img src="{{asset('images/henkel.png')}}" class="float-right">
    </div>
@endsection

@push('scripts')
    <script>
        $.validate();
    </script>
@endpush