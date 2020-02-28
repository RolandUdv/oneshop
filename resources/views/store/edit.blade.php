@extends('layouts.admin')

@section('content')
<a class="btn btn-primary" href="{{ url('store_information')}}">
    <i class="fas fa-angle-double-left"></i> Back to Store information
</a>

<h3>{{$title}}</h3>

    {!! Form::open(['action' => ['StoresController@update', $stores->store_id], 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('store_name', 'Store Name')}}
            {{Form::text('store_name', $stores->store_name, ['class' => 'form-control', 'placeholder' => 'Store Name'])}}
        </div>
        <div class="form-group">
            {{Form::label('store_information', 'Store Information')}}
            {{Form::textarea('store_information', $stores->store_information, ['class' => 'form-control', 'placeholder' => 'Store Information'])}}
        </div>
        <div class="form-group">
            {{Form::label('owner_name', 'Owner Name')}}
            {{Form::text('owner_name', $stores->owner_name, ['class' => 'form-control', 'placeholder' => 'Owner Name'])}}
        </div>
        <div class="form-group">
            {{Form::label('phone_no', 'Phone Number')}}
            {{Form::text('phone_no', $stores->phone_no, ['class' => 'form-control', 'placeholder' => 'Phone Number'])}}
        </div>
        <div class="form-group">
            {{Form::label('house_no', 'House Number')}}
            {{Form::number('house_no', $stores->house_no, ['class' => 'form-control', 'placeholder' => 'House Number'])}}
        </div>
        <div class="form-group">
            {{Form::label('address', 'Address')}}
            {{Form::text('address', $stores->address, ['class' => 'form-control', 'placeholder' => 'Address'])}}
        </div>
        <div class="form-group">
            {{Form::label('city', 'City/Town')}}
            {{Form::text('city', $stores->city, ['class' => 'form-control', 'placeholder' => 'City/Town'])}}
        </div>
        <div class="form-group">
            {{Form::label('county', 'County')}}
            {{Form::text('county', $stores->county, ['class' => 'form-control', 'placeholder' => 'County'])}}
        </div>
        <div class="form-group">
            {{Form::label('country', 'Country')}}
            {{Form::text('country', $stores->country, ['class' => 'form-control', 'placeholder' => 'Country'])}}
        </div>
        <div class="form-group">
            {{Form::label('postcode', 'Postcode (Example: NN1 1AP)')}}
            {{Form::text('postcode', $stores->postcode, ['class' => 'form-control', 'placeholder' => 'Postcode'])}}
        </div>
        
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}


@endsection