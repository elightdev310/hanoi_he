@extends('layouts.modal')

@section('htmlheader_title')Register @endsection

@section('page_id')register-form @endsection


@section('content')
    <form class="register-form" action="{{ route('register_action', ['type'=>$type]) }}" method="POST">
        @csrf
        <input type="hidden" name="type" value="{{ $type }}">
        <div class="form-group row">
            <div class="col-sm-12">
                <input type="text" class="form-control" name="first_name" data-validation="required" placeholder="First name" value="{{ old('first_name') }}">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-12">
                <input type="text" class="form-control" name="last_name" data-validation="required" placeholder="Last name" value="{{ old('last_name') }}">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-12">
                <input type="text" class="form-control" name="company" data-validation="required" placeholder="Company" value="{{ old('company') }}">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-12">
                <input type="text" class="form-control" name="job_designation" data-validation="required" placeholder="Job designation" value="{{ old('job_designation') }}">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-12">
                <input type="email" class="form-control" id="email" name="email" data-validation="required" placeholder="Email address" value="{{ old('email') }}">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-12">
                <input type="phone" class="form-control" name="phone" data-validation="required" placeholder="Contact number" value="{{ old('phone') }}">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-12">
                <input type="submit" name="submit" class="btn btn-primary" value="Register">
            </div>
        </div>
    </form>
@endsection

@push('scripts')
<script>
    // $('.register-form').on('click', function() {
    //    $(window).trigger('resize');
    // });
    $.validate();
</script>
@endpush