@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{$title}}</h1></br>
</div>
{{-- @for ($i = 0; $i<100; $i++) --}}
<style>
    .social-btn {
        color: #ffffff!important;
        /* background-color: #5c5c5c; */
        background-color: #FF5864;
        border-radius: 20px;
    }

    .fa-facebook-square, .fa-instagram, .fa-twitter {
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

    .progress {
        background-color: #525252;
        margin-bottom: -10px;
        height: 25px;
        border-radius: 20px;
        max-width: 100%;
    }

    .progress-bar {
        background: rgb(255, 95, 109);
        background: linear-gradient(75deg, rgb(255, 86, 100) 0%, rgb(255, 191, 101) 100%);
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
                            <a href="services/{{$service->service_id}}/create">
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
        <p class="font-italic">We take user reviews very seriously. Registered users can only provide a review if they have
            visited the store and used one or more of the services.</p>
        </br>
        <div class="card">
            <h5 class="card-header">
                <img src="https://scontent-lht6-1.cdninstagram.com/v/t51.2885-19/s150x150/64760134_318524955748028_8686566807789633536_n.jpg?_nc_ht=scontent-lht6-1.cdninstagram.com&_nc_ohc=PxxtO5Fz5MoAX9taPZs&oh=64e71e7002ae6f646a43948aaf30e5ac&oe=5E84F6E6"
                    class="rounded-circle float-left" style="max-width: 60px; height: auto;"></img>
                Username<br>
                Rating - <small>Posted 5 March 2020</small>
            </h5>
            <div class="card-body">
                <p class="card-text">Review text written here.</p>
            </div>
        </div>

        <div class="card">
            <h5 class="card-header">
                <img src="https://scontent-lht6-1.cdninstagram.com/v/t51.2885-19/s150x150/64760134_318524955748028_8686566807789633536_n.jpg?_nc_ht=scontent-lht6-1.cdninstagram.com&_nc_ohc=PxxtO5Fz5MoAX9taPZs&oh=64e71e7002ae6f646a43948aaf30e5ac&oe=5E84F6E6"
                    class="rounded-circle float-left" style="max-width: 60px; height: auto;"></img>
                Username<br>
                Rating - <small>Posted 5 March 2020</small>
            </h5>
            <div class="card-body">
                <p class="card-text">Review text written here.</p>
            </div>
        </div>

    </div> <!-- don't delete -->
    {{-- @endforeach --}}
    {{-- </div> <!-- end of col-sm-8 --> --}}
    <div class="col-sm-4">
        <div class="googlemaps-widget">
            <h3 class="text-center font-weight-bold">Find Us</h3>
            {{-- From: https://www.embedgooglemap.net/ --}}
            {{-- <iframe width="100%" height="auto" frameborder="0" style="border:0"
src="https://www.google.com/maps/embed/v1/undefined?origin=...&q=...&destination=...&center=...&zoom=...&key=..." allowfullscreen></iframe>
        </div> --}}

            {{-- <div class="mapouter"> --}}
            <div class="gmap_canvas"><iframe width="100%" frameborder="0" height="250px" style="border-radius: 20px;"
                    src="https://maps.google.com/maps?q=city%20barbers&t=&z=15&ie=UTF8&iwloc=&output=embed"
                    frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
            </div>

            {{-- </div> --}}

            </br>

            <div class="rating-widget">
                <h1 class="text-center font-weight-bold">Rating 4.5/5</h1>
                {{-- <h3 class="text-white">1</h3> --}}
                <h4 class="float-left">5 </h4>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100"
                        aria-valuemin="0" aria-valuemax="100"></div>
                </div></br>
                <h4 class="float-left">4 </h4>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0"
                        aria-valuemax="100"></div>
                </div></br>
                <h4 class="float-left">3 </h4>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                        aria-valuemax="100"></div>
                </div></br>
                <h4 class="float-left">2 </h4>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0"
                        aria-valuemax="100"></div>
                </div></br>
                <h4 class="float-left">1 </h4>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0"
                        aria-valuemax="100"></div>
                </div>
                <div class="text-center font-italic">
                    <p>Rating based on 45 user reviews</p>
                </div>
            </div> <!-- rating widget end -->

            </br>

            <div class="opentimes-widget text-center">
                <h3 class="text-center font-weight-bold">Opening times</h3>
                <table class="table borderless">
                    <tbody>
                        <tr>
                            <th scope="row">Monday</th>
                            <td>10:00 - 18:00</td>
                        </tr>
                        <tr>
                            <th scope="row">Tuesday</th>
                            <td>10:00 - 18:00</td>
                        </tr>
                        <tr>
                            <th scope="row">Wednesday</th>
                            <td>Closed</td>
                        </tr>
                    </tbody>
                </table>
                <div class="text-center font-italic">
                    <p>Bank holiday opening hours may vary.</p>
                </div>
            </div> <!-- opentimes widget end -->

            </br>

            <div class="telno-widget text-center">
                <h3 class="text-center font-weight-bold">Get in touch</h3>
                <a href="{{'tel:01604123456'}}"><button type="button" class="btn btn-lg btn-primary callbtn"
                        style="margin-right:10px; margin-bottom:10px;">
                        <h4 class="text-white">
                            <i class="fas fa-phone-alt text-white"></i> 01604 123456</h4>
                    </button></a>
            </div> <!-- telno widget end -->

            </br>

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