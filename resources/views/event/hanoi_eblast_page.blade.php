@extends('layouts.event')

@section('htmlheader_title')Hanoi Eblast @endsection

@section('page_id')hanoi-eblast @endsection

@section('content_header')
    <img src="{{asset('images/hanoi-banner-aug-11.jpg')}}" class="img-fluid" alt="Hanoi Eblast" width="100%">
@endsection

@section('content')
    <button type="button" class="btn btn-primary float-right ml-4 mb-4 " data-toggle="modal" data-target="#register_modal">
        Register Now
    </button>

    <p>Think handheld manufacturing is completely in hand?  Henkel can help you improve device performance and reliability even more.  Join us for a complimentary seminar to find out what top handheld customers have already discovered:  A Henkel partnership is key to success.</p>
    <p>During this full day event, our top handheld materials technology experts will deliver the latest information to ensure handheld devices continue to deliver on consumer demands.  Attend this unique seminar and learn about:</p>
    <ul>
        <li>The latest trends in mobile manufacturing and what the future holds</li>
        <li>New structural bonding for lasting durability and performance</li>
        <li>Encapsulation of key components and entry points for reliable waterproofing</li>
        <li>Comprehensive material sets for compact camera module production</li>
    </ul>
    <p>Plus, get a preview of Henkel’s work in the solar market and what our electrically conductive adhesives are doing to enable alternative energy advances.</p>
    <p>Space is limited, so register today to reserve your seat!</p>

    <blockquote>
        <div><strong>Date:</strong> 11th August 2018</div>
        <div><strong>Event time:</strong> 9AM – 5PM</div>
        <div><strong>Venue:</strong> Lotte Centre Hanoi, Emerald Meeting room,<br/>
            6th Floor, 54 Lieu Giai, Ba Dinh, Hanoi, Vietnam</div>
    </blockquote>

    <p>Seminar for the day</p>

    <table class="schedule-table table table-bordered table-striped font-weight-bold">
        <tbody>
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
            <td class="schedule-time">1:30 - 2:15</td>
            <td class="schedule-desc">Solar</td>
        </tr>
        </tbody>
    </table>
    <p>
        For any questions, please contact Loan Tran - <a href="mailto:to-loan.tran@henkel.com">to-loan.tran@henkel.com</a>
    </p>
    <p>
        <a href="#">For more event details</a>
    </p>

    @include('event.includes.register_modal_panel', ['type'=>'hanoi-08-11-2018'])
@endsection