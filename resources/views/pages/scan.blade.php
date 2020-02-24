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

<script type="text/javascript" src="https://webqr.com/llqrcode.js"></script>
<script type="text/javascript" src="https://webqr.com/webqr.js"></script>

<div id="main">
    <div id="header">
        <div style="position:relative;top:+20px;left:0px;">
            <g:plusone size="medium"></g:plusone>
        </div>


    <div id="mainbody">
                            <img class="selector" id="webcamimg" src="https://webqr.com/vid.png" onclick="setwebcam()" />
                            <img class="selector" id="qrimg" src="https://webqr.com/cam.png" onclick="setimg()" style="display:none;" />
                        </br>
                            <div class="container text-center">
                            <td colspan="2" align="center">
                                <div id="outdiv"></div>

                    <div id="result"></div>
    
<canvas id="qr-canvas" width="800" height="600" style="display: none;"></canvas>

</div>
</div>



<script type="text/javascript">
    load();
</script>

@endsection @section('script')
<script>
</script>
@endsection