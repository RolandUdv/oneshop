@extends('layouts.admin')

@section('content')
<a class="btn btn-primary" href="{{ url('homepage')}}">
    <i class="fas fa-angle-double-left"></i> Back to Homepage
</a>
<br>
<br>
<!-- TODO; Look for a safer way to do this -->
<div class="text-center">
<h2><span class="badge badge-warning float-center" style="padding: 10px;"><i class="fas fa-exclamation-circle"></i>Preview of your current Homepage</span></h2>
{{-- <iframe src="https://www.{{config('app.name')}}.com" style="width: 100%; height: 500px; border:3px solid #ffbd04; margin-top: 10px; margin-bottom: 10px;"></iframe> --}}
<iframe src="https://localhost/oneshop/public/" style="width: 100%; height: 500px; border:3px solid #ffbd04; margin-top: 10px; margin-bottom: 10px;"></iframe>
</div>
<br>

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
