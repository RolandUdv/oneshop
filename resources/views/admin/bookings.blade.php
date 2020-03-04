@extends('layouts.admin')
@section('content')
<h3>{{$title}}</h3>

{{-- <div class="container-fluid">
    <div class="row">
        <div class="col-xl-6 col-sm-6 mb-3">
            <div class="card text-white bg-success o-hidden h-100">
                <div class="card-body">
                    <div class="card-body-icon">
                        <i class="fas fa-calendar-check"></i>
                    </div>
                    <div class="mr-5">{{$bookingscount}} New Bookings!</div>
                </div>
                <a class="btn disabled card-footer text-white clearfix small z-1" href="{{ url('/bookings')}}">
                    <span class="float-left">View Bookings</span>
                    <span class="float-right">
                        <i class="fa fa-angle-right"></i>
                    </span>
                </a>
            </div>
        </div>
    </div>
</div> --}}

<div class="card mb-3">
    <div class="card-header">
        <i class="fa fa-table"></i> {{$title}} Table
        @if (\Auth::user()->isAdmin == '1') 
        <a class="btn btn-primary float-right" href="{{ url('bookings/create')}}" role="button">Add New</a> {{-- disabled --}}
        @elseif (\Auth::user()->isStaff == '1') 
        <a class="btn btn-primary float-right disabled" href="{{ url('bookings/create')}}" role="button">Add New</a> {{-- disabled --}}
        @endif
    </br>
        <h5 class="float-left px-1"><span class="badge badge-pill badge-info text-white">B ID = Booking ID</span></h5>
        <h5 class="float-left px-1"><span class="badge badge-pill badge-info text-white text-left">U ID = User ID</span></h5>
        <h5 class="float-left px-1"><span class="badge badge-pill badge-success">Less than 7 days old</span></h5>
        <h5 class="float-left px-1"><span class="badge badge-pill badge-warning text-black">More than 7 days old</span></h5>
    </div>

    <div class="card-body">
        <div class="table-responsive">
                
            <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                <thead class="thead-light">
                    <tr>
                        <th>B ID</th>
                        <th>U ID</th>
                        <th>Username</th>
                        <th>Firstname</th>
                        <th>Surname</th>
                        <th>Email</th>
                        <th>Service ID</th>
                        <th>Booked for</th>
                        <th>Service Name</th>
                        <th>Service Price</th>
                        <th>Service Length</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                        <th>Edit</th>
                        @if (\Auth::user()->isAdmin == '1') 
                        <th>Delete</th>
                        @elseif (\Auth::user()->isStaff == '1') 
                        @endif
                    </tr>
                </thead>
                <tbody>


                    @if(count($bookings) > 0)
                    @foreach($bookings as $booking)
                    <tr>
                        @if(7 - ((new \Carbon\Carbon($booking->created_at, 'UTC'))->diffInDays()) > 0)
                        {{-- If it's less than 7 days old, display it in green --}}
                        <td class="bg-success">{{$booking->booking_id}}</td>
                        <td class="bg-success">{{$booking->user_id}}</td>
                        <td class="bg-success">{{$booking->username}}</td>
                        <td class="bg-success">{{$booking->firstname}}</td>
                        <td class="bg-success">{{$booking->surname}}</td>
                        <td class="bg-success">{{$booking->email}}</td>
                        <td class="bg-success">{{$booking->service_id}}</td>
                        <td class="bg-success">{{$booking->dateofbooking}}</td>
                        <td class="bg-success">{{$booking->service_name}}</td>
                        <td class="bg-success">£ {{$booking->service_price}}</td>

                        @if($booking->service_length == 0)
                        <td class="bg-success">15m</td>
                        @elseif($booking->service_length == 1)
                        <td class="bg-success">30m</td>
                        @elseif($booking->service_length == 2)
                        <td class="bg-success">45m</td>
                        @elseif($booking->service_length == 3)
                        <td class="bg-success">1hr</td>
                        @elseif($booking->service_length == 4)
                        <td class="bg-success">1hr 15m</td>
                        @elseif($booking->service_length == 5)
                        <td class="bg-success">1hr 30m</td>
                        @elseif($booking->service_length == 6)
                        <td class="bg-success">1hr 45m</td>
                        @elseif($booking->service_length == 7)
                        <td class="bg-success">2hrs</td>
                        @endif
                        <td class="bg-success">{{$booking->created_at}}</td>
                        <td class="bg-success">{{$booking->updated_at}}</td>
                        <td>
                            <a href="bookings/{{$booking->booking_id}}/edit">
                                <i class="fas fa-edit"></i>Edit</a>
                        </td>
                        
                            {{-- <i class="fas fa-trash"></i> --}}
                        @if  (\Auth::user()->isAdmin == '1') 
                        <td>
                            {!!Form::open(['action' => ['BookingController@destroy', $booking->service_id], 'method' =>
                            'POST', 'class' => 'class-right']) !!}
                                {{Form::hidden('_method', 'DELETE')}}
                                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                            {!!Form::close()!!}
                            {{-- @include('inc.modal_cancel') --}}
                        </td>
                        @elseif (\Auth::user()->isStaff == '1') 
                        @endif

                        @else {{-- If it's more than 7 days old, display it in yellow --}}
                        <td class="bg-warning">{{$booking->booking_id}}</td>
                        <td class="bg-warning">{{$booking->user_id}}</td>
                        <td class="bg-warning">{{$booking->username}}</td>
                        <td class="bg-warning">{{$booking->firstname}}</td>
                        <td class="bg-warning">{{$booking->surname}}</td>
                        <td class="bg-warning">{{$booking->email}}</td>
                        <td class="bg-warning">{{$booking->service_id}}</td>
                        <td class="bg-warning">{{$booking->dateofbooking}}</td>
                        <td class="bg-warning">{{$booking->service_name}}</td>
                        <td class="bg-warning">£ {{$booking->service_price}}</td>

                        @if($booking->service_length == 0)
                        <td class="bg-warning">15m</td>
                        @elseif($booking->service_length == 1)
                        <td class="bg-warning">30m</td>
                        @elseif($booking->service_length == 2)
                        <td class="bg-warning">45m</td>
                        @elseif($booking->service_length == 3)
                        <td class="bg-warning">1hr</td>
                        @elseif($booking->service_length == 4)
                        <td class="bg-warning">1hr 15m</td>
                        @elseif($booking->service_length == 5)
                        <td class="bg-warning">1hr 30m</td>
                        @elseif($booking->service_length == 6)
                        <td class="bg-warning">1hr 45m</td>
                        @elseif($booking->service_length == 7)
                        <td class="bg-warning">2hrs</td>
                        @endif
                        <td class="bg-warning">{{$booking->created_at}}</td>
                        <td class="bg-warning">{{$booking->updated_at}}</td>
                        <td>
                            <a {{--class="btn disabled"--}} href="bookings/{{$booking->booking_id}}/edit">
                                <i class="fas fa-edit"></i>Edit</a>
                        </td>
                        
                            {{-- <i class="fas fa-trash"></i> --}}
                        @if  (\Auth::user()->isAdmin == '1') 
                        <td>
                            {!!Form::open(['action' => ['BookingController@destroy', $booking->service_id], 'method' =>
                            'POST', 'class' => 'class-right']) !!}
                                {{Form::hidden('_method', 'DELETE')}}
                                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                            {!!Form::close()!!}
                            {{-- @include('inc.modal_cancel') --}}
                        </td>
                        @elseif (\Auth::user()->isStaff == '1') 
                        @endif
                        @endif
                        

                        @endforeach

                        @else
                        <p>There are 0 Bookings</p>
                        @endif
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="float-right">{{$bookings->links()}}</div>
        @if($bookingscount == 0)
        <p>There are 0 bookings in the system</p>
        @else
        <p>Found {{$bookingscount}} bookings in the system.</p>
        @endif
    </div>
    <div class="card-footer small text-muted">Last Updated at: @include('inc.todaydate')</div>
</div>
</div>
@endsection