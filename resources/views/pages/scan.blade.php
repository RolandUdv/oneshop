@extends('layouts.app') @section('content')
<div class="container">
    <h1>{{$title}}</h1>
</div>
<script src="../resources/js/scan.js"></script>

{{--
<style>
    .qr-container-canvas {
        margin-right: auto;
        margin-left: auto;
        width: 400px;
        display: block;
    }
</style>
<div class="container">
    <div class="row">
        <div class="qr-container-canvas">
            <canvas id="qr-canvas" width="400px" height="400px" style="border:1px solid #000000; border-radius: 20px;"></canvas>
            <button onclick="captureToCanvas()">Capture</button>
            <br>
        </div>
    </div>
</div> --}}

{{-- https://webqr.com/ --}}
{{-- https://codepen.io/SebastianFlorica/pen/NbdYbj --}}

<style>
#v {
    width: 100%!important;
    border-radius: 30px;
    box-shadow: 3px 3px 10px grey;
    /* outline: 3px solid #000000; */
}
</style>

<script type="text/javascript" src="https://webqr.com/llqrcode.js"></script>
<script type="text/javascript" src="https://webqr.com/webqr.js"></script>
<div class="container">
    <div id="main">
        <div id="header">
            <g:plusone size="medium"></g:plusone>
        </div>
    </div>
</div>

<div class="container">
        <div id="mainbody" class="float-center">
            <img class="selector" id="webcamimg" src="https://webqr.com/vid.png" onclick="setwebcam()"  style="display:none;" />
            <img class="selector" id="qrimg" src="https://webqr.com/cam.png" onclick="setimg()" style="display:none;" />
            </br>
        </div>
            <div class="container text-center">
                <td colspan="2" align="center">
                    <div id="outdiv"></div>
                    </br>

                    <div id="result"></div>

                    <canvas id="qr-canvas" width="800" height="600" style="display: none;"></canvas>
                    
                    </br>
                    </br>
                    <small>Credits Lazar Laszlo</small>
            </div>
        </div>
</div>

<script type="text/javascript">
    load();
</script>

@endsection @section('script')
<script>
</script>
@endsection