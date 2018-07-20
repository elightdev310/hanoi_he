@extends('layouts.event')

@section('htmlheader_title')Hanoi Eblast @endsection
@section('title')Leading Solutions for Electronics Industry @endsection

@section('page_id')hanoi-eblast @endsection

@section('content_header')
    <img src="{{asset('images/hanoi-banner-aug-11.jpg')}}" class="img-fluid" alt="Hanoi Eblast" width="100%">
@endsection

@section('content')
    <button type="button" class="btn btn-primary float-right ml-4 mb-4 " data-toggle="modal" data-target="#register_modal">
        Register Now
    </button>

    <p>Think handheld manufacturing is completely in hand?  Henkel can help you improve device performance and reliability even more.  <strong>Join us for a complimentary seminar to find out what top handheld customers have already discovered:  A Henkel partnership is key to success.</strong></p>
    <p>During this full day event, our top handheld materials technology experts will deliver the latest information to ensure handheld devices continue to deliver on consumer demands.  Attend this unique seminar and learn about:</p>
    <ul>
        <li>The latest trends in mobile manufacturing and what the future holds</li>
        <li>New structural bonding for lasting durability and performance</li>
        <li>Encapsulation of key components and entry points for reliable waterproofing</li>
        <li>Comprehensive material sets for compact camera module production</li>
    </ul>
    <p>Plus, get a preview of Henkel’s work in the solar market and what our electrically conductive adhesives are doing to enable alternative energy advances.</p>
    <br/>

    <div class="row">
        <div class="col-md-4">
            <h5 class="font-weight-bold color-red">EVENT INFORMATION</h5>
            <div class="row">
                <div class="col-3 font-weight-bold">Date: </div>
                <div class="col-9">11th August 2018</div>
            </div>
            <div class="row">
                <div class="col-3 font-weight-bold">Venue: </div>
                <div class="col-9">Lotte Centre Hanoi, Emerald Meeting room, 6th Floor, 54 Lieu Giai, Ba Dinh, Hanoi, Vietnam</div>
            </div>
        </div>
        <div class="col-md-8">
            <img src="{{asset('images/Hanoi_Invitation_icons_HR.jpg')}}" class="img-fluid" width="100%">
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
                    5 Technology Stations Exhibition <br/>(Camera module, Underfill, Encapsulation, Structure bonding, Solar)
                </td>
            </tr>
            <tr>
            <tr>
                <td class="schedule-time">10:00 - 10:20</td>
                <td class="schedule-desc">Introduction - Mobile application</td>
            </tr>
            <tr>
                <td class="schedule-time">10:20 - 11:05</td>
                <td class="schedule-desc">Structure Bonding</td>
            </tr>
            <tr>
                <td class="schedule-time">11:20 - 12:05</td>
                <td class="schedule-desc">Encapsulation</td>
            </tr>
            <tr>
                <td class="schedule-time">12:05 - 13:00</td>
                <td class="schedule-desc">Lunch Break</td>
            </tr>
            <tr>
                <td class="schedule-time">13:30 - 14:15</td>
                <td class="schedule-desc">Compact Camera Module</td>
            </tr>
            <tr>
                <td class="schedule-time">14:15 - 15:00</td>
                <td class="schedule-desc">Solar</td>
            </tr>
        </tbody>
    </table>
    @include('event.includes.event_footer_description')

    @include('event.includes.register_modal_panel', ['type'=>'hanoi-08-11-2018'])
@endsection