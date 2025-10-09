@extends('layout')

@section('title', 'Accueil')

@section('content')
<h1>Bienvenue sur la plateforme du Collège Maisonneuve</h1>
<p>Ce site permet de gérer les informations des étudiants.</p>

<div class="actions">
    <a href="{{ route('etudiants.index') }}" class="btn">Gérer les étudiants</a>

</div>
@endsection