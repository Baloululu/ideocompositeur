@extends('default')

@section('theme')
    <link rel="stylesheet" href="{{ mix('css/studio.css') }}" type="text/css">
@endsection

@section('title', 'Studio')

@section('content')

    <div id="app" style="height: 10%">
        <Site-chooser :studio=true></Site-chooser>
    </div>

    <nav class="w3-theme-dark">
        <button class="hamburger hamburger--slider" type="button">
        <span class="hamburger-box">
            <span class="hamburger-inner"></span>
        </span>
        </button>
    </nav>

@endsection
