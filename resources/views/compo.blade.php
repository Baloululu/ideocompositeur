@extends('default')

@section('theme')
    <link rel="stylesheet" href="{{ mix('css/compo.css') }}" type="text/css">
@endsection

@section('title', 'Compositeur')

@section('chooser')
    <div id="app" style="height: 80px">
        <Site-chooser :compo=true></Site-chooser>
    </div>
@endsection

@section('content')

    <div id="menuVue">
        <Menu-dynamic :is-studio=false></Menu-dynamic>
    </div>

    @include("articles")

@endsection
