{{-- TODO: Limit this to one user/post only. Do not allow users to make more than 1 review --}}

@if (!Auth::guest() ) 
<!-- || (\Auth::user()->isStaff == '1') -->
<div class="card bg-light font-weight-bold"> <!-- border-dark -->
    <h3 class="card-header text-white">Post a review</h3>
    <div class="card-body">
        <div class="card-text">
            {!! Form::open(['action' => 'PagesController@storereview', 'method' => 'POST']) !!}
            <div class="form-group">
                <p class="text-white">Fields marked with a * are mandatory</p>
                {{Form::label('rating', 'Rate the service * ')}}
                {{Form::select('rating', array('5' => '5 ⭐️⭐️⭐️⭐️⭐️', '4' => '4 ⭐️⭐️⭐️⭐️', '3' => '3 ⭐️⭐️⭐️', '2' => '2 ⭐️⭐️', '1' => '1 ⭐️'))}}
            </div>
            <div class="form-group">
                {{Form::label('description', 'Explain why * ')}}
                {!! Form::textarea('description', null, ['class'=>'form-control', 'placeholder' => 'Say a few things about your experience']) !!}
            </div>
            {{-- <div class="form-group"> --}}
                {{Form::submit('Post Review', ['class' => 'btn btn-dark float-right text-white', 'style' => 'margin-top:10px;'])}}
            {!! Form::close() !!}
            {{-- </div> --}}
        </div>
    </div>
</div>
@else
<div>
    <p class="text-center font-italic">You must be signed in to post a review</p>
</div>
@endif