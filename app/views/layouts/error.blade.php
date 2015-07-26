<!DOCTYPE HTML>
<html lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">

    {{
        HTML::scripts([
            '/bower_components/jquery/dist/jquery.min.js',
            '/bower_components/bootstrap/dist/js/bootstrap.min.js',
            '/bower_components/slick.js/slick/slick.min.js'
            ])
    }}

    <link href="/assets/imgs/favicon.ico" rel="icon" type="image/x-icon" />

    {{ HTML::style('/assets/css/filmoteca.css') }}

    <title>@yield('title')</title>
</head>

<body>
@include('layouts.header')

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            @yield('content')
        </div>
    </div>
</div>

@include('layouts.footer')
</body>
</html>
