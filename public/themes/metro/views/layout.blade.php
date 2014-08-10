<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="{{ theme_asset_hashed('css/metro.min.css') }}">
        <link href='//fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="{{ theme_asset('js/html5shiv.js') }}"></script>
          <script src="{{ theme_asset('js/respond.min.js') }}"></script>
        <![endif]-->

    </head>

    <body>
        @include('theme::partials.alert')

        <div class="viewport">
            @include('theme::partials.header')
            @yield('content')
        </div>

        <script src="{{ theme_asset('js/jquery-bootstrap.min.js') }}"></script>
        <script src="{{ theme_asset_hashed('js/app.min.js') }}"></script>

        @yield('script-end')


    </body>

</html>
