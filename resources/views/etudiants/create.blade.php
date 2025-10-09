@extends('layout')

@section('content')
<h1>Ajouter un étudiant</h1>

@if($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $err)
        <li>{{ $err }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('etudiants.store') }}" method="POST">
    @csrf

    <label>Nom</label>
    <input type="text" name="nom" value="{{ old('nom') }}" required>

    <label>Adresse</label>
    <input type="text" name="adresse" value="{{ old('adresse') }}">

    <label>Téléphone</label>
    <input type="text" name="telephone" value="{{ old('telephone') }}">

    <label>Email</label>
    <input type="email" name="email" value="{{ old('email') }}" required>

    <label>Date de naissance</label>
    <input type="date" name="date_naissance" value="{{ old('date_naissance') }}">

    <div class="mb-3">
        <label for="ville_id" class="form-label">Ville</label>
        <select name="ville_id" id="ville_id" class="form-select" required>
            <option value="">-- Sélectionner une ville --</option>
            @foreach($villes as $ville)
            <option value="{{ $ville->id }}"
                {{ old('ville_id') == $ville->id ? 'selected' : '' }}>
                {{ $ville->nom }}
            </option>
            @endforeach
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Enregistrer</button>
    <a href="{{ route('etudiants.index') }}" class="btn btn-secondary">Annuler</a>
</form>
@endsection