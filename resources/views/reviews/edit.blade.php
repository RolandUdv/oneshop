@extends('layouts.admin')

@section('content')
<a class="btn btn-primary" href="{{ url('reviews')}}">
    <i class="fas fa-angle-double-left"></i> Back to Reviews
</a>

<div style="padding: 0 5em 0 5em;">
<h3>{{$title}}</h3>

    {!! Form::open(['action' => ['ReviewController@update', $reviews->review_id], 'method' => 'POST']) !!}

        <div class="form-group"></br>
            <p class="font-weight-bold">Review posted on:</p>
            <input class="form-control" type="text" placeholder="{{$reviews->created_at}}" readonly>
        </div>
        <div class="form-group">
            <p class="font-weight-bold">Username:</p>
            <input class="form-control" type="text" placeholder="{{$reviews->username}}" readonly>
        </div>
        <div class="form-group">
             <p class="font-weight-bold">Firstname & Surname:</p>
            <input class="form-control" type="text" placeholder="{{$reviews->firstname}} {{$reviews->surname}}" readonly>
        </div>
        <div class="form-group">
            <p class="font-weight-bold">Rating:</p>
            <input class="form-control" type="text" placeholder="{{$reviews->rating}} ⭐️" readonly>
        </div>
        <div class="form-group">
            {{Form::label('description', 'Description')}}
            {{Form::text('description', $reviews->description, ['class' => 'form-control', 'placeholder' => 'Description'])}}
        </div>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
</div>
@endsection