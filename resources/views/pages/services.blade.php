@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{$title}}</h1></br>
</div>
{{-- @for ($i = 0; $i<100; $i++) --}}
<style>
    .page-item.active .page-link {
        z-index: 1;
        color: #fff;
        background-color: #FF5864;
        border-color: #FF5864;
    }

    /* Align pagination in the center */
    .pagination {
        display: flex;
        justify-content: center;
    }

    .page-item .page-link {
        font-size: 20px;
    }

    .fa-star {
        color: #FCB700;
    }

    .social-btn {
        color: #ffffff !important;
        /* background-color: #5c5c5c; */
        background-color: #FF5864;
        border-radius: 20px;
    }

    .social-btn:hover {
        background-color: #d41a28!important;
        border-color: #d41a28;
    }

    .fa-facebook-square,
    .fa-instagram,
    .fa-twitter {
        font-size: 1.5em;
    }

    .service-price-txt,
    .service-name-txt {
        font-weight: 600;
    }

    .btn-link {
        color: #000000 !important;
        font-weight: 600;
    }

    .col-sm-8 {
        margin-bottom: 20px;
    }

    th {
        float: left;
        font-weight: 800 !important;
        font-size: 18px;
    }

    td {
        float: right;
        font-size: 18px;
    }

    .col-sm-4 {
        background-color: #eaeaea;
        /* box-shadow: 2px 2px 5px; */
        border-radius: 20px;
        padding: 10px;
    }

    .telno-widget,
    .opentimes-widget {
        padding: 10px;
        border-radius: 20px;
        min-height: 100px;
        height: auto;
        /* background-color: blue; */
        /* background-color: #F7F7F7; */
        width: 100%;
    }

    .btn-primary {
        background-color: #FF5864 !important;
        border-color: #ff5764;
    }

    .btn-primary:hover {
        background-color: #d41a28!important;
        border-color: #d41a28;
    }

    .callbtn {
        border-radius: 20px;
        width: 100%;
        background-color: #FF5864;
    }

    .callbtn:hover {
        /* background-color: ; */
    }

    .float-left {
        margin-right: 10px;
    }

    .font-italic {
        margin-top: 10px;
    }

    progress {
        background-color: #525252;
        height: 25px;
        width: 90%;
        border-radius: 25px;
    }

    progress::-webkit-progress-bar {
        background-color: #525252;
        /* background: rgb(255, 95, 109); */
        /* background: linear-gradient(75deg, rgb(255, 86, 100) 0%, rgb(255, 191, 101) 100%); */
        height: 25px;
        width: 90%;
        border-radius: 20px;
    }

    progress::-webkit-progress-value {
        /* background-color: #525252; */
        background: rgb(255, 95, 109);
        background: linear-gradient(75deg, rgb(255, 86, 100) 0%, rgb(255, 191, 101) 100%);
        height: 25px;
        width: 90%;
        border-radius: 20px;
    }
</style>

