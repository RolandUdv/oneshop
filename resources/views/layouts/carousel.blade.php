@section('carousel')

<script >
$('.carousel').carousel({
  interval: 2000

})

</script>

{{-- <div class="container"> --}}
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        {{-- @foreach( $homepages as $homepage) --}}
        <div class="carousel-inner">
          <div class="carousel-item active">
            {{-- {{$homepage->cover_image}} --}}
          <img src="https://wowslider.com/sliders/demo-77/data1/images/road220058.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>First slide label</h5>
              <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="https://wowslider.com/sliders/demo-77/data1/images/road220058.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Second slide label</h5>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="https://wowslider.com/sliders/demo-77/data1/images/road220058.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Third slide label</h5>
              <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    {{-- </div> --}}















{{-- 
https://images-eu.ssl-images-amazon.com/images/I/41sfz8dKX1L._SL500_AC_SS350_.jpg

https://www.thespruce.com/thmb/OZMhZeQtehT_XQrrP2kfoJqV_Nk=/960x0/filters:no_upscale():max_bytes(150000):strip_icc()/duck-big-bill-59ef8e5068e1a2001072c89e.jpg

https://upload.wikimedia.org/wikipedia/commons/thumb/d/d5/Grave_eend_maasmuur.jpg/1200px-Grave_eend_maasmuur.jpg

--}}


@endsection