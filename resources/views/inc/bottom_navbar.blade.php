{{-- <div class="row" id="frow" style="margin-bottom:0px;">
        <div class="col s12" style="padding-left:0px!important;padding-right:0px!important;">
            <ul class="tabs tabs-fixed-width transparent white-text">
                <li class="tab col s3 white-text"><a target="_self"
                        href="{{ url('/') }}"
                        class="active white-text"><i class="material-icons">home</i></a></li>
                <li class="tab col s3"><a target="_self"
                        href="{{ url('/services') }}" class="white-text"><i
                            class="material-icons">shopping_basket</i></a></li>
                <li class="tab col s3"><a target="_self"
                        href="{{ url('/scan') }}" class="white-text"><i
                            class="material-icons">camera_enhance</i></a></li>
                <li class="tab col s3"><a target="_self"
                        href="{{ url('/favorites') }}" class="white-text"><i
                            class="material-icons">bookmark</i></a></li>
                <li class="tab col s3"><a target="_self"
                        href="{{ url('/profile') }}" class="white-text"><i
                            class="material-icons">account_circle</i></a></li>
            </ul>
        </div>
    </div> --}}


    <nav class="nav nav-pills nav-justified" style="color:white;background-color:white!important;padding-left:0px!important;padding-right:0px!important;">
            <a class="nav-item nav-link" href="{{ url('/') }}"><i
                class="material-icons">home</i></a>
            <a class="nav-item nav-link" href="{{ url('/services') }}"><i
                class="material-icons">shopping_basket</i></a>
            <a class="nav-item nav-link" href="{{ url('/scan') }}"><i class="fas fa-qrcode"></i>
                {{-- {{-- <i
                class="material-icons">camera_enhance</i> --}}
            </a>
            <a class="nav-item nav-link" href="{{ url('/history') }}"><i class="fas fa-history"></i>
                {{-- <i
                class="material-icons">history</i> --}}
            </a>
            <a class="nav-item nav-link" href="{{ url('/profile') }}"><i
                class="material-icons">account_circle</i></a>
          </nav>
<!-- .nav, .nav-pills, .nav-justified{background-color: #f8f9fa!important}-->