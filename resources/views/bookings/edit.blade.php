@extends('layouts.admin')

@section('content')
<a class="btn btn-primary" href="{{ url('bookings')}}">
    <i class="fas fa-angle-double-left"></i> Back to Bookings
</a>

<h3>{{$title}}</h3>
<div style="padding: 0 5em 0 5em;">
    {!! Form::open(['action' => ['BookingController@update', $bookings->booking_id], 'method' => 'POST']) !!}
        {{-- <div class="form-group">
            {{Form::label('created_at', 'Created At')}}
            {{Form::date('created_at', $bookings->created_at, ['class' => 'form-control input-group-date', 'placeholder' => 'Created At'])}}
        </div> --}}
        {{-- <div class="form-group">
            {{Form::label('service_id', 'Service ID')}}
            {{Form::text('service_id', $bookings->service_id, ['class' => 'form-control', 'placeholder' => 'Service ID'])}}
        </div> --}}
        <div class="form-group">
            {{Form::label('service_name', 'Service Name')}}
            {{Form::text('service_name', $bookings->service_name, ['class' => 'form-control', 'placeholder' => 'Service Name'])}}
        </div>
        <div class="form-group">
            {{Form::label('timeslot', 'Timeslot')}}
            {{Form::text('timeslot', $bookings->timeslot, ['class' => 'form-control', 'placeholder' => 'Timeslot'])}}
        </div>
        <div class="form-group">
            {{Form::label('service_price', 'Service Price in £')}}
            {{Form::number('service_price', $bookings->service_price, ['class' => 'form-control', 'placeholder' => '£ Service Price', 'step' => '0.01', 'min' => '0'])}}
        </div>
        <div class="form-group">
            {{Form::label('service_length', 'Service Length')}}
            {{Form::select('service_length', array('0' => '15m', '1' => '30m', '2' => '45m', '3' => '60m', '4' => '1hr 15m', '5' => '1hr 30m', '6' => '1hr 45m', '7' => '2hrs'))}}
        </div>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
</div>
@endsection

@section('script')

@endsection