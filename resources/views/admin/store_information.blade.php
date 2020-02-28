@extends('layouts.admin')
@section('content')
<h3>{{$title}}</h3>

<div class="card mb-3">
    <div class="card-header">
        <i class="fa fa-table"></i> {{$title}} Table
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                <thead class="thead-light">
                    <tr>
                        {{-- <th>ID</th> --}}
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
                        {{-- <td>{{$store->store_id}}</td> --}}
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
</div>

@endsection