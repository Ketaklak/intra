<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    public function index()
    {
        $documents = Document::all(); // Récupère tous les documents
        return view('documents.index', compact('documents'));
    }

    public function create()
    {
        return view('documents.create');
    }

    public function store(Request $request)
    {
        // Ajout de debugging pour voir ce qui est envoyé par le formulaire
        

        // Validation des données du formulaire
        $request->validate([
            'title' => 'required|string|max:255',
            'file' => 'required|file|mimes:pdf,doc,docx|max:1024000', // 100 Mo en Ko
        ]);

        // Stockage du fichier dans le répertoire 'documents'
        $filePath = $request->file('file')->store('documents', 'public');
        

        // Enregistrement des données dans la base de données
        Document::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'file_path' => $filePath,
            'user_id' => auth()->id(),
        ]);

        return redirect()->route('documents.index')->with('success', 'Document téléchargé avec succès!');
    }
}
