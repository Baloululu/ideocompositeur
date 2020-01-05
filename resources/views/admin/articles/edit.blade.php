@extends('admin.default')

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{ Form::model($article, ["url" => $url, "method" => $method, "files" => true]) }}

    <div class="w3-section">
        <div class="w3-row-padding w3-stretch">
            <div class="w3-half">
                {{ Form::label("category_id", "Categorie") }}
                {{ Form::select("category_id", $select, null, ["class" => "w3-input"]) }}
            </div>
            <div class="w3-half">
                {{ Form::label("image", "Image") }}
                {{ Form::file("image", ["class" => "w3-input"]) }}
            </div>
        </div>
    </div>

    <div class="w3-section">
        {{ Form::label("title", "Titre") }}
        {{ Form::text("title", null, ["class" => "w3-input", "required" => true]) }}
    </div>

    <div class="w3-section">
        {{ Form::label("content", "Contenu") }}
        {{ Form::textArea("content", null, ["class" => "w3-input", "required" => true]) }}
    </div>

    <div class="w3-section">
        <div class="w3-row-padding w3-stretch">
            <div class="w3-half">
                {{ Form::label("online", "En ligne") }}
                {{ Form::checkbox("online", "1", null, ["class" => "w3-check"]) }}
            </div>
            <div class="w3-half w3-right-align">
                <a href="{{ route("articles.index") }}" class="w3-button w3-round w3-blue-gray">Retour</a>
                {{ Form::submit("Enregistrer", ["class" => "w3-button w3-round w3-green"]) }}
            </div>
        </div>
    </div>

    {{ Form::close() }}
@endsection
