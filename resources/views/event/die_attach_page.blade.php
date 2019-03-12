@extends('layouts.event')

@section('htmlheader_title')Die Attach @endsection
@section('title') @endsection

@section('page_id')die-attach @endsection

@section('content_header')
    <img src="{{asset('images/die_attach_pagev2.jpg')}}" class="img-fluid" alt="Die Attach" width="100%">
@endsection

@section('content')
    <div class="row mt-5">
        <div class="col-sm-6">
            <h5 class="font-weight-bold">EVENT INFORMATION</h5>
            <div class="row">
                <div class="col-3 col-md-2 font-weight-bold">Date: </div>
                <div class="col-9 col-md-10">24th April 2019</div>
            </div>
            <div class="row">
                <div class="col-3 col-md-2 font-weight-bold">Time: </div>
                <div class="col-9 col-md-10">09:00 - 16:00</div>
            </div>
            <div class="row">
                <div class="col-3 col-md-2 font-weight-bold">Venue: </div>
                <div class="col-9 col-md-10">
                    P1
                </div>
            </div>
        </div>
        <div class="col-sm-6">

        </div>
    </div>
    <br/>

    <h2 class="title color-red">Learn More about Simplified New Approaches to High Thermal Die Attach</h2>

    <h3 class="font-weight-bold text-center mt-5">REGISTER NOW</h3>
    @include('layouts.includes.status_message')
    <div class="mt-5 mb-5">
        <form id="die_attach_form" action="{{ route('die_attach_register') }}" method="POST">
            @csrf
            <div class="row">
                <div class="form-group col-sm-6">
                    <label>First Name*</label>
                    <input type="text" class="form-control" name="first_name" data-validation="required" value="{{ old('first_name') }}">
                </div>
                <div class="form-group col-sm-6">
                    <label>Last Name*</label>
                    <input type="text" class="form-control" name="last_name" data-validation="required" value="{{ old('last_name') }}">
                </div>
                <div class="form-group col-sm-6">
                    <label>Company Email*</label>
                    <input type="email" class="form-control" id="company_email" name="company_email" data-validation="required" value="{{ old('company_email') }}">
                </div>
                <div class="form-group col-sm-6">
                    <label>Country*</label>
                    <input type="text" class="form-control" name="country" data-validation="required" value="{{ old('country') }}">
                </div>
                <div class="form-group col-sm-6">
                    <label>Organization*</label>
                    <input type="text" class="form-control" name="organization" data-validation="required" value="{{ old('organization') }}">
                </div>
                <div class="form-group col-sm-6">
                    <label>Job Title*</label>
                    <input type="text" class="form-control" name="job_title" data-validation="required" value="{{ old('job_title') }}">
                </div>
            </div>
            <div class="form-group row mt-5">
                <div class="col-sm-12 text-center">
                    <input type="submit" name="submit" class="btn btn-primary" value="Register">
                </div>
            </div>
        </form>
    </div>
@endsection