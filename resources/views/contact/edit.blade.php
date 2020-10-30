@extends('layout')
@section('content')

<h3>Modifier un contact</h3>
<form action="../../contact/{{$id->id}}" method="post" class="col-lg-6">
    @csrf
    @method('PATCH')
    <div class="form-group">
        <label for="">Nom:</label>
        <input type="text" name="nom" id="nom" class="form-control" value="{{old('nom') ?? $id->nom}}">
    </div>
    <div class="form-group">
        <label for="">Prénom:</label>
        <input type="text" name="prenom" id="prenom" class="form-control" value="{{old('prenom') ?? $id->prenom}}">
    </div>
    <div class="form-group">
        <label for="">N° de Téléphone:</label>
        <input type="text" name="tel" id="tel" class="form-control" value="{{old('tel') ?? $id->tel}}">
    </div>
    <div class="form-group">
        <label for="">Email:</label>
        <input type="text" name="email" id="email" class="form-control" value="{{old('email') ?? $id->email}}">
    </div>
    <div class="form-group">
        <label for="">Entreprise:</label>
        <input type="text" name="entreprise" id="entreprise" class="form-control" value="{{old('entreprise') ?? $id->entreprise}}">
    </div>
    <div class="form-group">
        <label for="">Poste:</label>
        <input type="text" name="poste" id="poste" class="form-control" value="{{old('poste') ?? $id->poste}}">
    </div>
    <div class="form-group">
        <label for="">Pays:</label>
        <select name="pays" id="pays" class="form-control">
            @foreach( $id->getPaysOptions() as $key => $value )
            <option value="{{$key}}" {{ $id -> pays == $value ? 'selected' : ''}}>{{$value}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="">Ville:</label>
        <input type="text" name="ville" id="ville" class="form-control" value="{{old('ville') ?? $id->ville}}">
    </div>
    <button type="submit" class="btn btn-primary">Modifier</button>
</form>

@endsection