@extends('layouts.app')

@section('content')
<div class="container">

  <style>
    .btn-primary {
    background-color: #ff5764!important;
    font-size: 20px!important;
    border-color: #ff5764;
    /* box-shadow: 2px 2px 5px #000!important; */
  }

  .btn-primary:hover {
      background-color: #d41a28!important;
      border-color: #d41a28;
  }
  
  .card {
    box-shadow: 3px 5px 10px #b1b1b1!important;
  }
  </style>
  {{-- <h1>{{$favtitle}}</h1><br> --}}
  {{-- <h3>Welcome back {{$id->firstname}}</h3> --}}
  {{-- <p>Show Favorite services here, 2-3 max</p> --}}

{{-- <hr class="featurette-divider"><br> --}}
  <h1>{{$title}}</h1>
  <br>

  <button type="button" class="btn btn-secondary float-right" data-toggle="modal" data-target="#exampleModalCenter">
  History List View
  </button>

  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
      aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">History List View</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                  <div class="card mb-3">
                      <div class="card-body">
                          <div class="table-responsive">
                              <table class="table table-hover">
                                  {{-- <caption>
                    @if($historycount == 0)
                      <p>You haven't made a booking yet.</p>
                    @else
                      <p>You have made {{$historycount}} bookings in the past.</p>
                                  @endif
                                  </caption> --}}
                                  <thead class="text-uppercase thead-light">
                                      <tr>
                                          <th>Booking NO.</th>
                                          <th>Service</th>
                                          <th>Name</th>
                                          <th>Booked for</th>
                                          <th>Booked at</th>
                                          <th>Total</th>
                                          {{-- <th></th> --}}
                                          {{-- <th>Cancel</th> --}}
                                      </tr>
                                  </thead>
                                  <tbody>

                                      @foreach ($bookings as $booking)
                                      {{-- @foreach ($bookings as $booking) --}}
                                      <tr>
                                          <th scope="row">{{$booking->booking_id}}</th>
                                          <td>{{$booking->service_name}}</td>
                                          <td>{{$booking->firstname}} {{$booking->surname}}</td>
                                          <td>{{$booking->dateofbooking}} {{$booking->timeslot}}</td>
                                          <td>{{$booking->created_at}}</td>
                                          <td>£ {{$booking->service_price}}</td>
                                          {{-- <td>empty</td> --}}
                                      </tr>
                                      @endforeach
                                  </tbody>
                              </table>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  </div>
  </div>

{{-- <h4>Upcoming</h4>
<div class="row">
  <div class="container align-content-start flex-wrap">
    @foreach ($bookings as $booking)
    <div style="margin: 0 30px 0 30px" class="card">
      <div class="card-body ">
        <p style="color: #f19d00"><i class="fas fa-check-circle"></i> Upcoming #{{$booking->booking_id}}</p>
        <h4 class="card-title"> {{$booking->service_name}}</h4>
        <h5 class="float-right">{{ \Carbon\Carbon::parse($booking->dateofbooking)->format('D d M Y')}} {{$booking->timeslot}}</h5>
        <h5 class="card-text">£ {{$booking->service_price}}</h5>
        <a href="#" style="width: 170px; padding: 7px" class="btn btn-primary text-white text-uppercase">Book Again</a>
      </div>
    </div>
    <br>
    @endforeach
  </div>
</div>

<hr>
<br> --}}


<h4>Upcoming</h4>
@foreach ($bookings as $booking)

@if( $booking->dateofbooking > $currentTime)
<div class="row">
  <div class="container align-content-start flex-wrap">
    <div style="margin: 0 30px 0 30px" class="card">
      <div class="card-body ">
          <p style="color: #f19d00"><i style="font-size: 20px" class="fas fa-clock"></i> Upcoming #{{$booking->booking_id}}</p>
        <h4 class="card-title"> {{$booking->service_name}}</h4>
        <h5 class="float-right">{{ \Carbon\Carbon::parse($booking->dateofbooking)->format('D d M Y')}} {{$booking->timeslot}}</h5>
        <h5 class="card-text">£ {{$booking->service_price}}</h5>
        <a href="#" style="width: 170px; padding: 7px" class="btn btn-primary text-white text-uppercase">Book Again</a>
        <a href="#" style="width: 110px; padding: 7px" class="btn btn-dark float-right text-white text-uppercase">Cancel</a>
      </div>
    </div>
  </div>
</div>
@endif
@endforeach




<h4>Finished</h4>
@foreach ($bookings as $booking)
@if( $booking->dateofbooking < $currentTime)
<div class="row">
  <div class="container align-content-start flex-wrap">
    <div style="margin: 0 30px 0 30px" class="card">
      <div class="card-body ">
          <p style="color: #359c56"><i style="font-size: 20px" class="fas fa-check-circle"></i> Finished #{{$booking->booking_id}}</p>
        <h4 class="card-title"> {{$booking->service_name}}</h4>
        <h5 class="float-right">{{ \Carbon\Carbon::parse($booking->dateofbooking)->format('D d M Y')}} {{$booking->timeslot}}</h5>
        <h5 class="card-text">£ {{$booking->service_price}}</h5>
        <a href="#" style="width: 170px; padding: 7px" class="btn btn-primary text-white text-uppercase">Book Again</a>
      </div>
    </div>
  </div>
</div>
@endif
@endforeach

<br>
{{-- <br> --}}

{{-- <div class="row">
  <div class="container align-content-start flex-wrap">
    @foreach ($bookings as $booking)
    <div style="margin: 0 30px 0 30px" class="card">
      <div class="card-body ">
        @if( $booking->dateofbooking < $currentTime )
          <p style="color: #359c56"><i style="font-size: 20px" class="fas fa-check-circle"></i> Finished #{{$booking->booking_id}}</p>
        @elseif( $booking->dateofbooking > $currentTime )
          <p style="color: #f19d00"><i style="font-size: 20px" class="fas fa-clock"></i> Upcoming #{{$booking->booking_id}}</p>
        @endif
        <h4 class="card-title"> {{$booking->service_name}}</h4>
        <h5 class="float-right">{{ \Carbon\Carbon::parse($booking->dateofbooking)->format('D d M Y')}} {{$booking->timeslot}}</h5>
        <h5 class="card-text">£ {{$booking->service_price}}</h5>
        <a href="#" style="width: 170px; padding: 7px" class="btn btn-primary text-white text-uppercase">Book Again</a>
      </div>
    </div>
    <br>
    @endforeach
  </div>
</div> --}}
    
@endsection