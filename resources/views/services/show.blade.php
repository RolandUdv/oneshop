@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{$title}}</h1>
    <br>
    <div class="row">
        <div class="col-sm-8">
            <h4>@include('inc.todaydate')</h4>
            Put timeslot here
        </div> <!-- col-sm-8 end -->
        <div class="col-sm-4">
            {!! Form::open(['action' => ['PagesController@create', $service_id], 'method' => 'POST']) !!}

            <div class="form-group"></br>
                <h4 class="font-weight-bold">Service:</h4>
                <input class="form-control" type="text" placeholder="{{$service_name}}" readonly>
            </div>
            <div class="form-group"></br>
                <h4 class="font-weight-bold">Service Cost:</h4>
                <input class="form-control" type="text" placeholder="£ {{$service_price}}" readonly>
            </div>
            <div class="text-center">
                {{Form::hidden('_method','PUT')}}
                {{Form::submit('Book Appointment', ['class' => 'btn btn-primary btn-lg btn-block'])}}
                {!! Form::close() !!}
            </div>
        </div> <!-- col-sm-4 end -->
    </div> <!-- div row end -->


</div> <!-- div container end -->


@endsection