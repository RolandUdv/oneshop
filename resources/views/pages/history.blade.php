@extends('layouts.app')

@section('content')
<div class="container">
  {{-- <h1>{{$favtitle}}</h1><br> --}}
  {{-- <h3>Welcome back {{$id->firstname}}</h3> --}}
  {{-- <p>Show Favorite services here, 2-3 max</p> --}}

{{-- <hr class="featurette-divider"><br> --}}
  <h1>
    {{-- <i class="fas fa-history"></i>  --}}
    {{-- <i class="material-icons">history</i>  --}}
    {{$title}}</h1><br>

    {{-- <p>{{$user_id}}</p> --}}

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
                            <th></th>
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
                            <td>{{$booking->dateofbooking}}</td>
                            <td>{{$booking->created_at}}</td>
                            <td>£ {{$booking->service_price}}</td>
                            <td>empty</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
@endsection