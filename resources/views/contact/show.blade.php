@extends('layout')
@section('content')

    @csrf
    <h3>Informations du contact {{$id->nom}} {{$id->prenom}}</h3>
    <p>Nom: {{$id->nom}}</p>
    <p>Prénom: {{$id->prenom}}</p>
    <p>N° de Téléphone: {{$id->tel}}</p>
    <p>Adresse Mail: {{$id->email}}</p>
    <p>Entreprise: {{$id->entreprise}}</p>
    <p>Poste: {{$id->poste}}</p>
    <p>Pays: {{$id->pays}}</p>
    <p>Ville: {{$id->ville}}</p>

@endsection