@extends('layouts.admin')
@section('content')
<h3>{{$title}}</h3>

<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css' />

<h2>Calendar View</h2>

  <button type="button" style="margin-left: 20px" class="btn btn-secondary float-right" data-toggle="modal" data-target="#exampleModalCenter">
  Table View
  </button>

    @if (\Auth::user()->isAdmin == '1')
        <a class="btn btn-primary float-right" href="{{ url('bookings/create')}}" role="button">Add New</a>
    @elseif (\Auth::user()->isStaff == '1')
        <a class="btn btn-primary float-right disabled" href="{{ url('bookings/create')}}" role="button">Add New</a>
        {{-- disabled --}}
    @endif
  
  <br>
  <br>
  <br>

<div class="card mb-3">
    <div class="card-header">
        <div id='calendar'></div>
    </div>
    <div class="card-footer">Found {{$bookingscount}} bookings in the system.</div>
    <div class="card-footer small text-muted">Last Updated at: @include('inc.todaydate')</div>
</div>


<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.js'></script>

<script>
    $(document).ready(function() {
        
        $('#calendar').fullCalendar({
        header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,agendaWeek,agendaDay'
        },
            timezone: 'UTC',
            
            events : [
                @foreach($bookings as $booking)
                {
                    // id: 'd',
                    // title : '{{ $booking->timeslot }} - {{ $booking->firstname }} {{ $booking->surname }} - {{ $booking->service_name }}',
                    title : '{{ $booking->timeslot }} - {{ $booking->service_name }}',
                    backgroundColor: 'green',
                    borderColor: 'green',
                    textColor: 'white',
                    display: 'list-item',
                    start : '{{ $booking->dateofbooking }}',
                    end: '{{ $booking->dateofbooking }}',
                    url : '{{ route('bookings.edit', $booking->booking_id) }}'
                },
                @endforeach
            ]
        })
    });
</script>


<br>
<br>

  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
      aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">Table View</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">

                  <div class="card mb-3">
                      <div class="card-header">
                          <i class="fa fa-table"></i> {{$title}} Table
                          @if (\Auth::user()->isAdmin == '1')
                          <a class="btn btn-primary float-right" href="{{ url('bookings/create')}}" role="button">Add
                              New</a>
                          {{-- disabled --}}
                          @elseif (\Auth::user()->isStaff == '1')
                          <a class="btn btn-primary float-right disabled" href="{{ url('bookings/create')}}"
                              role="button">Add New</a>
                          {{-- disabled --}}
                          @endif
                          </br>
                          <h5 class="float-left px-1"><span class="badge badge-pill badge-info text-white">B ID =
                                  Booking ID</span></h5>
                          <h5 class="float-left px-1"><span class="badge badge-pill badge-info text-white text-left">U
                                  ID = User ID</span>
                          </h5>
                          <h5 class="float-left px-1"><span class="badge badge-pill badge-success">Less than 7 days
                                  old</span></h5>
                          <h5 class="float-left px-1"><span class="badge badge-pill badge-warning text-black">More than
                                  7 days old</span>
                          </h5>
                      </div>

                      <div class="card-body">
                          <div class="table-responsive">

                              <table class="table table-bordered table-hover" id="dataTable" width="100%"
                                  cellspacing="0">
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
                                          <th>Timeslot</th>
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
                                          <td class="bg-success">{{$booking->timeslot}}</td>
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
                                          @if (\Auth::user()->isAdmin == '1')
                                          <td>
                                              {!!Form::open(['action' => ['BookingController@destroy',
                                              $booking->booking_id], 'method' =>
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
                                          <td class="bg-warning">{{$booking->timeslot}}</td>
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
                                              <a {{--class="btn disabled"--}}
                                                  href="bookings/{{$booking->booking_id}}/edit">
                                                  <i class="fas fa-edit"></i>Edit</a>
                                          </td>

                                          {{-- <i class="fas fa-trash"></i> --}}
                                          @if (\Auth::user()->isAdmin == '1')
                                          <td>
                                              {!!Form::open(['action' => ['BookingController@destroy',
                                              $booking->booking_id], 'method' =>
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

          </div>
      </div>
  </div>
  </div>
  </div>



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


@endsection