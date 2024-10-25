@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Bienvenue sur le Tableau de Bord</h1>
    <p>Ceci est le tableau de bord de votre intranet.</p>

    <!-- Ajoute ici des sections spécifiques comme les annonces, les documents, etc. -->
    <div class="row">
        <div class="col-md-6">
            <h2>Annonces</h2>
            <!-- Tu pourras lister ici les annonces récentes -->
        </div>
        <div class="col-md-6">
            <h2>Documents récents</h2>
            <!-- Tu pourras lister ici les documents récemment partagés -->
        </div>
    </div>
</div>
@endsection
