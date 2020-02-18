@extends('layouts.app')

@section('content')
<div class="container">
        <h1>{{$title}}</h1>
</div>
    <script src="../resources/js/scan.js"></script>

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
            <button onclick="captureToCanvas()">Capture</button><br>
        </div>
    </div>
</div>

@endsection