<div class="container">
    <div class="row">
        <div class="col-sm-8">
            <div id="accordion">
                @foreach($services as $service)
                <div class="card">
                    <div class="card-header" id="headingOne"">
                    <h5 class=" mb-0">
                        <button class="btn btn-link" data-toggle="collapse"
                            data-target="#collapse{{$service->service_id}}" aria-expanded="true"
                            aria-controls="collapse{{$service->service_id}}">
                            <h4 class="service-name-txt">{{$service->service_name}}</h4>
                            {{-- <h3><span class="badge badge-secondary float-right">New</span></h3> --}}
                            {{-- <a class="btn btn-primary float-right" data-toggle="modal" data-target="#ModalView1" href="#hello">BOOK</a> --}}
                            <a href="services/{{$service->service_id}}/{{$service->service_name}}/{{$service->service_price}}">
                                {{-- <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#ModalView1">
                                    BOOK
                                </button> --}}
                                <button type="button" class="btn btn-lg btn-primary float-right">
                                    BOOK
                                </button>
                            </a>
                            <button class="btn btn-link float-right">
                                <h4 class="service-price-txt">£ {{$service->service_price}}</h4>
                            </button>
                            <button
                                class="btn btn-link float-right"><small>(@include('inc.service_length'))</small></button>
                            {{-- <div class="float-right">{{$booking->service_price}}</div> --}}
                    </button>
                    </h5>

                </div>
                <div id="collapse{{$service->service_id}}" class="collapse" aria-labelledby="headingOne"
                    data-parent="#accordion">
                    <div class="card-body">
                        {{$service->service_description}}.
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- modal -->
        {{-- Pop up information --}}
        {{-- @if() --}}
        {{-- @foreach($bookings as $booking) --}}
        <div class="modal fade" id="ModalView1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Book now and reserve your timeslot</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h3 class="text-center">PICK A DATE & TIME</h2></br>

                            {{-- <h4 class="float-left">{{ \Request::get('service_name')}}</h4> --}}

                            <h4 class="float-left">{{$service->service_name}}</h4>
                            <h4 class="float-right"> £ {{$service->service_price}}</h4></br>
                            <hr>
                            <h5 class="float-right">@include('inc.service_length')</h5>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary btn-lg btn-block">BOOK</button>
                    </div>
                    {{-- <button type="button" class="btn btn-primary btn-lg btn-block">BOOK</button> --}}
                    <button type="button" class="btn btn-success btn-md btn-block disabled">BOOK & PAY</button>
                    <hr>

                </div>
            </div>
        </div>

        </br>
        {{-- </div> --}}
        <hr class="featurette-divider"><br>
        <!-- Reviews -->
        <h1>Reviews</h1>
        <p class="font-italic">We take user reviews very seriously. Registered users can only provide a review if they
            have
            visited the store and used one or more of the services.</p>
        </br>
        
        @foreach ($reviews as $review)
        <div class="card">
            <h5 class="card-header">
                <img src="https://scontent-lht6-1.cdninstagram.com/v/t51.2885-19/s150x150/64760134_318524955748028_8686566807789633536_n.jpg?_nc_ht=scontent-lht6-1.cdninstagram.com&_nc_ohc=PxxtO5Fz5MoAX9taPZs&oh=64e71e7002ae6f646a43948aaf30e5ac&oe=5E84F6E6"
                    class="rounded-circle float-left" style="max-width: 60px; height: auto;"></img>
                {{$review->firstname}} {{str_limit($review->surname, 1, '...')}}<br>
                <small>{{$review->rating}} <i class="fas fa-star"></i> - {{$review->created_at->todatestring()}}</small>
                <a class="btn btn-secondary btn-sm float-right text-white" href="#/{{$review->review_id}}"
                    role="button"><i class="fas fa-flag"></i> Report</a>
            </h5>
            <div class="card-body">
                <p class="card-text">{{$review->description}}</p>
            </div>
        </div>
        @endforeach

        {{$reviews->links()}}

        <hr class="featurette-divider">
        @include('reviews.create') <!-- Inserts "Post a Review" field -->

    </div> <!-- don't delete -->
    {{-- @endforeach --}}
    {{-- </div> <!-- end of col-sm-8 --> --}}
    <div class="col-sm-4">

        <div class="googlemaps-widget">
            <h3 class="text-center font-weight-bold">Find Us</h3>
            {{-- TODO: From: https://www.embedgooglemap.net/ --}}
            {{-- <div class="mapouter"> --}}
            <div class="gmap_canvas"><iframe width="100%" frameborder="0" height="250px" style="border-radius: 20px;"
                    src="https://maps.google.com/maps?q=city%20barbers&t=&z=15&ie=UTF8&iwloc=&output=embed"
                    frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
            @foreach ($stores as $store)
            <p class="text-center">{{$store->house_no}} {{$store->address}}, </br>{{$store->city}}, {{$store->county}},</br> {{$store->postcode}}</p>
            @endforeach
            </div>

            {{-- </div> --}}

            {{-- </br> --}}

            <hr class="featurette-divider">
            <div class="rating-widget">
            <h1 class="text-center font-weight-bold">Rating {{ number_format($avgrating,1) /* formats output to 1 decimal */ }}/5</h1>

                {{-- TODO: Replace this in the near future --}}
                <h4 class="float-left">5 </h4>
                <progress max="{{$ratingcount}}" value="{{$rating5}}" style="float-right;"></progress></br></br>
                <h4 class="float-left">4 </h4>
                <progress max="{{$ratingcount}}" value="{{$rating4}}" style="float-right;"></progress></br></br>
                <h4 class="float-left">3 </h4>
                <progress max="{{$ratingcount}}" value="{{$rating3}}" style="float-right;"></progress></br></br>
                <h4 class="float-left">2 </h4>
                <progress max="{{$ratingcount}}" value="{{$rating2}}" style="float-right;"></progress></br></br>
                <h4 class="float-left">1 </h4>
                <progress max="{{$ratingcount}}" value="{{$rating1}}" style="float-right;"></progress></br></br>

                {{-- <h3 class="text-white">1</h3> --}}
                {{-- <h4 class="float-left">5 </h4>
                <progress max="100" value="80"></progress>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: {{$rating5 + 85}}%"
                aria-valuenow="{{$rating5}}" aria-valuemin="0"
                aria-valuemax="{{$ratingcount}}">
            </div>
        </div></br>
        <h4 class="float-left">4 </h4>
        <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: {{$rating4 * 10}}%" aria-valuenow="{{$rating4}}"
                aria-valuemin="0" aria-valuemax="{{$ratingcount}}"></div>
        </div></br>
        <h4 class="float-left">3 </h4>
        <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: {{$rating3 * 15}}%" aria-valuenow="{{$rating3}}"
                aria-valuemin="0" aria-valuemax="{{$ratingcount}}"></div>
        </div></br>
        <h4 class="float-left">2 </h4>
        <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: {{$rating2 + 10}}%" aria-valuenow="{{$rating2}}"
                aria-valuemin="0" aria-valuemax="{{$ratingcount}}"></div>
        </div></br>
        <h4 class="float-left">1 </h4>
        <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: {{$rating1 + 5}}%" aria-valuenow="{{$rating1}}"
                aria-valuemin="0" aria-valuemax="{{$ratingcount}}"></div>
        </div> --}}
        <div class="text-center font-italic">
            <p>Ratings based on {{$reviewcount}} user reviews</p>
        </div>
    </div> <!-- rating widget end -->

    {{-- </br> --}}
    <hr class="featurette-divider">
    <div class="opentimes-widget text-center">
        <h3 class="text-center font-weight-bold">Opening times</h3>
        <table class="table borderless">
            <tbody>
                @foreach ($opentimes as $opentime)
                <tr>
                <th scope="row">{{$opentime->days}}</th>
                    @if($opentime->open_time == 'Closed' || $opentime->close_time == 'Closed')
                    <td>Closed</td>
                    @else
                    <td>{{$opentime->open_time}} - {{$opentime->close_time}}</td>
                    @endif
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="text-center font-italic">
            <p>Bank holiday opening hours may vary.</p>
        </div>
    </div> <!-- opentimes widget end -->

    {{-- </br> --}}
    <hr class="featurette-divider">
    <div class="telno-widget text-center">
        <h3 class="text-center font-weight-bold">Get in touch</h3>
        @foreach ($stores as $store)
        <a href="tel:{{$store->phone_no}}"><button type="button" class="btn btn-lg btn-primary callbtn"
                style="margin-right:10px; margin-bottom:10px;">
                <h4 class="text-white">
                    
                    <i class="fas fa-phone-alt text-white"></i> {{$store->phone_no}}</h4>
        @endforeach
            </button></a>
    </div> <!-- telno widget end -->

    {{-- </br> --}}
    <hr class="featurette-divider">
    <div class="social-widget text-center">
        <h3 class="text-center font-weight-bold">Socials</h3>
        <a href="{{'https://www.facebook.com/techusiast'}}"><button type="button" class="btn btn-lg social-btn"
                style="margin-right:10px; margin-bottom:10px;">
                <h4 class="text-white"><i class="fab fa-facebook-square text-white"></i></h4>
            </button></a>
        <a href="{{'https://www.twitter.com/techusiast'}}"><button type="button" class="btn btn-lg social-btn"
                style="margin-right:10px; margin-bottom:10px;">
                <h4 class="text-white"><i class="fab fa-twitter text-white"></i></h4>
            </button></a>
        <a href="{{'https://www.instagram.com/techusiastonline'}}"><button type="button" class="btn btn-lg social-btn"
                style="margin-right:10px; margin-bottom:10px;">
                <h4 class="text-white"><i class="fab fa-instagram text-white"></i></h4>
            </button></a>
    </div> <!-- social widget end -->

</div> <!-- end of col-sm-4 -->
</div>
</div>

@endsection