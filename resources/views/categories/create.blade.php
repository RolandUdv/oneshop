@extends('layouts.admin')

@section('content')
<a class="btn btn-primary" href="{{ url('categories')}}">
    <i class="fas fa-angle-double-left"></i> Back to Categories
</a>

<h3>{{$title}}</h3>

    {!! Form::open(['action' => 'CategoryController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('category_name', 'Category Name')}}
            {{Form::text('category_name', '', ['class' => 'form-control', 'placeholder' => 'Category Name'])}}
        </div>
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection