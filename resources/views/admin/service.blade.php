@extends('layouts.admin')
@section('content')
<h3>{{$title}}</h3>

    
        
        <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-table"></i> {{$title}} Table 
                <a class="btn btn-primary float-right" href="{{ url('service/create')}}" role="button">Add New</a>
                </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Service Name</th>
                                <th>Description</th>
                                <th>Price</th>
                                <th>Length</th>
                                <th>Edit</th>
                                <th>Delete</th>                               
                            </tr>
                        </thead>
                        <tbody>
                                @if(count($services) > 0)
                                @foreach($services as $service)
                                <tr>
                                    <td>{{$service->service_id}}</td>
                                    <td>{{$service->service_name}}</td>
                                    <td>{{ str_limit($service->service_description, 100, '...')}}</td>
                                    <td>£ {{$service->service_price}}</td>
                                    @if($service->service_length == 0)
                                        <td>15m</td>
                                    @elseif($service->service_length == 1)
                                        <td>30m</td>
                                    @elseif($service->service_length == 2)
                                        <td>45m</td>
                                    @elseif($service->service_length == 3)
                                        <td>1hr</td>
                                    @elseif($service->service_length == 4)
                                        <td>1hr 15m</td>
                                    @elseif($service->service_length == 5)
                                        <td>1hr 30m</td>
                                    @elseif($service->service_length == 6)
                                        <td>1hr 45m</td>
                                    @elseif($service->service_length == 7)
                                        <td>2hrs</td>
                                    @endif
                                    <td>
                                        <a href="service/{{$service->service_id}}/edit">
                                            <i class="fas fa-edit"></i>Edit</a>
                                    </td>
                                    <td>
                                        {{-- <i class="fas fa-trash"></i> --}}
                                        {!!Form::open(['action' => ['ServiceController@destroy', $service->service_id], 'method' => 'POST', 'class' => 'class-right']) !!}
                                            {{Form::hidden('_method', 'DELETE')}}
                                            @include('inc.modal_delete')
                                    </td>
                                </tr>
                                @endforeach
                                
                                @else
                                <p>There are 0 Services</p>
                                @endif

                        </tbody>
                    </table>
                </div>
                <div class="float-right">{{$services->links()}}</div>
                @if($servicescount == 0)
                <p>There are 0 services in the system</p>
                @else
                <p>Found {{$servicescount}} services in the system.</p>
                @endif
            </div>
            <div class="card-footer small text-muted">Last Updated at: @include('inc.todaydate')</div>
        </div>
        </div>
        @endsection