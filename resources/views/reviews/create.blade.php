{{-- TODO: Limit this to one user/post only. Do not allow users to make more than 1 review --}}
{{-- <p>{{$reviewuser}}</p> --}}
@if (!Auth::guest())  <!-- ($reviewuser <=1) -->
<!-- || (\Auth::user()->isStaff == '1') -->
<div class="card bg-light font-weight-bold"> <!-- border-dark -->
    <h3 class="card-header text-white">Post a review</h3>
    <div class="card-body">
        <div class="card-text">
            {!! Form::open(['action' => 'PagesController@storereview', 'method' => 'POST']) !!}
            <div class="form-group">
                <p class="text-white">Fields marked with a * are mandatory</p>
                {{Form::label('rating', '* Rate the service ')}}
                {{Form::select('rating', array('5' => '5 ⭐️⭐️⭐️⭐️⭐️', '4' => '4 ⭐️⭐️⭐️⭐️', '3' => '3 ⭐️⭐️⭐️', '2' => '2 ⭐️⭐️', '1' => '1 ⭐️'))}}
            </div>
            <div class="form-group">
                {{Form::label('description', '* Explain why ')}}
                {!! Form::textarea('description', null, ['class'=>'form-control', 'placeholder' => 'Say a few things about your experience']) !!}
            </div>
            {{-- <div class="form-group"> --}}
                {{Form::submit('Post Review', ['class' => 'btn btn-dark float-right text-white', 'style' => 'margin-top:10px;'])}}
            {!! Form::close() !!}
            {{-- </div> --}}
        </div>
    </div>
</div>
{{-- @elseif ($reviewuser > 1)
    <p>You've already commented</p> --}}
@else
<div class="text-center">
    <p>You must be logged in in to post a review <a class="btn btn-primary text-white" href="{{'login'}}"
            role="button">Login</a>
    </p>
</div>
@endif