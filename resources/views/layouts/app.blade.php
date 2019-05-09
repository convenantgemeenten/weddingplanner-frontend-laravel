<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Weddingplanner - @yield('title')</title>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!-- <link rel="stylesheet" href="{{ URL::asset('css/datepicker3.css') }}"> -->
        <script src="https://code.jquery.com/jquery-3.4.0.slim.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
        <!-- <script src="{{ URL::asset('js/bootstrap-datepicker.js') }}"></script>
        <script src="{{ URL::asset('js/locales/bootstrap-datepicker.nl.js') }}"></script> -->
        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:700' rel='stylesheet' type='text/css'>
        <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
        <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
       

        {{-- <link href='{{ URL::asset('fullcalendar/packages/core/main.css') }}' rel='stylesheet' />
        <link href='{{ URL::asset('fullcalendar/packages/daygrid/main.css') }}' rel='stylesheet' />
        <script src='{{ URL::asset('fullcalendar/packages/core/main.js') }}'></script>
        <script src='{{ URL::asset('fullcalendar/packages/interaction/main.js') }}'></script>
        <script src='{{ URL::asset('fullcalendar/packages/daygrid/main.js') }}'></script>

        <link href='{{ URL::asset('css/style.css') }}' rel='stylesheet' /> --}}

        <link href='/fullcalendar/packages/core/main.css' rel='stylesheet' />
        <link href='/fullcalendar/packages/daygrid/main.css' rel='stylesheet' />
        <script src='/fullcalendar/packages/core/main.js'></script>
        <script src='/fullcalendar/packages/interaction/main.js'></script>
        <script src='/fullcalendar/packages/daygrid/main.js'></script>
        <link href="/css/style.css" rel='stylesheet' />     
        
    </head>
    <body>
        @section('header')
            <header id="header">
                <div class="row">
                    <div id="hdrLeft" class="col-10">
                        @yield('title')
                    </div>
                    <div id="hdrPrice" class="col-2">
                        <span class="total">Totaal:</span>
                        <span class="price">@yield('price')</span>
                    </div>
                </div>
            </header>
        @show

        <div class="content-container">
            
                @yield('content')
                
        </div>

        @section('modal')

        @show
    </body>
</html>