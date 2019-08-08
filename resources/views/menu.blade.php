@extends('default')

@section('theme')
    <link rel="stylesheet" href="{{ mix('css/studio.css') }}" type="text/css">
@endsection

@section('content')
    <div class="w3-display-container w3-theme-light" style="height: 10%">
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

        <div class="w3-center w3-row" style="height: 10%">
            <a id="studio" class="w3-col w3-block" href="{{ route('studio') }}" data-swup-preload>
                <div class="w3-display-container dark-grey bandeau">
                    <div class="w3-container w3-display-left w3-center width100">
                        <h4 style="margin: 0">STUDIO</h4>
                    </div>
                </div>
            </a>

            <div class="w3-col dark-red bandeau" style="width: 10%; overflow: hidden">
                <svg height="100%" width="100%" viewBox="0 0 100 100" preserveAspectRatio="none">
                    <polygon class="dark-grey" stroke-width=0 points="0,0 0,100 95,0" />
                    <polygon class="light-grey" stroke-width=0 points="95,0 100,0 5,100 0,100" />
                </svg>
            </div>

            <a id="compo" class="w3-col w3-block" href="{{ route('compo') }}" data-swup-preload>
                <div class="w3-display-container dark-red bandeau">
                    <div class="w3-container w3-display-left w3-center width100">
                        <h4 style="margin: 0">MES COMPOS</h4>
                    </div>
                </div>
            </a>
        </div>

    </div>
@endsection
