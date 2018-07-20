<p>Your registration is confirmed for the Henkel Technology Day 2018 at Hanoi</p>

<div>Guest name:  {{ $submission->first_name }} {{ $submission->last_name }}</div>
<div>Company name: {{ $submission->company }}</div>
<div style="overflow:hidden;">
    <div style="float: left; width: 60px;">Date:</div>
    <div style="float: left;">11th August 2018</div>
</div>
<div style="overflow:hidden;">
    <div style="float: left; width: 60px;">Venue:</div>
    <div style="float: left;">
        Lotte Centre Hanoi, Emerald,<br/>
        Meeting Room, 6th floor, 54 Lieu Giai, Ba Dinh,<br/>
        Hanoi, Vietnam
    </div>
</div>
<br/>
@include('event.includes.event_footer_description')