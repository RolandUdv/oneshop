@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>{{$title}}</h1><br>

<script src="../resources/js/generateqr.js"></script>

{{-- https://codepen.io/MathewSachin/pen/LxPzob --}}

        <div class="text-center">
          <img src="https://chart.googleapis.com/chart?cht=qr&chl=Hello+World&chs=160x160&chld=L|0"
               class="qr-code img-thumbnail img-fluid" style="min-width: 300px!important;">
        </div>
    </br>
        {{-- <div class="form-horizontal"> --}}
            <div class="form-group text-center">
                    <h4>Enter your website's address:</h4>
            {{-- <label class="control-label col-sm-2" for="content">Content:</label> --}}
                {{-- <div class="col-sm-10">

                    <div class="input-group mb-2">
                            <div class="input-group-prepend"> --}}
                              {{-- <div class="input-group-text">https://www.</div> --}}
                            </div>
                                <input type="text" value="https://www.{{ config('app.name')}}.com" class="form-control text-center" id="content" placeholder="www.website-address.com">
                          </div>
                    {{-- </div> --}}
              {{-- <input type="text" class="form-control" id="content" placeholder="Enter content"> --}}
                {{-- </div> --}}
            </div>
        </br>
        <div class="form-group text-center"> 
            {{-- <div class="col-sm-offset-2 col-sm-10 text-center"> --}}
              <button type="submit" class="btn btn-primary" id="generate">Generate</button>
            </div>
          {{-- </div> --}}
        {{-- </div> --}}
      </div>
    </div>
</div>

@endsection