@extends('layouts.app')
@include('layouts.carousel')
@section('content')

<div class="container">
    {{-- <h1 class="text-center">{{$title}} to {{config('app.name', 'Brand')}}</h1><br> --}}
</div>


<div class="container">
    <div class="col-md-12 text-center">
    </br>
    </br>
        <h1>Most Popular Services</h1>
    </br>
        <!-- justify-content-center, brings content to the center -->
        @if(count($services) > 0)
        {{-- <div class="btn-toolbar text-center" role="toolbar" aria-label="Toolbar with button groups"> --}}
        {{-- <div class="btn-group btn-group-lg" role="group"> --}}
            @foreach ($services as $service)
            <a href="{{'services'}}"><button type="button" class="btn btn-secondary"
                    style="margin-right:10px; margin-bottom:10px;">{{$service->service_name}}</button></a>
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
        <img src="https://www.thelocalbarbershop.com/wp-content/uploads/2019/10/image00002-600x600.jpeg" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" alt="image">
        {{-- <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="600"
            height="600" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false"
            role="img" aria-label="Placeholder: 500x500">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#eee" /><text x="50%" y="50%" fill="#aaa" dy=".3em">600x600</text>
        </svg> --}}
    </div>
    <div class="col-md-5 order-md-1">
        <h2 class="featurette-heading">Lorem ipsum dolor sit amet, consectetur <span class="text-muted">adipiscing elit,</span></h2>
        <p class="lead">Dsed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
             veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure 
             dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint 
             occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
</div>

{{-- add buttons here --}}

<hr class="featurette-divider"><br>

<style>
.btn-primary {
    background-color: #ff5764!important;
    font-size: 20px!important;
    border-color: #ff5764;
    box-shadow: 2px 2px 5px #000!important;
}

.btn-secondary {
    background-color: #ffbe65!important;
    /* color: #000000!important; */
    font-size: 20px!important;
    border-color: #ffbe65;
    box-shadow: 2px 2px 5px #000!important;
}

.btn-primary:hover {
    background-color: #d41a28!important;
    border-color: #d41a28;
}

.btn-secondary:hover {
    background-color: #e48a0e!important;
    border-color: #e48a0e;
}
</style>

<div class="container">
    <div class="col-md-12 text-center">
            <a href="{{'services'}}"><button type="button" class="btn btn-lg btn-primary"
                style="margin-right:10px; margin-bottom:10px;"><h2 class="text-white">BOOK APPOINTMENT</h2></button></a></br>
                <h2 class="font-weight-bold">OR</h2>
            <a href="{{'tel:01604123456'}}"><button type="button" class="btn btn-lg btn-secondary"
                style="margin-right:10px; margin-bottom:10px;"><h2 class="text-white">
                    <i class="fas fa-phone-alt text-white"></i> CALL US 01604 123456</h2></button></a>
    </div>
</div>


<hr class="featurette-divider"><br>
{{-- <hr class="mt-2 mb-5"> --}}

{{-- https://startbootstrap.com/snippets/thumbnail-gallery/ --}}
<div class="container">

        <h1 class="text-center text-lg-center mt-4 mb-0">Portfolio</h1></br></br>
      
        <div class="row text-center text-lg-left">
      
          <div class="col-lg-3 col-md-4 col-6">
            <a href="#" class="d-block mb-4 h-100">
                  <img class="img-fluid img-thumbnail" src="https://img77.uenicdn.com/image/upload/v1542319549/service_images/39d0efbb-e6ad-4860-a801-46a8aad6b87f.jpg" alt="">
                </a>
          </div>
          {{-- https://img77.uenicdn.com/image/upload/v1542319549/service_images/39d0efbb-e6ad-4860-a801-46a8aad6b87f.jpg --}}
          <div class="col-lg-3 col-md-4 col-6">
            <a href="#" class="d-block mb-4 h-100">
                  <img class="img-fluid img-thumbnail" src="https://www.k9-freestylers.com/wp-content/uploads/2017/10/shutterstock_185540867_1477049627-400x300.jpg" alt="">
                </a>
          </div>
          <div class="col-lg-3 col-md-4 col-6">
            <a href="#" class="d-block mb-4 h-100">
                  <img class="img-fluid img-thumbnail" src="https://i.pinimg.com/400x300/35/96/0c/35960c7289731465368eb984b864aae2.jpg" alt="">
                </a>
          </div>
          <div class="col-lg-3 col-md-4 col-6">
            <a href="#" class="d-block mb-4 h-100">
                    {{-- <img class="img-fluid img-thumbnail" style="max-width:250px!important;" src="https://www.hji.co.uk/wp-content/efs/2018/08/world-barber-day-square.jpg" alt=""> --}}
                  <img class="img-fluid img-thumbnail" src="https://tq1barbers.co.uk/wp-content/uploads/2019/07/2-3-400x300.jpg" alt="">
                </a>
          </div>
        </div>
        </br>
      </div>

@endsection

{{-- <a href="{{ url('/stores') }}">Store test</a> --}}


