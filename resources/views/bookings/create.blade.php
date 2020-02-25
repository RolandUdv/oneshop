@extends('layouts.admin')

@section('content')
<a class="btn btn-primary" href="{{ url('bookings')}}">
    <i class="fas fa-angle-double-left"></i> Back to Bookings
</a>

<h3>{{$title}}</h3>

{{-- {{$items = Items::pluck('service_name', 'service_id')}} --}}
{{-- {{$items = Items::pluck(['service_id', 'service_name']);}} --}}
{{-- $items = Items::lists('name', 'id'); --}}


{{-- {!! Form::open(['action' => ['BookingController@store', $bookings->booking_id], 'method' => 'POST']) !!} --}}
{!! Form::open(['action' => 'BookingController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('service_id', 'Service Id')}}
            {{Form::select('service_id', $serviceid, null, ['class' => 'form-control'])}}
            {{-- {{Form::select('items', $items, null, );}} --}}
            {{-- {{Form::select('service_id', array('0' => 'No', '1' => 'Yes'))}} --}}
        </div>
        {{-- <div class="form-group">
            {{Form::label('service_name', 'Service Name')}}
            {{Form::select('service_name', $servicename, null, ['class' => 'form-control'])}}
        </div> --}}
        <div class="form-group">
            {{Form::label('service_length', 'Service Length')}}
            {{Form::select('service_length', array('0' => '15m', '1' => '30m', '2' => '45m', '3' => '60m', '4' => '1hr 15m', '5' => '1hr 30m', '6' => '1hr 45m', '7' => '2hrs'))}}
        </div>
        {{-- TIMESLOT --}}
        {{-- <div class="form-group">
            {{Form::label('service_length', 'Timeslot')}}
            {{Form::select('service_length', array('0' => '15m', '1' => '30m', '2' => '45m', '3' => '60m', '4' => '1hr 15m', '5' => '1hr 30m', '6' => '1hr 45m', '7' => '2hrs'))}}
        </div> --}}
        {{-- <div class="form-group">
            {{Form::label('service_length', 'Service Length')}}
            {{Form::select('service_length', $servicelength, null, ['class' => 'form-control'])}}
        </div> --}}
        <div class="form-group">
            {{Form::label('service_price', 'Service Price')}}
            {{Form::select('service_price', $serviceprice, null, ['class' => 'form-control'])}}
        </div>
        {{-- <div class="form-group">
            {{Form::label('user_id', 'User Id')}}
            {{Form::number('user_id', $bookings->user_id, ['class' => 'form-control', 'placeholder' => 'User Id'])}}
        </div> --}}
        {{-- <div class="form-group">
            {{Form::label('service_name', 'Service Name')}}
            {{Form::text('service_name', $bookings->service_name, ['class' => 'form-control', 'placeholder' => 'Service Name'])}}
        </div> --}}
        {{-- <div class="form-group">
            {{Form::label('service_price', 'Service Price')}}
            {{Form::number('service_price', '', ['class' => 'form-control', 'placeholder' => '£ Service Price', 'step' => '0.01', 'min' => '0'])}}
        </div> --}}
        {{-- <div class="form-group">
            {{Form::label('service_length', 'Service Length')}}
            {{Form::select('service_length', array('0' => '15m', '1' => '30m', '2' => '45m', '3' => '1hr', '4' => '1hr 15m', '5' => '1hr 30m', '6' => '1hr 45m', '7' => '2hrs'))}}
        </div> --}}
        {{-- <div class="form-group">
            {{Form::label('firstname', 'Firstname')}}
            {{Form::text('firstname', $bookings->firstname, ['class' => 'form-control', 'placeholder' => 'Firstname'])}}
        </div> --}}
        {{-- <div class="form-group">
            {{Form::label('surname', 'Surname')}}
            {{Form::text('surname', $bookings->surname, ['class' => 'form-control', 'placeholder' => 'Surname'])}}
        </div> --}}
        {{-- <div class="form-group">
            {{Form::label('username', 'Username')}}
            {{Form::text('username', $bookings->username, ['class' => 'form-control', 'placeholder' => 'Username'])}}
        </div> --}}
        {{-- <div class="form-group">
            {{Form::label('email', 'Email')}}
            {{Form::text('email', $bookings->email, ['class' => 'form-control', 'placeholder' => 'Email'])}}
        </div> --}}
        {{-- <div class="form-group">
            {{Form::label('password', 'Password')}}
            {{Form::text('password', $bookings->password, ['class' => 'form-control', 'placeholder' => 'Password'])}}
        </div> --}}
        {{-- <div class="form-group">
            {{Form::label('phone_no', 'Phone Number')}}
            {{Form::number('phone_no', $bookings->phone_no, ['class' => 'form-control', 'placeholder' => 'Phone Number'])}}
        </div> --}}
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
        {{-- {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!} --}}

@endsection