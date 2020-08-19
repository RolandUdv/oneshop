@extends('layouts.admin')
@section('content')
<h3>{{$title}}</h3>

<div class="card mb-3">
    {{-- <div class="card-header">
        <i class="fa fa-table"></i> {{$title}}
    </div> --}}
<div style="padding: 0 5em 0 5em;">
    @foreach($stores as $store)
    <h4>Store Name</h4>
    <td>{{$store->store_name}}</td>

    <h4>Store Information</h4>
    <td>{{$store->store_information}}</td>
                        
    <h4>Owner Name</h4>
    <p>{{$store->owner_name}}</p>
                        
    <h4>Phone No.</h4>
    <p>{{$store->phone_no}}</p>
                       
    <h4>House No.</h4>
    <p>{{$store->house_no}}</p>
                       
    <h4>Address</h4>
    <p>{{$store->address}}</p>
                        
    <h4>City</h4>
    <p>{{$store->city}}</p>
                       
    <h4>County</h4>
    <p>{{$store->county}}</p>            

    <h4>Country</h4>
    <p>{{$store->country}}</p> 

    <h4>Postcode</h4>
    <p>{{$store->postcode}}</p>
                       
    <h4>Last Updated</h4>
    <p>{{$store->updated_at}}</p>
    @endforeach

    <br>

@if  (\Auth::user()->isAdmin == '1') 
<a href="store_information/{{$store->store_id}}/edit" style="width: 170px; padding: 7px" class="btn btn-primary text-white float-right"><i class="fas fa-edit"></i>Edit</a>
<br>
<br>
<br>
    {{-- <a href="store_information/{{$store->store_id}}/edit"><i class="fas fa-edit"></i>Edit</a> --}}
@elseif (\Auth::user()->isStaff == '1') 
@endif
</div>
    <div class="card-footer small text-muted">Last Updated at: @include('inc.todaydate')</div>
</div>

{{-- <div class="card mb-3">
    <div class="card-header">
        <i class="fa fa-table"></i> {{$title}} Table
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                <thead class="thead-light">
                    <tr>
                        <th>Store Name</th>
                        <th>Store Information</th>
                        <th>Owner Name</th>
                        <th>Phone No.</th>
                        <th>House No.</th>
                        <th>Address</th>
                        <th>City</th>
                        <th>County</th>
                        <th>Country</th>
                        <th>Postcode</th>
                        <th>Last Updated</th>
                        @if  (\Auth::user()->isAdmin == '1') 
                        <th>Edit</th>
                        @elseif (\Auth::user()->isStaff == '1') 
                        @endif
                    </tr>
                </thead>
                <tbody>
                    @if(count($stores) > 0)
                    @foreach($stores as $store)
                    <tr>
                        <td>{{$store->store_name}}</td>
                        <td>{{$store->store_information}}</td>
                        <td>{{$store->owner_name}}</td>
                        <td>{{$store->phone_no}}</td>
                        <td>{{$store->house_no}}</td>
                        <td>{{$store->address}}</td>
                        <td>{{$store->city}}</td>
                        <td>{{$store->county}}</td>
                        <td>{{$store->country}}</td>
                        <td>{{$store->postcode}}</td>
                        <td>{{$store->updated_at}}</td>
                        @if  (\Auth::user()->isAdmin == '1') 
                        <td>
                            <a href="store_information/{{$store->store_id}}/edit">
                                <i class="fas fa-edit"></i>Edit</a>
                        </td>
                        @elseif (\Auth::user()->isStaff == '1') 
                        @endif
                    </tr>
                    @endforeach

                    @else
                    <p>Error - No Store information found</p>
                    @endif

                </tbody>
            </table>
        </div>
    </div>
    <div class="card-footer small text-muted">Last Updated at: @include('inc.todaydate')</div>
</div>
</div> --}}

@endsection