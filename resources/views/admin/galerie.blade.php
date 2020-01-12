@extends('admin.default')

@section('content')
    <h1>Galerie</h1>

    <div class="thumbContainer">
        @foreach($names as $name)
            <a href="{{ Storage::disk("public")->url("Galerie/Studio/" . $name) }}" class="w3-btn">
                <img src="{{ Storage::disk("public")->url("Galerie/Studio/Thumbs/" . $name) }}" alt="thumb">
            </a>
        @endforeach
    </div>

    <div id="vuejs">
        <h3>Ajouter des images</h3>
        <image-upload :route="'{{ route('uploadImage') }}'"></image-upload>
    </div>
@endsection
