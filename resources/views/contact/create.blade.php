@extends('layout')
@section('content')

<h3>Ajouter un contact</h3>
<form action="../contact" method="post" class="col-lg-6">
    @csrf
    <div class="form-group">
        <label for="">Nom:</label>
        <input type="text" name="nom" id="nom" class="form-control">
    </div>
    <div class="form-group">
        <label for="">Prénom:</label>
        <input type="text" name="prenom" id="prenom" class="form-control">
    </div>
    <div class="form-group">
        <label for="">N° de Téléphone:</label>
        <input type="text" name="tel" id="tel" class="form-control">
    </div>
    <div class="form-group">
        <label for="">Email:</label>
        <input type="text" name="email" id="email" class="form-control">
    </div>
    <div class="form-group">
        <label for="">Entreprise:</label>
        <input type="text" name="entreprise" id="entreprise" class="form-control">
    </div>
    <div class="form-group">
        <label for="">Poste:</label>
        <input type="text" name="poste" id="poste" class="form-control">
    </div>
    <div class="form-group">
        <label for="">Pays:</label>
        <select name="pays" id="pays" class="form-control">
            <option value="1">Allemagne</option>
            <option value="2">Bulgarie</option>
            <option value="3">Cameroun</option>
            <option value="4">Danemark</option>
            <option value="5">Ethiopie</option>
            <option value="6">France</option>
        </select>
    </div>
    <div class="form-group">
        <label for="">Ville:</label>
        <input type="text" name="ville" id="ville" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Enregistrer</button>
</form>

@endsection