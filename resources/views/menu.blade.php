@extends('default')

@section('theme')
    <link rel="stylesheet" href="{{ mix('css/studio.css') }}">
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
            <div class="w3-container w3-display-left w3-center bandeauMenu width100">
                <h2>IDEO compositeur, c'est un créateur et un studio à votre disposition !</h2>
            </div>
        </div>

        <div class="w3-center w3-row" style="height: 10%">
            <a class="w3-col w3-block" href="#" style="width: 45%;height: 100%">
                <div class="w3-display-container w3-theme-dark borderMenu" style="height: 100%">
                    <div class="w3-container w3-display-left w3-center width100">
                        <h4 style="margin: 0">STUDIO</h4>
                    </div>
                </div>
            </a>

            <div class="w3-col w3-theme-light borderMenu" style="width: 10%;height: 100%">
                <svg class="diagonalSvg" height="100%" width="100%" viewBox="0 0 100 100" preserveAspectRatio="none">
                    <polygon fill="var(--color-1)" stroke-width=0 points="0,0 0,95 95,0" />
                    <polygon fill="var(--color-2)" stroke-width=0 points="100,5 5,100 100,100" />
                </svg>
            </div>

            <a class="w3-col w3-block" href="#" style="width: 45%;height: 100%">
                <div class="w3-display-container dark-red borderMenu" style="height: 100%">
                    <div class="w3-container w3-display-left w3-center width100">
                        <h4 style="margin: 0">MES COMPOS</h4>
                    </div>
                </div>
            </a>
        </div>
    </div>
@endsection
