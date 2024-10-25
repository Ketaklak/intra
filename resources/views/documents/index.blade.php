@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Documents</h1>

    <a href="{{ route('documents.create') }}" class="btn btn-primary">Ajouter un Document</a>

    <table class="table mt-4">
        <thead>
            <tr>
                <th>Titre</th>
                <th>Description</th>
                <th>Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($documents as $document)
                <tr>
                    <td>{{ $document->title }}</td>
                    <td>{{ $document->description }}</td>
                    <td>{{ $document->created_at->format('d/m/Y') }}</td>
                    <td>
                        <a href="{{ asset('storage/' . $document->file_path) }}" class="btn btn-primary">Télécharger</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
