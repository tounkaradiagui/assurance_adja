@extends('layouts.dashboard')
@section('adja')

<style>
  .uper {
    margin-top: 40px;
  }

  h2{
    text-align: center;
    color: black;
    font-weight: bold;
  }

  thead{
    text-align: center;
    background-color: #4e73df;
    color: white;
    font-weight: bold;
  }  
</style>

<div class="uper">

  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
    <h2>LISTE DES ASSURES</h2>
  <div class="d-flex justify-content-end mb-4"><a type="button" class="btn btn-primary" href="{{('/assures/create')}}">AJOUTER UN ASSURE</a></div>
  <table class="table table-bordered table-hover" style="color:black;">

    <thead>
        <tr>
          <td>Id</td>
          <td>Nom</td>
          <td>Prenom</td>
          <td>Adresse</td>
          <td>Telephone</td>
          <td>Fonction</td>
          <td colspan="3">Actions</td>
        </tr>
    </thead>

    <tbody>
        @foreach($assures as $assure)
        <tr>
          <td>{{$assure->id}}</td>
          <td>{{$assure->nom}}</td>
          <td>{{$assure->prenom}}</td>
          <td>{{$assure->adresse}}</td>
          <td>{{$assure->telephone}}</td>
          <td>{{$assure->fonction}}</td>
          <td><a href="{{ route('assures.edit', $assure->id)}}" class="btn btn-primary">Modifier</a></td>
          <td><a href="{{ route('assures.show', $assure->id)}}" class="btn btn-info">Details</a></td>
          <td>
            <form action="{{ route('assures.destroy', $assure->id)}}" method="post">
              @csrf
              @method('DELETE')
              <button class="btn btn-danger" type="submit">Supprimer</button>
            </form>
          </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection
