@extends('layouts.event')

@section('htmlheader_title')Webinar Submissions @endsection
@section('title')Webinar Submissions @endsection
@section('page_id')webinar_submissions @endsection

@section('content')
    <div class="clearfix mb-2">
        <a class="btn btn-primary float-right" href="{{ route('submissions_webinar_export') }}">Export</a>
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
            @if (!$wrs->count())
                <tr>
                    <td colspan = "7">
                        <p class="text-center">No submission</p>
                    </td>
                </tr>
            @else
                @foreach ($wrs as $wr)
                <tr>
                    <td>{{ $wr->first_name }}</td>
                    <td>{{ $wr->last_name }}</td>
                    <td>{{ $wr->company_email }}</td>
                    <td>{{ $wr->country }}</td>
                    <td>{{ $wr->organization }}</td>
                    <td>{{ $wr->job_title }}</td>
                    <td>{{ $wr->created_at->format('Y-m-d H:i') }}</td>
                </tr>
                @endforeach
            @endif
        </tbody>
    </table>

    {{ $wrs->links() }}
@endsection
