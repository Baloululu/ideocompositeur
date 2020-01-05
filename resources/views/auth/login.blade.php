<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{ mix('css/common.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ mix('css/studio.css') }}" type="text/css">

    <title>Connexion</title>
</head>

<body class="w3-theme-light w3-display-container">

<div class="w3-card-4 w3-display-middle">
    <div class="w3-theme w3-container">
        <h1>Connexion</h1>
    </div>

    <div class="w3-container">
        {{ Form::open(["route" => "login", "method" => "post"]) }}

        <div class="w3-section">
            {{ Form::label("email", "Adresse mail") }}
            {{ Form::email("email", null, ["class" => "w3-input", "required"]) }}
        </div>

        <div class="w3-section">
            {{ Form::label("password", "Mot de passe") }}
            {{ Form::password("password", ["class" => "w3-input", "required"]) }}
        </div>

        <div class="w3-section">
            {{ Form::label("remember", "Se souvenir de moi") }}
            {{ Form::checkbox("remember", true, null, ["class" => "w3-check"]) }}
        </div>

        <div class="w3-section">
            {{ Form::submit("Connexion", ["class" => "w3-button w3-blue-gray w3-round"]) }}
        </div>

        {{ Form::close() }}
    </div>
</div>

</body>

</html>
