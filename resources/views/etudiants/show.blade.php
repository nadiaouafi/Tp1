@extends('layout')

@section('title', 'Détails de l’étudiant')

@section('content')
<div class="container mt-4">
    <div class="card shadow-sm border-0">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Détails de l’étudiant</h4>
        </div>
        <div class="card-body">
            <dl class="row mb-0">
                <dt class="col-sm-3">Nom complet</dt>
                <dd class="col-sm-9">{{ $etudiant->nom }}</dd>

                <dt class="col-sm-3">Adresse</dt>
                <dd class="col-sm-9">{{ $etudiant->adresse ?? 'Non spécifiée' }}</dd>

                <dt class="col-sm-3">Téléphone</dt>
                <dd class="col-sm-9">{{ $etudiant->telephone ?? 'Non spécifié' }}</dd>

                <dt class="col-sm-3">Courriel</dt>
                <dd class="col-sm-9">{{ $etudiant->email }}</dd>

                <dt class="col-sm-3">Date de naissance</dt>
                <dd class="col-sm-9">
                    {{ $etudiant->date_naissance ? \Carbon\Carbon::parse($etudiant->date_naissance)->format('d/m/Y') : 'Non spécifiée' }}
                </dd>

                <dt class="col-sm-3">Ville</dt>
                <dd class="col-sm-9">{{ $etudiant->ville->nom ?? 'Non spécifiée' }}</dd>
            </dl>
        </div>

        <div class="card-footer bg-light text-end">
            <a href="{{ route('etudiants.edit', $etudiant->id) }}" class="btn btn-warning">Modifier</a>
            <a href="{{ route('etudiants.index') }}" class="btn btn-secondary">Retour à la liste</a>
        </div>
        @endsection