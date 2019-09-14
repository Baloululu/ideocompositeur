@extends('default')

@section('theme')
    <link rel="stylesheet" href="{{ mix('css/studio.css') }}" type="text/css">
@endsection

@section('content')
    <div class="w3-display-container" style="height: 10%">
        <div class="w3-display-middle w3-center" style="height: 100%">
            <img class="w3-padding-large" style="height: 100%" src="{{ asset('images/common/small/sIdeo_logo.png') }}" alt="Logo">
        </div>
    </div>

    <div class="fondMenu">
        <div style="height: 60%"></div>

        <div class="w3-display-container theme-light-menu" style="height: 30%">
            <div class="w3-container w3-display-left w3-center transparent-light-grey width100">
                <h2>IDEO compositeur, c'est un créateur et un studio à votre disposition !</h2>
            </div>
        </div>

        <div id="app" class="bandeau">
            <Site-chooser></Site-chooser>
        </div>

    </div>
@endsection
