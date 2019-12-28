<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{ mix('css/common.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ mix('css/studio.css') }}" type="text/css">
    <script defer async src="{{ mix('js/admin.js') }}" type="application/javascript"></script>

    <title>Admin</title>
</head>

<body class="w3-theme-light">

<div class="w3-bar w3-theme">
    <a href="{{ route('menu')  }}" class="w3-bar-item w3-button" target="_blank">Site</a>
    <a href="{{ route('articles.index') }}" class="w3-bar-item w3-button">Articles</a>
    <a href="{{ route('galerie.index') }}" class="w3-bar-item w3-button">Galerie</a>

    {{ Form::open(["route" => "logout", "method" => "post", "class" => "w3-right"]) }}
    {{ Form::submit("Deconnexion", ["class" => "w3-button"]) }}
    {{ Form::close() }}
</div>

<div class="w3-auto">
    <div class="w3-container">
        @yield('content')
    </div>
</div>

</body>
</html>
