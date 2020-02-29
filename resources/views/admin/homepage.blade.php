@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>{{$title}}</h1><br>


    @foreach ($homepages as $homepage)
    <div class="form-group"></br>
        <p class="font-weight-bold">Homepage heading:</p>
        <input class="form-control" type="text" placeholder="{{$homepage->text_heading}}" readonly>
    </div>
    <div class="form-group">
        <p class="font-weight-bold">Homepage description:</p>
        <textarea disabled class="disabled"
            style="width: 100%; height: 200px;">{{$homepage->text_description}}</textarea>
    </div>
    {{-- <div class="form-group"></br>
        <p class="font-weight-bold">Homepage heading:</p>
        <input class="form-control" type="text" placeholder="{{$homepage->text_heading}}" readonly>
    </div> --}}
    @endforeach



    <a class="btn btn-primary float-right" href="homepage/{{$homepage->homepage_id}}/edit" role="button"><i
            class="fas fa-edit"></i>Edit homepage</a>


</div>

@endsection