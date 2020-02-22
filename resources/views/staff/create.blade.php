@extends('layouts.admin')

@section('content')
<a class="btn btn-primary" href="{{ url('staff')}}">
    <i class="fas fa-angle-double-left"></i> Back to Staff
</a>

<h3>{{$title}}</h3>

    {!! Form::open(['action' => 'StaffController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('admin_rights', 'Admin rights')}}
            {{Form::select('admin_rights', array('0' => 'No', '1' => 'Yes'))}}
        </div>
        <div class="form-group">
            {{Form::label('username', 'Username')}}
            {{Form::text('username', '', ['class' => 'form-control', 'placeholder' => 'Username'])}}
        </div>
        <div class="form-group">
            {{Form::label('firstname', 'Firstname')}}
            {{Form::text('firstname', '', ['class' => 'form-control', 'placeholder' => 'Firstname'])}}
        </div>
        <div class="form-group">
            {{Form::label('surname', 'Surname')}}
            {{Form::text('surname', '', ['class' => 'form-control', 'placeholder' => 'Surname'])}}
        </div>
        <div class="form-group">
            {{Form::label('staff_dob', 'Date of Birth')}}
            {{Form::date('staff_dob', '', ['class' => 'form-control', 'placeholder' => 'Date of Birth'])}}
        </div>
        <div class="form-group">
            {{Form::label('email', 'Email')}}
            {{Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'Email'])}}
        </div>
        <div class="form-group">
            {{Form::label('password', 'Password')}}
            {{-- {{Form::input('password', 'password', 'value')}} --}}
            {{Form::text('password', '', ['class' => 'form-control', 'placeholder' => 'Password'])}}
        </div>
        <div class="form-group">
            {{Form::label('phone_no', 'Phone Number')}}
            {{Form::number('phone_no', '', ['class' => 'form-control', 'placeholder' => 'Phone Number'])}}
        </div>
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection

@section('script')
<script>

</script>
@endsection