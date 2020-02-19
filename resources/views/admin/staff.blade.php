@extends('layouts.admin')
@section('content')
<h3>{{$title}}</h3>

    
        
        <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-table"></i> {{$title}} Table 
                <a class="btn btn-primary float-right" href="{{ url('staff/create')}}" role="button">Add New</a>
                </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Admin</th>
                                <th>Username</th>
                                <th>Firstname</th>
                                <th>Surname</th>
                                <th>DOB</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Registrated at</th>
                                <th>Last Updated</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                                @if(count($staff) > 0)
                                @foreach($staff as $staf)
                                <tr>
                                    <td>{{$staf->staff_id}}</td>

                                    @if($staf->admin_rights == 1)
                                        <td>Yes</td>
                                    @else
                                        <td>No</td>
                                    @endif
                                    <td>{{$staf->username}}</td>
                                    <td>{{$staf->firstname}}</td>
                                    <td>{{$staf->surname}}</td>
                                    <td>{{$staf->staff_dob}}</td>
                                    <td>{{$staf->email}}</td>
                                    <td>{{$staf->phone_no}}</td>
                                    <td>{{$staf->created_at}}</td>
                                    <td>{{$staf->updated_at}}</td>
                                    <td>
                                        <a href="staff/{{$staf->staff_id}}/edit">
                                            <i class="fas fa-edit"></i>Edit</a>
                                    </td>
                                    <td>
                                        {{-- <i class="fas fa-trash"></i> --}}
                                        {!!Form::open(['action' => ['StaffController@destroy', $staf->staff_id], 'method' => 'POST', 'class' => 'class-right']) !!}
                                            {{Form::hidden('_method', 'DELETE')}}
                                            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                        {!!Form::close()!!}
                                    </td>
                                </tr>
                                @endforeach
                                
                                @else
                                <p>No Staff members found</p>
                                @endif

                        </tbody>
                    </table>
                </div>
                <div class="float-right">{{$staff->links()}}</div>
                <p>Found {{$staffcount}} records in the system.</p>
            </div>
            {{-- <div class="card-footer small text-muted">Last Updated at: {{$staf->updated_at}}</div> --}}
        </div>
        </div>
        @endsection