@extends('layouts.admin')

@section('content')
<a class="btn btn-primary" href="{{ url('homepage')}}">
    <i class="fas fa-angle-double-left"></i> Back to Homepage
</a>


<h3>{{$title}}</h3>

    {!! Form::open(['action' => ['HomepageController@update', $homepages->homepage_id], 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('text_heading', 'Homepage heading:')}}
            {{Form::text('text_heading', $homepages->text_heading, ['class' => 'form-control', 'placeholder' => 'Homepage heading:'])}}
        </div>
        <div class="form-group">
            {{Form::label('text_description', 'Homepage description:')}}
            {{Form::textarea('text_description', $homepages->text_description, ['class' => 'form-control', 'placeholder' => 'Homepage description:'])}}
        </div>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection
