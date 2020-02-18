@extends('layouts.app')

@section('content')
<div class="container">
            <h1>{{$title}}</h1><br>
    </div>
    @include('layouts.smallpost') <!--test to see if it works -->
    @include('layouts.largepost') <!-- test to see if it works -->
@endsection