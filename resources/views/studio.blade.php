@extends('default')

@section('theme')
    <link rel="stylesheet" href="{{ mix('css/studio.css') }}" type="text/css">
@endsection

@section('title', 'Studio')

@section('chooser')
    <div id="app">
        <Site-chooser :studio=true></Site-chooser>
    </div>
@endsection

@section('content')

    <div id="menuVue">
        <Menu-dynamic :is-studio=true></Menu-dynamic>
    </div>

@endsection
