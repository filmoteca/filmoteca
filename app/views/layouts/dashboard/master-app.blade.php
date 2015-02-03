<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="{{ asset('/bower_components/bootstrap/dist/css/bootstrap.min.css')}}" />
        <link rel="stylesheet" href="{{ asset('packages/mrjuliuss/syntara/assets/css/toggle-switch.css') }}" />
        <link rel="stylesheet" href="{{ asset('packages/mrjuliuss/syntara/assets/css/base.css') }}" media="all">
        <link rel="stylesheet" href="{{ asset('/assets/css/filmoteca.css')}}" />

        @yield('styles')

        <script src="{{ asset('apps/require.config.js') }}"></script>

        @yield('scripts')

        <title>{{ (!empty($siteName)) ? $siteName : "Syntara"}}</title>
    </head>
    <body>
        @include(Config::get('syntara::views.header'))
        {{ isset($breadcrumb) ? Breadcrumbs::create($breadcrumb) : '' }}
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
