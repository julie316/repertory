@extends('layout')
@section('content')

    <h3>Nos Contacts</h3><br>
    <a href="{{ route('contact.create') }}" class="btn btn-primary">Nouveau Contact</a><br>

    @include('partials.search')

    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Noms & Prénoms</th>
                <th>N° de Télephone</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        @foreach( $data as $contact)
            <tr>
                <td>{{$contact->id}}</td>
                <td>
                    <a href="contact/{{$contact->id}}">{{$contact->nom}} {{$contact->prenom}}</a>
                </td>
                <td>{{$contact->tel}}</td>
                <td>{{$contact->email}}</td>
                <td>
                    <a href="contact/{{$contact->id}}/edit" class="btn btn-info">M</a>
                    <form action="contact/{{$contact->id}}" method="post" style="display: inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">S</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection