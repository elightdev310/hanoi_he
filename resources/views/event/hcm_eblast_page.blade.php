@extends('layouts.event')

@section('htmlheader_title')HCM Eblast @endsection
@section('title')Leading Solutions for Electronics Industry @endsection

@section('page_id')hcm-eblast @endsection

@section('content_header')
    <img src="{{asset('images/hcm-banner-aug-9.jpg')}}" class="img-fluid" alt="HCM Eblast" width="100%">
@endsection

@section('content')
    <button type="button" class="btn btn-primary float-right ml-4 mb-4 " data-toggle="modal" data-target="#register_modal">
        Register Now
    </button>

    <p>Join Henkel for an unique opportunity to see <strong>the latest material innovations and their specific application within an SMT assembly line.</strong>  In addition to interactive presentations by Henkel technology experts, the event is designed with nine different booths to mimic a modern-day production line for perspective on various material considerations for each process area.</p>
    <p>The seminar portion of the event will <strong>cover a range of topics that are extremely relevant to today’s manufacturing requirements</strong>.  Learn about emerging trends in the electronics assembly market, new developments in solder technology, strategies for thermal management of LEDs and power devices, as well as a preview of what Henkel is doing to facilitate new solar cell structures.  It’s a jam packed day full of useful, practical information to help you increase yield, productivity and profitability.</p>
    <br/>

    <div class="row">
        <div class="col-md-4">
            <h5 class="font-weight-bold color-red">EVENT INFORMATION</h5>
            <div class="row">
                <div class="col-3 font-weight-bold">Date: </div>
                <div class="col-9">9th August 2018</div>
            </div>
            <div class="row">
                <div class="col-3 font-weight-bold">Venue: </div>
                <div class="col-9">Le Meridien Saigon Hotel ,Ballroom 1, 3C Ton Duc Thang Street, Ben Nghe Ward, District 1, Ho Chi Minh, Vietnam</div>
            </div>
        </div>
        <div class="col-md-8">
            <img src="{{asset('images/Ho_Chi_Minh_icons_HR.jpg')}}" class="img-fluid" width="100%">
        </div>
    </div>
    <br/>

    <h5 class="font-weight-bold color-red">EVENT AGENDA</h5>
    <table class="schedule-table table">
        <thead>
            <th class="schedule-time">Time</th>
            <th class="schedule-desc">Topic</th>
        </thead>
        <tbody>
            <tr>
                <td class="schedule-time">8:45 - 9:00</td>
                <td >Registration Start</td>
            </tr>
            <tr>
                <td class="schedule-time">9:00 - 9:15</td>
                <td class="schedule-desc">Opening and Welcoming Sppech</td>
            </tr>
            <tr>
                <td colspan="2">
                    7 Assembly line stations exhibition
                </td>
            </tr>
            <tr>
                <td class="schedule-time">10:00 - 10:20</td>
                <td class="schedule-desc">Introduction - Latest trends of Electornics Industry</td>
            </tr>
            <tr>
                <td class="schedule-time">10:20 - 11:05</td>
                <td class="schedule-desc">New Generation Solder Introduction</td>
            </tr>
            <tr>
                <td class="schedule-time">11:20 - 12:05</td>
                <td class="schedule-desc">Thermal Interface material for LED & Power</td>
            </tr>
            <tr>
                <td class="schedule-time">12:05 - 13:00</td>
                <td class="schedule-desc">Lunch Break</td>
            </tr>
            <tr>
                <td class="schedule-time">13:30 - 14:15</td>
                <td class="schedule-desc">Structure Bonding</td>
            </tr>
            <tr>
                <td class="schedule-time">14:15 - 15:00</td>
                <td class="schedule-desc">Solar</td>
            </tr>
        </tbody>
    </table>
    @include('event.includes.event_footer_description')

    @include('event.includes.register_modal_panel', ['type'=>'hcm-08-09-2018'])
@endsection