<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etudiant;
use App\Models\Ville;

class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $etudiants = Etudiant::select()
            ->orderby('name')
            ->paginate(10);
        return view('etudiants.index', compact('etudiants'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $villes = Ville::all();
        return view('etudiants.create', compact('villes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'adresse' => 'required',
            'telephone' => 'required',
            'email' => 'required|email|unique:etudiants,email',
            'date_naissance' => 'required|date',
            'ville_id' => 'required|exists:villes,id'
        ]);
        Etudiant::create($request->all());
        return redirect()->route('etudiants.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $etudiant = Etudiant::with('ville')->findOrFail($id);
        return view('etudiants.show', compact('etudiant'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $etudiant = Etudiant::findOrFail($id);
        $villes = Ville::all();

        return view('etudiants.edit', compact('etudiant', 'villes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Etudiant $etudiant)
    {
        $request->validate([
            'nom' => 'required',
            'adresse' => 'required',
            'telephone' => 'required',
            'email' => "required|email|unique:etudiants,email,$etudiant->id",
            'date_naissance' => 'required|date',
            'ville_id' => 'required|exists:villes,id'
        ]);
        $etudiant->update($request->all());
        return redirect()->route('etudiants.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Etudiant $etudiant)
    {
        $etudiant->delete();
        return redirect()->route('etudiants.index');
    }
}
