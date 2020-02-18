@extends('layouts.admin')
@section('content')
<h3>{{$title}}</h3>

        <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-table"></i> {{$title}} Table 
                <a class="btn btn-primary float-right" href="{{ url('categories/create')}}" role="button">Add New</a>
                </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Category Name</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                                @if(count($categories) > 0)
                                @foreach($categories as $category)
                                <tr>
                                    <td>{{$category->category_id}}</td>
                                    <td>{{$category->category_name}}</td>
                                    <td>
                                        <i class="fas fa-edit"></i>
                                        <a href="categories/{{$category->category_id}}/edit">Edit</a>
                                    </td>
                                    <td>
                                        {{-- <i class="fas fa-trash"></i> --}}
                                        {!!Form::open(['action' => ['CategoryController@destroy', $category->category_id], 'method' => 'POST', 'class' => 'class-right']) !!}
                                            {{Form::hidden('_method', 'DELETE')}}
                                            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                        {!!Form::close()!!}
                                    </td>
                                </tr>
                                @endforeach
                                
                                @else
                                <p>No Services members found</p>
                                @endif

                        </tbody>
                    </table>
                </div>
                <div class="float-right">{{$categories->links()}}</div>
                @if($categoriescount == 0)
                <p>There are 0 services in the system</p>
                @else
                <p>Found {{$categoriescount}} services in the system.</p>
                @endif
            </div>
            {{-- <div class="card-footer small text-muted">Last Updated at: {{$services->updated_at}}</div> --}}
        </div>
        </div>
        @endsection