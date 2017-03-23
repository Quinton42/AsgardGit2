<!DOCTYPE html>
<html>
<head lang="{{ LaravelLocalization::setLocale() }}">
    <meta charset="UTF-8">
    @section('meta')
        <meta name="description" content="{{ Setting::get('core::site-description') }}" />
    @show
    <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0">
    <title>
        @section('title'){{ Setting::get('core::site-name') }}@show
    </title>
    <link rel="shortcut icon" href="{{ Theme::url('favicon.ico') }}">
    <!-- GOOGLE FONT(S) -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,400italic%7CRaleway:800,400' rel='stylesheet' type='text/css'>

    {!! Theme::style('css/theme.min.css') !!}
    {!! Theme::style('css/bootstrap.min.css') !!}
    @section('styles')
    @show
</head>
<body>

@include('partials.navigation')


@yield('content')

@include('partials.footer')


{!! Theme::script('js/packages.min.js') !!}
{!! Theme::script('js/theme.min.js') !!}
@yield('scripts')

<?php if (Setting::has('core::google-analytics')): ?>
{!! Setting::get('core::google-analytics') !!}
<?php endif; ?>
</body>
</html>
