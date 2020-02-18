@extends('layouts.app')
@include('layouts.carousel')
@section('content')

<div class="container">
    <h1 class="text-center">{{$title}} to {{config('app.name', 'Brand')}}</h1><br>
</div>



<div class="container">
    <div class="col-md-12 text-center">
        <!-- justify-content-center, brings content to the center -->
        @if(count($categories) > 0)
        {{-- <div class="btn-toolbar text-center" role="toolbar" aria-label="Toolbar with button groups"> --}}
        {{-- <div class="btn-group btn-group-lg" role="group"> --}}
            @foreach ($categories as $category)
            <a href="/categories/{{$category->category_id}}"><button type="button" class="btn btn-secondary"
                    style="margin-right:10px; margin-bottom:10px;">{{$category->category_name}}</button></a>
            @endforeach
        {{-- </div> --}}
        @endif
        </div>  
    </div>
</div>

{{-- </div> --}}

{{-- <div class="container">
    <div class="row">
        @if(count($categories) > 0)
        <ul>
            @foreach ($categories as $category)
            <li>
                <h3><a href="/categories/{{$category->category_id}}">{{$category->category_name}}</a></h3>
            </li>
            @endforeach
        </ul>
        @endif
    </div>
</div> --}}
{{-- <br> --}}
<hr class="featurette-divider"><br>

<div class="row featurette">
    <div class="col-md-7 order-md-2">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="600"
            height="600" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false"
            role="img" aria-label="Placeholder: 500x500">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#eee" /><text x="50%" y="50%" fill="#aaa" dy=".3em">600x600</text>
        </svg>
    </div>
    <div class="col-md-5 order-md-1">
        <h2 class="featurette-heading">Oh yeah, it’s that good. <span class="text-muted">See for yourself.</span></h2>
        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod
            semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus
            commodo.</p>
    </div>
</div>
<hr class="featurette-divider"><br>

    {{-- @if(count($categories) > 0)
    <ul>
    @foreach ($categories as $category)
        <li>{{$category->$category_id}}</li>
        <li>{{$category->$category_name}}</li>
    @endforeach
    </ul>
@endif --}}

    

    {{-- @if(count($categories) > 0)
        <ul>
        @foreach ($categories as $category)
            <li>{{$category}}</li>
        @endforeach
        </ul>
    @endif --}}

@endsection

{{-- <a href="{{ url('/stores') }}">Store test</a> --}}


