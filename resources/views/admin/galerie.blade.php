@extends('admin.default')

@section('content')
    <h1>Galerie</h1>

    {{ Form::open(["route" => "galerie.upload", "method" => "post", "files" => true]) }}
    {{ Form::file("images[]", ["label" => "Ajouter des images", "is" => "drop-files", "multiple"]) }}
    {{ Form::submit("Envoyer", ["class" => "w3-button w3-green"]) }}
    {{ Form::close() }}
@endsection
