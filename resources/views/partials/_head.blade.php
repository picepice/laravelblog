    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Laravel Blog @yield('title')</title>
      <link href="{{ asset('css/app.css') }}" rel="stylesheet">

 
     @yield('stylesheets')
