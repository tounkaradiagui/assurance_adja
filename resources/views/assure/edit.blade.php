@extends('layouts.dashboard')
@section('adja')

<style>
  .uper {
    margin-top: 40px;
  }
</style>

<div class="card uper">
  <div class="card-header">
    Modifier un Assuré
  </div>

  <div class="card-body">

    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif

      <form method="post" action="{{ route('assures.update', $assure->id ) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="nom">Nom :</label>
              <input type="text" class="form-control" name="nom" value="{{ $assure->nom }}"/>
          </div>

          <div class="form-group">
              <label for="prenom">Prenom :</label>
              <input type="text" class="form-control" name="prenom" value="{{ $assure->prenom }}"/>
          </div>

          <div class="form-group">
              <label for="adresse">Adresse :</label>
              <input type="text" class="form-control" name="adresse" value="{{ $assure->adresse }}"/>
          </div>

          <div class="form-group">
              <label for="telephone">Telephone :</label>
              <input type="text" class="form-control" name="telephone" value="{{ $assure->telephone }}"/>
          </div>

          <div class="form-group">
              <label for="fonction">Fonction :</label>
              <input type="text" class="form-control" name="fonction" value="{{ $assure->fonction }}"/>
          </div>
          <button type="submit" class="btn btn-primary">Modifier</button>
      </form>
  </div>
</div>
@endsection
 