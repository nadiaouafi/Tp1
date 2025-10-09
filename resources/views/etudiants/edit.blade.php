@extends('layout')

@section('title', 'Modifier un étudiant')

@section('content')
<div class="container mt-4">
    <div class="card shadow-sm border-0">
        <div class="card-header bg-warning text-dark">
            <h4 class="mb-0">Modifier un étudiant</h4>
        </div>

        <div class="card-body">
            {{-- Affichage des erreurs de validation --}}
            @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Oups !</strong> Il y a des erreurs dans le formulaire :
                <ul class="mb-0 mt-2">
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            {{-- Formulaire de modification --}}
            <form action="{{ route('etudiants.update', $etudiant->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="nom" class="form-label">Nom complet</label>
                    <input type="text" name="nom" id="nom" class="form-control"
                        value="{{ old('nom', $etudiant->nom) }}" required>
                </div>

                <div class="mb-3">
                    <label for="adresse" class="form-label">Adresse</label>
                    <input type="text" name="adresse" id="adresse" class="form-control"
                        value="{{ old('adresse', $etudiant->adresse) }}">
                </div>

                <div class="mb-3">
                    <label for="telephone" class="form-label">Téléphone</label>
                    <input type="text" name="telephone" id="telephone" class="form-control"
                        value="{{ old('telephone', $etudiant->telephone) }}">
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Courriel</label>
                    <input type="email" name="email" id="email" class="form-control"
                        value="{{ old('email', $etudiant->email) }}" required>
                </div>

                <div class="mb-3">
                    <label for="date_naissance" class="form-label">Date de naissance</label>
                    <input type="date" name="date_naissance" id="date_naissance" class="form-control"
                        value="{{ old('date_naissance', $etudiant->date_naissance) }}">
                </div>

                <div class="mb-3">
                    <label for="ville_id" class="form-label">Ville</label>
                    <select name="ville_id" id="ville_id" class="form-select" required>
                        <option value="">-- Sélectionner une ville --</option>
                        @foreach($villes as $ville)
                        <option value="{{ $ville->id }}"
                            {{ old('ville_id', $etudiant->ville_id) == $ville->id ? 'selected' : '' }}>
                            {{ $ville->nom }}
                        </option>
                        @endforeach
                    </select>
                </div>

                <div class="text-end">
                    <a href="{{ route('etudiants.index') }}" class="btn btn-secondary">Annuler</a>
                    <button type="submit" class="btn btn-success">Enregistrer les modifications</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection