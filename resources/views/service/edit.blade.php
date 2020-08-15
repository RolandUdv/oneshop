@extends('layouts.admin')

@section('content')
<a class="btn btn-primary" href="{{ url('service')}}">
    <i class="fas fa-angle-double-left"></i> Back to Services
</a>

<div style="padding: 0 5em 0 5em;">
<h3>{{$title}}</h3>

    {{-- {!! Form::open(['action' => 'ServiceController@update', 'method' => 'POST']) !!} --}}
    {!! Form::open(['action' => ['ServiceController@update', $services->service_id], 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('service_name', 'Service Name')}}
            {{Form::text('service_name', $services->service_name, ['class' => 'form-control', 'placeholder' => 'Service Name'])}}
        </div>
        <div class="form-group">
            {{Form::label('service_description', 'Service Description')}}
            {{Form::textarea('service_description', $services->service_description, ['class' => 'form-control', 'placeholder' => 'Service Description'])}}
        </div>
        <div class="form-group">
            {{Form::label('service_price', 'Service Price')}}
            {{Form::number('service_price', $services->service_price, ['class' => 'form-control', 'placeholder' => '£ Service Price', 'step' => '0.01', 'min' => '0'])}}
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

