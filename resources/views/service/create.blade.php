@extends('layouts.admin')

@section('content')
<a class="btn btn-primary" href="{{ url('service')}}">
    <i class="fas fa-angle-double-left"></i> Back to Services
</a>

<h3>{{$title}}</h3>

    {!! Form::open(['action' => 'ServiceController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('service_name', 'Service Name')}}
            {{Form::text('service_name', 'Haircut', ['class' => 'form-control', 'placeholder' => 'Service Name'])}}
        </div>
        <div class="form-group">
            {{Form::label('service_description', 'Service Description')}}
            {{Form::textarea('service_description', 'Very beautiful and wonderful service is being offered', ['class' => 'form-control', 'placeholder' => 'Service Description'])}}
        </div>
        <div class="form-group">
            {{Form::label('service_price', 'Service Price')}}
            {{Form::number('service_price', '', ['class' => 'form-control', 'placeholder' => '£ Service Price', 'step' => '0.01', 'min' => '0'])}}
        </div>
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection