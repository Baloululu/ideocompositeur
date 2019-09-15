@extends('default')

@section('theme')
    <link rel="stylesheet" href="{{ mix('css/studio.css') }}" type="text/css">
@endsection

@section('title', 'Studio')

@section('chooser')
    <div id="app" style="height: 80px">
        <Site-chooser :studio=true></Site-chooser>
    </div>
@endsection

@section('content')

    <div id="menuVue">
        <Menu-dynamic :links='["Accès", "Matériel", "Prestations", "Contacts", "Projets/<br/>Commentaires"]'></Menu-dynamic>
    </div>

@endsection
