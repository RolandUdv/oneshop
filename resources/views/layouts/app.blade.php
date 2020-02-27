<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="UTF-8">
    <title>{{config('app.name', 'Brand')}}</title>
    <!--Import materialize.css-->

    {{-- <link type="text/css" rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css"
        media="screen,projection" /> --}}

    {{-- <link rel="stylesheet" href="/css/app.css"> --}}
    {{-- <link href="../public/css/app.css" rel="stylesheet" /> Bootstrap stylesheet --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">{{-- Bootstrap stylesheet --}}
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <!-- scripts -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    <!-- icons -->
    <script src="https://kit.fontawesome.com/a5545a28d1.js" crossorigin="anonymous"></script>
    <!--Let browser know website is optimized for mobile-->

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<style>

</style>
<script>

</script>

</head>
<!-- layout forked from https://codepen.io/Lcallaghan84/pen/qPRRNO -->

<header>
    @include('inc.top_navbar')

</header>

<body>
    <main>

        <div class="container">
            <div class="row" style="margin-top:20px;">

                    {{-- <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
        
                            You are logged in!
                        </div> --}}

                @include('inc.messages')
                @yield('carousel')
                @yield('content')
                <!-- includes titles and brief info -->
                @yield('smallstore')
                <!-- small post types, 3x1 -->
                @yield('largestore')
                <!-- featured large post types 1x1 -->

            </div>
        </div>
    </main>

    <footer class="page-footer">
        @include('inc.bottom_navbar')
</body>
</footer>

</body>

</html>
