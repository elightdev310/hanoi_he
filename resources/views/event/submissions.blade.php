@extends('layouts.event')

@section('htmlheader_title')Submissions @endsection
@section('title')Submissions @endsection
@section('page_id')submissions @endsection

@section('content')
    <div class="clearfix mb-2">
        <a class="btn btn-primary float-right" href="{{ route('submissions_export') }}">Export</a>
    </div>
    <table class="table table-striped">
        <thead>
            <th>First name</th>
            <th>Last name</th>
            <th>Company</th>
            <th>Job designation</th>
            <th>Email address</th>
            <th>Contact number</th>
            <th>Submitted at</th>
            <th>Event</th>
        </thead>
        <tbody>
            @if (!$submissions->count())
                <tr>
                    <td colspan = "8">
                        <p class="text-center">No submission</p>
                    </td>
                </tr>
            @else
                @foreach ($submissions as $sm)
                <tr>
                    <td>{{ $sm->first_name }}</td>
                    <td>{{ $sm->last_name }}</td>
                    <td>{{ $sm->company }}</td>
                    <td>{{ $sm->job_designation }}</td>
                    <td>{{ $sm->email }}</td>
                    <td>{{ $sm->phone }}</td>
                    <td>{{ $sm->created_at->format('Y-m-d H:i') }}</td>
                    <td>{{ $sm->getEventTypeName() }}</td>
                </tr>
                @endforeach
            @endif
        </tbody>
    </table>

    {{ $submissions->links() }}
@endsection