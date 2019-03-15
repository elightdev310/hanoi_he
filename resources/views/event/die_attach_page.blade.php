@extends('layouts.event')

@section('htmlheader_title')Die Attach @endsection
@section('title') @endsection

@section('page_id')die-attach @endsection

@section('content_header')
    <img src="{{asset('images/die_attach_pagev2.jpg')}}" class="img-fluid" alt="Die Attach" width="100%">
@endsection

@section('content')
    <h2 class="title color-red mt-5">Learn More about Simplified New Approaches to High Thermal Die Attach</h2>

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
                    <input type="text" class="form-control country-field" name="country" data-validation="required" value="{{ old('country') }}">
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
            <div class="mt-5">
                <table class="time-slot-table table table-bordered table-striped table-hover">
                    <thead>
                        <th></th>
                        <th class="">Date</th>
                        <th class="">Available schedule of supplier</th>
                        <th class="">Time</th>
                        <th class="">Venue</th>
                    </thead>
                    <tobdy>
                        <tr>
                            <td><input type="radio" name="time_slot" value="ts-0424-p1" id="ts-0424-p1"></td>
                            <td>Wednesday, April 24, 2019</td>
                            <td></td>
                            <td>9:00AM - 11:00AM</td>
                            <td>P1</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="time_slot" value="ts-0424-p4" id="ts-0424-p4"></td>
                            <td>Wednesday, April 24, 2019</td>
                            <td></td>
                            <td>2:00PM - 4:00PM</td>
                            <td>P4</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="time_slot" value="ts-0425-p1" id="ts-0425-p1"></td>
                            <td>Thursday, April 25, 2019</td>
                            <td></td>
                            <td>8:00AM - 11:00AM</td>
                            <td>P1</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="time_slot" value="ts-0425-p4" id="ts-0425-p4"></td>
                            <td>Thursday, April 25, 2019</td>
                            <td></td>
                            <td>2:00PM - 5:00PM</td>
                            <td>P4</td>
                        </tr>
                    </tobdy>
                    </tobdy>
                </table>
            </div>
            <div class="form-group row mt-5">
                <div class="col-sm-12 text-center">
                    <input type="submit" name="submit" class="btn btn-primary" value="Register">
                </div>
            </div>
        </form>
    </div>
@endsection