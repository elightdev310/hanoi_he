@extends('layouts.event')

@section('htmlheader_title')Die Attach Submissions @endsection
@section('title')Die Attach Submissions @endsection
@section('page_id')die_attach_submissions @endsection

@section('content')
<div class="clearfix mb-2">
    <a class="btn btn-primary float-right" href="{{ route('submissions_die_attach_export') }}">Export</a>
</div>
<table class="table table-striped">
    <thead>
    <th>First name</th>
    <th>Last name</th>
    <th>Company email</th>
    <th>Country</th>
    <th>Orgnization</th>
    <th>Job title</th>
    <th>Submitted at</th>
    </thead>
    <tbody>
    @if (!$das->count())
    <tr>
        <td colspan = "7">
            <p class="text-center">No submission</p>
        </td>
    </tr>
    @else
    @foreach ($das as $da)
    <tr>
        <td>{{ $da->first_name }}</td>
        <td>{{ $da->last_name }}</td>
        <td>{{ $da->company_email }}</td>
        <td>{{ $da->country }}</td>
        <td>{{ $da->organization }}</td>
        <td>{{ $da->job_title }}</td>
        <td>{{ $da->created_at->format('Y-m-d H:i') }}</td>
    </tr>
    @endforeach
    @endif
    </tbody>
</table>

{{ $das->links() }}
@endsection
