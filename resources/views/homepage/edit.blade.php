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

<h3 class="text-center">{{$title}}</h3>

    <div style="padding: 0 5em 0 5em;">
    {!! Form::open(['action' => ['HomepageController@update', $homepages->homepage_id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('text_heading', 'Homepage heading:')}}
            {{Form::text('text_heading', $homepages->text_heading, ['class' => 'form-control', 'placeholder' => 'Homepage heading'])}}
        </div>
        <div class="form-group">
            {{Form::label('text_description', 'Homepage description:')}}
            {{Form::textarea('text_description', $homepages->text_description, ['class' => 'form-control', 'placeholder' => 'Homepage description'])}}
        </div>
        <div class="form-group text-dark" style="padding: 1em;">
            <i class="fas fa-image" aria-hidden="true"></i>
            {{Form::label('right_image', 'Right Image (Max 2MB)')}}
            {{Form::file('right_image')}}
        </div>
        <div class="form-group">
            {{Form::label('cover_heading', 'Cover heading text:')}}
            {{Form::text('cover_heading', $homepages->cover_heading, ['class' => 'form-control', 'placeholder' => 'Cover heading text'])}}
        </div>
        <div class="form-group">
            {{Form::label('cover_description', 'Cover description:')}}
            {{Form::text('cover_description', $homepages->cover_description, ['class' => 'form-control', 'placeholder' => 'Cover description'])}}
        </div>
        <div class="form-group text-dark" style="padding: 1em;">
            <i class="fas fa-image" aria-hidden="true"></i>
            {{Form::label('cover_image', 'Cover Image 1 (Max 2MB)')}}
            {{Form::file('cover_image')}}
        </div>
                <div class="form-group">
            {{Form::label('cover_heading2', 'Cover heading text 2:')}}
            {{Form::text('cover_heading2', $homepages->cover_heading2, ['class' => 'form-control', 'placeholder' => 'Cover heading text'])}}
        </div>
        <div class="form-group">
            {{Form::label('cover_description2', 'Cover description 2:')}}
            {{Form::text('cover_description2', $homepages->cover_description2, ['class' => 'form-control', 'placeholder' => 'Cover description'])}}
        </div>
        <div class="form-group text-dark" style="padding: 1em;">
            <i class="fas fa-image" aria-hidden="true"></i>
            {{Form::label('cover_image2', 'Cover Image 2 (Max 2MB)')}}
            {{Form::file('cover_image2')}}
        </div>
                <div class="form-group">
            {{Form::label('cover_heading3', 'Cover heading text 3:')}}
            {{Form::text('cover_heading3', $homepages->cover_heading3, ['class' => 'form-control', 'placeholder' => 'Cover heading text'])}}
        </div>
        <div class="form-group">
            {{Form::label('cover_description3', 'Cover description 3:')}}
            {{Form::text('cover_description3', $homepages->cover_description3, ['class' => 'form-control', 'placeholder' => 'Cover description'])}}
        </div>
        <div class="form-group text-dark" style="padding: 1em;">
            <i class="fas fa-image" aria-hidden="true"></i>
            {{Form::label('cover_image3', 'Cover Image 3 (Max 2MB)')}}
            {{Form::file('cover_image3')}}
        </div>
        {{-- <div class="form-group bg-warning text-dark" style="padding: 1em;">
            <i class="fas fa-image" aria-hidden="true"></i>
            {{Form::label('right_image', 'Cover Image 1 (Max 2MB)')}}
            {{Form::file('right_image')}}
        </div> --}}
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
    </div>
@endsection
