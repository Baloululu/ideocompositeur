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

{{ Form::open(["route" => ["admin.update", $article->id], "method" => "put", "files" => true]) }}

{{ Form::select("category_id", $select, $article->category_id, ["class" => "w3-input"]) }}

{{ Form::label("image", "Image") }}
{{ Form::file("image", ["class" => "w3-input"]) }}

{{ Form::label("title", "Titre") }}
{{ Form::text("title", $article->articleContents[0]->title, ["class" => "w3-input"]) }}

{{ Form::label("content", "Contenu") }}
{{ Form::textArea("content", $article->articleContents[0]->content, ["class" => "w3-input"]) }}

{{ Form::label("online", "En ligne") }}
{{ Form::checkbox("online", "1", $article->online) }}

{{ Form::submit("Enregistrer") }}

{{ Form::close() }}

<a href="{{ route("admin.index") }}">Retour</a>

</body>

</html>
