@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{$title}}</h1><br>
    <h3>Welcome back {{$id->firstname}}</h3>



            <div class="card mb-3">
                    <div class="card-body">
                      <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                          <thead>
                            <tr>
                              <th>Service</th>
                              <th>Timeslot</th>
                              <th>Price</th>
                              <th>Booked at</th>
                              <th>Cancel</th>
                            </tr>
                          </thead>
                          <tbody>
        
                            <tr>
                              <td>{{$id->username}}</td>
                              <td>System Architect</td>
                              <td>Edinburgh</td>
                              <td>61</td>
                              <td>2011/04/25</td>
                            </tr>                    
                 
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
        </div>
@endsection