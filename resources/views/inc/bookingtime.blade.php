{{-- Selecting timeslots for bookings --}}
@if ($time_length == 0){
    {{-- 15m --}}
}@elseif ($time_length == 1){
    {{-- 30m --}}
}@elseif ($time_length == 2){
    {{-- 45m --}}
}@elseif ($time_length == 3){
    {{-- 60m --}}
}@elseif ($time_length == 4){
    {{-- 1hr 15m --}}
}@elseif ($time_length == 5){
    {{-- 1hr 30m --}}
}@elseif ($time_length == 6){
    {{-- 1hr 45m --}}
}@elseif ($time_length == 7){
    {{-- 2hrs --}}
}
@endif



{{-- {{Form::select('service_length', array('0' => '15m', '1' => '30m', '2' => '45m', '3' => '60m', '4' => '1hr 15m', '5' => '1hr 30m', '6' => '1hr 45m', '7' => '2hrs'))}} --}}