@extends('layouts.admin')

@section('content')
<a class="btn btn-primary" href="{{ url('opentime')}}">
    <i class="fas fa-angle-double-left"></i> Back to Opening & Closing Times
</a>

<h3>{{$title}}</h3>

    {!! Form::open(['action' => ['OpentimesController@update', $opentimes->opentimes_id], 'method' => 'POST']) !!}
        <div class="form-group"></br>
            <p class="font-weight-bold">Selected day is: </p>
            <input class="form-control" type="text" placeholder="{{$opentimes->days}}" readonly>
            {{-- {{Form::label('days', 'Day')}} --}}
            {{-- {{Form::text('days', $opentimes->days, ['class' => 'form-control disabled', 'placeholder' => 'Day'])}} --}}
        </div>
        <div class="form-group">
            {{Form::label('open_time', 'Opening Time')}}
            {{Form::text('open_time', $opentimes->open_time, ['class' => 'form-control', 'placeholder' => 'Opening Time'])}}
        </div>
        <div class="form-group">
            {{Form::label('close_time', 'Closing Time')}}
            {{Form::text('close_time', $opentimes->close_time, ['class' => 'form-control', 'placeholder' => 'Closing Time'])}}
        </div>
        
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}


@endsection