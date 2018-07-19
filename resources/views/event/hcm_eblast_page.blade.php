@extends('layouts.event')

@section('htmlheader_title')HCM Eblast @endsection

@section('page_id')hcm-eblast @endsection

@section('content_header')
    <img src="{{asset('images/hcm-banner-aug-9.jpg')}}" class="img-fluid" alt="HCM Eblast" width="100%">
@endsection

@section('content')
    <button type="button" class="btn btn-primary float-right ml-4 mb-4 " data-toggle="modal" data-target="#register_modal">
        Register Now
    </button>

    <p>Join Henkel for an unique opportunity to see the latest material innovations and their specific application within an SMT assembly line.  In addition to interactive presentations by Henkel technology experts, the event is designed with nine different booths to mimic a modern-day production line for perspective on various material considerations for each process area.</p>
    <p>The seminar portion of the event will cover a range of topics that are extremely relevant to today’s manufacturing requirements.  Learn about emerging trends in the electronics assembly market, new developments in solder technology, strategies for thermal management of LEDs and power devices, as well as a preview of what Henkel is doing to facilitate new solar cell structures.  It’s a jam packed day full of useful, practical information to help you increase yield, productivity and profitability.</p>
    <blockquote>
        <div><strong>Date:</strong> 9th August 2018</div>
        <div><strong>Event time:</strong> 9AM – 5PM</div>
        <div><strong>Venue:</strong> Le Meridien Saigon Hotel ,Ballroom 1<br/>
            3C Ton Duc Thang Street, Ben Nghe Ward, District 1, Ho Chi Minh, Vietnam</div>
    </blockquote>
    <p>Space is limited, so reserve your seat today!</p>
    <p>Seminar for the day</p>

    <table class="schedule-table table table-bordered table-striped font-weight-bold">
        <tbody>
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
            <td class="schedule-time">1:30 - 2:15</td>
            <td class="schedule-desc">Solar</td>
        </tr>
        </tbody>
    </table>
    <p>
        For any questions, please contact To Loan Tran - <a href="mailto:to-loan.tran@henkel.com">to-loan.tran@henkel.com</a>
    </p>
    <p>
        <a href="#">For more event details</a>
    </p>

    @include('event.includes.register_modal_panel', ['type'=>'hcm-08-09-2018'])
@endsection