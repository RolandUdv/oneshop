@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{$title}}</h1>
</div>
    {{-- @for ($i = 0; $i<100; $i++) --}}
    <div class="container">
        <div id="accordion">
            @foreach($services as $service)
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapse{{$service->service_id}}" aria-expanded="true" aria-controls="collapse{{$service->service_id}}">
                                {{$service->service_name}}
                                {{-- <h3><span class="badge badge-secondary float-right">New</span></h3> --}}
                            {{-- <a class="btn btn-primary float-right" data-toggle="modal" data-target="#ModalView1" href="#hello">BOOK</a> --}}
                        <a href="services/{{$service->service_id}}/create">
                                {{-- <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#ModalView1">
                                    BOOK
                                </button> --}}
                                <button type="button" class="btn btn-primary float-right">
                                    BOOK
                                </button>
                            </a>
                            <button class="btn btn-link float-right">£ {{$service->service_price}}</button>
                            <button class="btn btn-link float-right"><small>@include('inc.service_length')</small></button>
                            {{-- <div class="float-right">{{$booking->service_price}}</div> --}}
                        </button>
                    </h5>
                    
                </div>
                <div id="collapse{{$service->service_id}}" class="collapse" aria-labelledby="headingOne"
                    data-parent="#accordion">
                    <div class="card-body">
                        {{$service->service_description}}example text of stuff.
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        {{-- Pop up information --}}
        {{-- @if() --}}
        {{-- @foreach($bookings as $booking) --}}
        <div class="modal fade" id="ModalView1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                        <h4 class="float-right"> £ {{$service->service_price}}</h4></br><hr>
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
              </div>
              {{-- @endforeach --}}


              




@endsection