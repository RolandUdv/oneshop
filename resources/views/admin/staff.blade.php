@extends('layouts.admin')
@section('content')
<h3>{{$title}}</h3>



<div class="card mb-3">
    <div class="card-header">
        <i class="fa fa-table"></i> {{$title}} Table
        @if  (\Auth::user()->isAdmin == '1') 
        <a class="btn btn-primary float-right" href="{{ url('staff/create')}}" role="button">Add New</a>
        @elseif (\Auth::user()->isStaff == '1') 
        <a class="btn btn-primary float-right disabled" href="{{ url('staff/create')}}" role="button">Add New</a>
        @endif
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
                        @if  (\Auth::user()->isAdmin == '1') 
                        <th>Edit</th>
                        <th>Delete</th>
                        @elseif (\Auth::user()->isStaff == '1') 
                        @endif
                    </tr>
                </thead>
                <tbody>
                    @if(count($staff) > 0)
                    @foreach($staff as $staf)
                    <tr>
                        <td>{{$staf->staff_id}}</td>

                        @if($staf->admin_rights == 1)
                        <td class="bg-info text-white">YES</td>
                        @else
                        <td class="bg-light text-dark">NO</td>
                        @endif
                        <td>{{$staf->username}}</td>
                        <td>{{$staf->firstname}}</td>
                        <td>{{$staf->surname}}</td>
                        <td>{{$staf->staff_dob}}</td>
                        <td>{{$staf->email}}</td>
                        <td>{{$staf->phone_no}}</td>
                        <td>{{$staf->created_at}}</td>
                        <td>{{$staf->updated_at}}</td>

                        @if  (\Auth::user()->isAdmin == '1') 
                        <td>
                            <a href="staff/{{$staf->staff_id}}/edit">
                                <i class="fas fa-edit"></i>Edit</a>
                        </td>
                        <td>
                            {{-- <i class="fas fa-trash"></i> --}}
                            {!!Form::open(['action' => ['StaffController@destroy', $staf->staff_id], 'method' => 'POST',
                            'class' => 'class-right']) !!}
                            {{Form::hidden('_method', 'DELETE')}}
                            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                {!!Form::close()!!}
                            {{-- @include('inc.modal_delete') --}}
                        </td>
                        @elseif (\Auth::user()->isStaff == '1') 
                        @endif
                    </tr>
                    @endforeach

                    @else
                    <p>There are 0 Staff Members</p>
                    @endif

                </tbody>
            </table>
        </div>
        <div class="float-right">{{$staff->links()}}</div>
        @if($staffcount == 0)
        <p>There are 0 records in the system</p>
        @else
        <p>Found {{$staffcount}} records in the system.</p>
        @endif
    </div>
    <div class="card-footer small text-muted">Last Updated at: @include('inc.todaydate')</div>
</div>
</div>
@endsection