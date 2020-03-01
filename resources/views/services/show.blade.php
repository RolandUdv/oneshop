@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{$title}}</h1>
    <br>

    {{-- Datepicker --}}
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    {{-- Timepicker --}}
    

    <script>
        $(function () {
            $("#datepicker").datepicker({
                // showOtherMonths: true,
                // selectOtherMonths: true,
                // numberOfMonths: 2,
                firstDay: 1,
                altField: "#alternate",
                altFormat: "yy-mm-dd",
                minDate: 0,
                maxDate: "+2W",
            });
        });

        
    </script>

    <style>
        .ui-state-highlight{
            border: 3px solid #d41a28!important;
            background: #ffffff!important;
            /* border-radius: 10px!important; */
        }

        .ui-datepicker-next,
        .ui-datepicker-prev {
            display: none;
        }

        .ui-datepicker th {
            font-size: 20px!important;
            
        }

        .ui-datepicker-month,
        .ui-datepicker-year {
            font-size: 20px!important;
        }

        .ui-state-default {
            font-size: 18px!important;
            margin-bottom: 10px!important;
            text-align: center!important;
            /* border-radius: 20px!important; */
        }

        .ui-state-active {
            border: 1px solid #d41a28!important;
            background: #d41a28!important;
            color: #ffffff!important;
            font-size: 20px!important;
            font-weight: 600!important;
        }

        /* .ui-datepicket-title {
            background-color: #d41a28!important;
            color: #ffffff;
        } */

        .ui-datepicker-inline,
        .ui-datepicker,
        .ui-widget,
        .ui-widget-content,
        .ui-helper-clearfix,
        .ui-corner-all,
        .ui-datepicker-multi-2,
        .ui-datepicker-multi {
            width: 100% !important;
        }

        .submitbtn {
            background-color: #FF5864 !important;
            border-color: #ff5764;
            font-size: 24px;
        }

        .submitbtn:hover {
            background-color: #d41a28 !important;
            border-color: #d41a28;
        }

        .col-sm-8 {
            margin-right: -5px;
        }

        .col-sm-7,
        .col-sm-4 {
            background-color: #eaeaea;
            padding: 20px;
            border-radius: 20px;
        }
    </style>

    <div class="row">
        <div class="col-sm-7 text-center">
            <br>
            {{-- <h4>@include('inc.todaydate')</h4> --}}
            <br>
            <div id="datepicker" class="text-center"></div>
            <br>
            



            
        </div> <!-- col-sm-8 end -->
        <div class="col-sm-1">
        </div>
        <div class="col-sm-4">
            {!! Form::open(['action' => ['PagesController@create', $service_id], 'method' => 'POST']) !!}

            <div class="form-group"></br>
                <h3>Service:</h3>
                <input class="form-control" type="text" placeholder="{{$service_name}}" readonly>
            </div>
            <div class="form-group"></br>
                <h3>Service Cost:</h3>
                <input class="form-control" type="text" placeholder="£ {{$service_price}}" readonly>
            </div>
            <div class="form-group"></br>
                <h3>Selected Date:</h3>
            <input id="alternate" type="text" class="form-control" readonly /> 
            <!-- d-none hides field on all screens -->
            <!-- d-block d-sm-none displays fields on small displays only -->
            </div>
            <div class="text-center">
                {{Form::hidden('_method','PUT')}}
                {{Form::submit('Book Appointment', ['class' => 'submitbtn btn btn-primary btn-lg btn-block', 'style' => 'border-radius: 20px;'])}}
                {{Form::submit('Pay In Advance', ['class' => 'btn btn-success btn-md btn-block disabled', 'style' => 'border-radius: 20px;'])}}
                {!! Form::close() !!}
            </div>
        </div> <!-- col-sm-4 end -->
    </div> <!-- div row end -->


</div> <!-- div container end -->




@include('inc.test')







@endsection