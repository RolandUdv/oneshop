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
                        <th>Day</th>
                        <th>Opening Time</th>
                        <th>Closing Time</th>
                        <th>Last Updated</th>
                        @if  (\Auth::user()->isAdmin == '1') 
                        <th>Edit</th>
                        @elseif (\Auth::user()->isStaff == '1') 
                        @endif
                    </tr>
                </thead>
                <tbody>
                    @if(count($opentimes) > 0)
                    @foreach($opentimes as $opentime)
                    <tr>
                        {{-- <td>{{$store->store_id}}</td> --}}
                        <td>{{$opentime->days}}</td>
                        <td>{{$opentime->open_time}}</td>
                        <td>{{$opentime->close_time}}</td>
                        <td>{{$opentime->updated_at}}</td>
                        @if  (\Auth::user()->isAdmin == '1') 
                        <td>
                            <a href="opentime/{{$opentime->opentimes_id}}/edit">
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