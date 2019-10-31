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

<div class="w3-row">
    <div class="w3-half">
        <h1>Studio</h1>
        <ul>
            @foreach($catContent["studio"] as $cat)
                @foreach($cat->articles as $article)
                    <li>
                        <a href="{{ route('admin.edit', $article->id) }}">{{ $article->articleContents[0]->title }}</a>
                        {{ Form::open(["route" => ["admin.destroy", $article->id], "method" => "delete"]) }}
                        {{ Form::submit("Supprimé") }}
                        {{ Form::close() }}
                    </li>
                @endforeach
            @endforeach
        </ul>
    </div>
    <div class="w3-half">
        <h1>Compo</h1>
        <ul>
            @foreach($catContent["compo"] as $cat)
                @foreach($cat->articles as $article)
                    <li>
                        <a href="{{ route('admin.edit', $article->id) }}">{{ $article->articleContents[0]->title }}</a>
                        {{ Form::open(["route" => ["admin.destroy", $article->id], "method" => "delete"]) }}
                        {{ Form::submit("Supprimé") }}
                        {{ Form::close() }}
                    </li>
                @endforeach
            @endforeach
        </ul>
    </div>
</div>

<a href="{{ route('admin.create') }}">Ajouter</a>

</body>

</html>
