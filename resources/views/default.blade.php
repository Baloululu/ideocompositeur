<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{ mix('css/common.css') }}" type="text/css">
    @yield('theme')

    <script defer async src="{{ mix('js/app.js') }}" type="application/javascript"></script>

    <title>@yield('title')</title>
</head>

<body class="w3-theme-light" style="min-height: 600px">

<div id="chooser" class="w3-auto content">
    @yield('chooser')
</div>

<div id="swup" class="transition-fade w3-auto" style="height: 100%">

    @yield('content')

</div>

</body>

</html>
