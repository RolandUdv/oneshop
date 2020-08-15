@extends('layouts.admin')

@section('content')
<a class="btn btn-primary" href="{{ url('categories')}}">
    <i class="fas fa-angle-double-left"></i> Back to Categories
</a>
<div style="padding: 0 5em 0 5em;">
<h3>{{$title}}</h3>

    {!! Form::open(['action' => ['CategoryController@update', $categories->category_id], 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('category_name', 'Category Name')}}
            {{Form::text('category_name', $categories->category_name, ['class' => 'form-control', 'placeholder' => 'Category Name'])}}
        </div>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
</div>
@endsection