@extends('layouts.admin')
@section('content')
<h3>{{$title}}</h3>
@include('layouts.admin_widgets')
{{-- <p>hi</p> --}}

<br>
<br>

<div style="padding: 0 5em 0 5em;">
<h3 class="text-center">Search</h3>
    <div class="form-group">
        {!! Form::open(['route' => 'search']) !!}
        {{ Form::text('query', '', ['class' => 'form-control', 'placeholder' => 'Search']) }}
        <br>
        {{Form::submit('Search', ['class' => 'btn btn-primary mx-auto d-block'])}}
        {!! Form::close() !!}
    </div>
</div>

<br>
<br>

{{-- <h3>Search results</h3> --}}

@if(isset($users))
@if(count($users))
<h3>Search results for Users</h3>

<div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
            <thead class="thead-light">
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Firstname</th>
                    <th>Surname</th>
                    <th>Email</th>
                    <th>Created</th>
                    {{-- <th>Show</th> --}}
                    @if (\Auth::user()->isAdmin == '1')
                    <th>Edit</th>
                    <th>Delete</th>
                    @endif
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->username}}</td>
                    <td>{{$user->firstname}}</td>
                    <td>{{$user->surname}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->created_at}}</td>
                    {{-- <td>
                        <a href="users/{{$user->id}}/show">
                            <i class="fas fa-info-circle"></i>Show</a>
                    </td> --}}
                    @if (\Auth::user()->isAdmin == '1')
                    <td>
                        <a href="users/{{$user->id}}/edit">
                            <i class="fas fa-edit"></i>Edit</a>
                    </td>
                    <td>
                        {!!Form::open(['action' => ['UserController@destroy', $user->id], 'method' => 'POST',
                        'class' => 'class-right']) !!}
                        @csrf
                        {{Form::hidden('_method', 'DELETE')}}

                        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                        {!!Form::close()!!}
                    </td>
                    @endif
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

    @endif
    @endif





    @if(isset($bookings))
    @if(count($bookings))
    <h3>Search results for Bookings</h3>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                <thead class="thead-light">
                    <tr>
                        <th>B ID</th>
                        <th>User ID</th>
                        <th>Username</th>
                        <th>Firstname</th>
                        <th>Surname</th>
                        <th>Email</th>
                        <th>Service</th>
                        <th>Service £</th>
                        <th>Booked for</th>
                        <th>Created</th>
                        <th>Updated</th>

                        @if (\Auth::user()->isAdmin == '1')
                        <th>Edit</th>
                        <th>Delete</th>
                        @endif
                    </tr>
                </thead>
                <tbody>
                    @foreach($bookings as $booking)
                    <tr>
                        <td>{{$booking->booking_id}}</td>
                        <td>{{$booking->user_id}}</td>
                        <td>{{$booking->username}}</td>
                        <td>{{$booking->firstname}}</td>
                        <td>{{$booking->surname}}</td>
                        <td>{{$booking->email}}</td>
                        {{-- <td>{{$booking->service_id}}</td> --}}
                        <td>{{$booking->service_name}}</td>
                        <td>£{{$booking->service_price}}</td>
                        <td>{{$booking->dateofbooking}} {{$booking->timeslot}}</td>
                        <td>{{$booking->created_at}}</td>
                        <td>{{$booking->updated_at}}</td>


                        @if (\Auth::user()->isAdmin == '1')
                        <td>
                            <a href="bookings/{{$booking->booking_id}}/edit">
                                <i class="fas fa-edit"></i>Edit</a>
                        </td>
                        <td>
                            {!!Form::open(['action' => ['BookingController@destroy', $booking->booking_id], 'method' => 'POST',
                            'class' => 'class-right']) !!}
                            @csrf
                            {{Form::hidden('_method', 'DELETE')}}

                            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                            {!!Form::close()!!}
                        </td>
                        @endif
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

        @endif
        @endif


@if(isset($reviews))
@if(count($reviews))
<h3>Search results for Reviews</h3>

<div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
            <thead class="thead-light">
                <tr>
                    <th>ID</th>
                    <th>User ID</th>
                    <th>Username</th>
                    <th>Firstname</th>
                    <th>Surname</th>
                    <th>Description</th>
                    <th>Rating</th>
                    <th>Created</th>
                    <th>Updated</th>
                    @if (\Auth::user()->isAdmin == '1')
                    <th>Edit</th>
                    <th>Delete</th>
                    @endif
                </tr>
            </thead>
            <tbody>
                @foreach($reviews as $review)
                <tr>
                    <td>{{$review->review_id}}</td>
                    <td>{{$review->user_id}}</td>
                    <td>{{$review->username}}</td>
                    <td>{{$review->firstname}}</td>
                    <td>{{$review->surname}}</td>
                    <td>{{$review->description}}</td>
                    <td>{{$review->rating}} ⭐</td>
                    <td>{{$review->created_at}}</td>
                    <td>{{$review->updated_at}}</td>

                    @if (\Auth::user()->isAdmin == '1')
                    <td>
                        <a href="reviews/{{$review->review_id}}/edit">
                            <i class="fas fa-edit"></i>Edit</a>
                    </td>
                    <td>
                        {!!Form::open(['action' => ['ReviewController@destroy', $review->id], 'method' => 'POST',
                        'class' => 'class-right']) !!}
                        @csrf
                        {{Form::hidden('_method', 'DELETE')}}

                        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                        {!!Form::close()!!}
                    </td>
                    @endif
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

    @endif
    @endif







@endsection