@extends('layout')

@section('content')
<h1 class="mb-10">Liste des Étudiants</h1>

<a href="{{ route('etudiants.create') }}" class="btn btn-primary mb-3">Ajouter un étudiant</a>

<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>Nom</th>
            <th>Email</th>
            <th>Téléphone</th>
            <th>Ville</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($etudiants as $etudiant)
        <tr>
            <td>{{ $etudiant->nom }}</td>
            <td>{{ $etudiant->email }}</td>
            <td>{{ $etudiant->telephone }}</td>
            <td>{{ $etudiant->ville->nom ?? '' }}</td>
            <td>

                <a href="{{ route('etudiants.show', $etudiant->id) }}" class="btn btn-info btn-sm">Voir</a>
                <a href="{{ route('etudiants.edit', $etudiant->id) }}" class="btn btn-warning btn-sm">Modifier</a>
                <form action="{{ route('etudiants.destroy', $etudiant->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet étudiant ?')">Supprimer</button>

                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<!-- Pagination -->
<div class="mt-3">
    {{ $etudiants->links() }}
</div>
@endsection