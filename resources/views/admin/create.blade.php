<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{ mix('css/common.css') }}" type="text/css">

    <script defer async src="{{ mix('js/app.js') }}" type="application/javascript"></script>

    <title>Admin</title>
</head>

<body class="w3-theme-light w3-auto">

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

{{ Form::open(["route" => ["admin.store"], "files" => true]) }}

{{ Form::select("category_id", $select, null, ["class" => "w3-input"]) }}

{{ Form::label("image", "Image") }}
{{ Form::file("image", ["class" => "w3-input"]) }}

{{ Form::label("title", "Titre") }}
{{ Form::text("title", null, ["class" => "w3-input"]) }}

{{ Form::label("content", "Contenu") }}
{{ Form::textArea("content", null, ["class" => "w3-input"]) }}

{{ Form::submit("Ajouter") }}

{{ Form::close() }}

<a href="{{ route("admin.index") }}">Retour</a>

</body>

</html>
