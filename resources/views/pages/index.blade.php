@extends('layouts.app')
{{-- @include('layouts.carousel') --}}
@section('content')

<div class="container">
    {{-- <h1 class="text-center">{{$title}} to {{config('app.name', 'Brand')}}</h1><br> --}}
</div>


<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        @foreach($homepages as $homepage)
        <div class="carousel-item active">
          <img src="{{url('storage/carousel_images')}}/{{$homepage->cover_image}}" class="d-block w-100" alt="{{$homepage->cover_image}}">
            <div class="carousel-caption d-none d-md-block">
              <h5 class="text-uppercase">{{$homepage->cover_heading}}</h5>
              <p>{{$homepage->cover_description}}</p>
            </div>
          </div>
        <div class="carousel-item">
            <img src="{{url('storage/carousel_images2')}}/{{$homepage->cover_image2}}" class="d-block w-100" alt="{{$homepage->cover_heading2}}">
            <div class="carousel-caption d-none d-md-block">
                <h5 class="text-uppercase">{{$homepage->cover_heading2}}</h5>
                <p>{{$homepage->cover_description2}}</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{url('storage/carousel_images3')}}/{{$homepage->cover_image3}}" class="d-block w-100" alt="{{$homepage->cover_heading3}}">
            <div class="carousel-caption d-none d-md-block">
                <h5 class="text-uppercase">{{$homepage->cover_heading3}}</h5>
                <p>{{$homepage->cover_description3}}</p>
            </div>
          </div>
        </div>
        @endforeach
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
{{-- </div> --}}




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
    @foreach ($homepages as $homepage)
    <img src="{{url('storage/homepage_images')}}/{{$homepage->right_image}}" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" alt="image">
    @endforeach
    </div>
    <div class="col-md-5 order-md-1">
        @foreach ($homepages as $homepage)
        <h2 class="featurette-heading">{{$homepage->text_heading}}</h2>
        <p class="lead">{{$homepage->text_description}}</p>
        @endforeach
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
            @foreach ($stores as $store)
            <a href="tel:{{$store->phone_no}}"><button type="button" class="btn btn-lg btn-secondary"
                style="margin-right:10px; margin-bottom:10px;"><h2 class="text-white">
                    <i class="fas fa-phone-alt text-white"></i> CALL US {{$store->phone_no}}</h2></button></a>
            @endforeach
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


