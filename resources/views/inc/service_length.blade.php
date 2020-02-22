{{-- @if($booking->service_length == 0)
<td>15m</td>
@elseif($booking->service_length == 1)
<td>30m</td>
@elseif($booking->service_length == 2)
<td>45m</td>
@elseif($booking->service_length == 3)
<td>1hr</td>
@elseif($booking->service_length == 4)
<td>1hr 15m</td>
@elseif($booking->service_length == 5)
<td>1hr 30m</td>
@elseif($booking->service_length == 6)
<td>1hr 45m</td>
@elseif($booking->service_length == 7)
<td>2hrs</td>
@endif --}}

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