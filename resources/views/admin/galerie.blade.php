@extends('admin.default')

@section('content')
    <h1>Galerie</h1>

    <div id="vuejs">
        <image-upload :route="'{{ route('uploadImage') }}'"></image-upload>
    </div>
@endsection
