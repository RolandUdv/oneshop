@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>{{$title}}</h1><br>

    @foreach ($homepages as $homepage)
    <div class="form-group">
        <p class="font-weight-bold">Cover Image:</p>
        <img src="{{url('storage/carousel_images')}}/{{$homepage->cover_image}}" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" alt="image">
    </div>
    <div class="form-group"></br>
        <p class="font-weight-bold">Cover heading:</p>
        <input class="form-control" type="text" placeholder="{{$homepage->cover_heading}}" readonly>
    </div>
    <div class="form-group"></br>
        <p class="font-weight-bold">Cover description:</p>
        <input class="form-control" type="text" placeholder="{{$homepage->cover_description}}" readonly>
    </div>
        
    <div class="form-group">
        <p class="font-weight-bold">Cover Image:</p>
        <img src="{{url('storage/carousel_images2')}}/{{$homepage->cover_image2}}" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" alt="image">
    </div>
    <div class="form-group"></br>
        <p class="font-weight-bold">Cover heading:</p>
        <input class="form-control" type="text" placeholder="{{$homepage->cover_heading2}}" readonly>
    </div>
    <div class="form-group"></br>
        <p class="font-weight-bold">Cover description:</p>
        <input class="form-control" type="text" placeholder="{{$homepage->cover_description2}}" readonly>
    </div>

    <div class="form-group">
        <p class="font-weight-bold">Cover Image:</p>
        <img src="{{url('storage/carousel_images3')}}/{{$homepage->cover_image3}}" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" alt="image">
    </div>
    <div class="form-group"></br>
        <p class="font-weight-bold">Cover heading:</p>
        <input class="form-control" type="text" placeholder="{{$homepage->cover_heading3}}" readonly>
    </div>
    <div class="form-group"></br>
        <p class="font-weight-bold">Cover description:</p>
        <input class="form-control" type="text" placeholder="{{$homepage->cover_description3}}" readonly>
    </div>
    <br>
    <hr>

    <div class="form-group"></br>
        <p class="font-weight-bold">Homepage heading:</p>
        <input class="form-control" type="text" placeholder="{{$homepage->text_heading}}" readonly>
    </div>
    <div class="form-group">
        <p class="font-weight-bold">Homepage description:</p>
        <textarea disabled class="disabled"
            style="width: 100%; height: 200px;">{{$homepage->text_description}}</textarea>
    </div>
    <div class="form-group">
        <p class="font-weight-bold">Right Image:</p>
        <img src="{{url('storage/homepage_images')}}/{{$homepage->right_image}}" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" alt="image">
    </div>
    <a class="btn btn-primary float-right" href="homepage/{{$homepage->homepage_id}}/edit" role="button"><i
        class="fas fa-edit"></i>Edit homepage</a>
    @endforeach

</div>

@endsection