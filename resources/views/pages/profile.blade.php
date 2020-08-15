@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{$title}}</h1>

    <br>

    <style>
        .fa-user-circle,
        .fa-bell,
        .fa-lock,
        .fa-shield-alt,
        .fa-calendar-alt,
        .fa-credit-card,
        .fa-flag,
        .fa-question-circle,
        .fa-info-circle,
        .fa-sign-out-alt,
        .fa-file,
        .fa-user-times {
            font-size: 22px;
            padding-right: 10px;
        }
    </style>

    @foreach ($users as $user)
    {{-- TODO: better optimise this for desktop users --}}
    {{-- <div class="row">
        <div class="col-sm-4"> --}}
            <div class="text-center" style="padding: 10px;">
                <img src="https://image.flaticon.com/icons/svg/189/189627.svg"
                    class="rounded-circle mx-auto d-block " style="max-width: 250px; height: auto;"></img><br>
                    <p>Change Profile Picture<p>
                <h5>Username: {{$user->username}}</h5>
                <p>{{$user->firstname}} {{$user->surname}}</p>
                <p>Member Since: {{$user->created_at->todatestring()}}</p>
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action">
                        <i class="fas fa-user-circle"></i> Account
                    </a>
                    <a href="#" class="list-group-item list-group-item-action "><i class="fas fa-bell"></i>
                        Notifications</a>
                    <a href="#" class="list-group-item list-group-item-action "><i class="fas fa-lock"></i> Privacy</a>
                    <a href="#" class="list-group-item list-group-item-action "><i class="fas fa-shield-alt"></i>
                        Security</a>
                    <a href="#" class="list-group-item list-group-item-action"><i class="fas fa-language"></i>
                        Language</a>
                    <a href="#" class="list-group-item list-group-item-action"><i class="fas fa-calendar-alt"></i>
                        Bookings</a>
                    {{-- <a href="#" class="list-group-item list-group-item-secondary" disabled><i class="fas fa-credit-card"></i> Payments<h4><span class="badge badge-secondary">Coming Soon</span></h4></a> --}}
                    <a href="#" class="list-group-item list-group-item-action "><i class="fas fa-flag"></i> Report a
                        Problem</a>
                    <a href="#" class="list-group-item list-group-item-action "><i class="fas fa-question-circle"></i>
                        Help</a>
                    <a href="#" class="list-group-item list-group-item-action "><i class="fas fa-info-circle"></i>
                        About</a>
                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"
                        class="list-group-item list-group-item-action "><i class="fas fa-sign-out-alt"></i> Log Out</a>
                </div>
                <br>
                <div class="list-group">
                    <h4>GDPR</h4>
                    <a href="#" class="list-group-item list-group-item-warning "><i class="far fa-file"></i> Reqest
                        Account Information</a>
                    <a href="#" class="list-group-item list-group-item-danger "><i class="fas fa-user-times"></i> Delete
                        My Account</a>
                </div>
            </div>
        </div> <!-- col-sm-4 end -->
        {{-- <div class="col-sm-8">


        </div><!-- col-sm-8 end -->
    </div> <!-- row end --> --}}




    @endforeach


    {{-- 
    <img src="https://scontent-lht6-1.cdninstagram.com/v/t51.2885-19/s150x150/64760134_318524955748028_8686566807789633536_n.jpg?_nc_ht=scontent-lht6-1.cdninstagram.com&_nc_ohc=PxxtO5Fz5MoAX9taPZs&oh=64e71e7002ae6f646a43948aaf30e5ac&oe=5E84F6E6"
                    class="rounded-circle float-left" style="max-width: 120px; height: auto;"></img>
    

    @foreach ($users as $user)
    <p>{{$user->username}}</p>
    <p>{{$user->firstname}}</p>
    <p>{{$user->surname}}</p>
    <p>{{$user->email}}</p>
    <p>{{$user->created_at->todatestring()}}</p>
    @endforeach --}}



</div>
@endsection