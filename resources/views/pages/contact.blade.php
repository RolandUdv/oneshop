@extends('layouts.app')
@yield('inc.fb_messenger')
@section('content')
<div class="container">
            <h1>{{$title}}</h1><br>
            @include('inc.contact')
    </div>

<style>
#purechat-container .purechat-launcher-frame.purechat-launcher-frame-bottom-right {
    bottom: 4.5em!important;
    right: 15px;
}
#purechat-container .purechat-messenger-frame.purechat-messenger-frame-bottom-right {
    bottom: 4.5em!important;
    right: 24px;
}
</style>

<script type='text/javascript' data-cfasync='false'>window.purechatApi = { l: [], t: [], on: function () { this.l.push(arguments); } }; (function () { var done = false; var script = document.createElement('script'); script.async = true; script.type = 'text/javascript'; script.src = 'https://app.purechat.com/VisitorWidget/WidgetScript'; document.getElementsByTagName('HEAD').item(0).appendChild(script); script.onreadystatechange = script.onload = function (e) { if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete')) { var w = new PCWidget({c: 'feb47c0e-5859-456f-822f-d309694a6041', f: true }); done = true; } }; })();</script>
   


@endsection