@extends('layouts.dashboard')
@section('adja')

<style>
  .uper {
    margin-top: 40px;
  }
</style>

<div class="card uper">
  <div class="card-header">
    Modifier un Paiement
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

      <form method="post" action="{{ route('paiements.update', $paiement->id ) }}">
        <div class="form-group">
          @csrf
          @method('PATCH')
          <label for="marque">Montant :</label>
          <input type="integer" class="form-control" name="montant" value="{{ $paiement->montant }}"/>
        </div>

        <div class="form-group">
          <label for="cases">Date :</label>
          <input type="date" class="form-control" name="date" value="{{ $paiement->date }}"/>
        </div>

        <div class="form-group">
          <label for="cases">Id_assure :</label>
          <input type="int" class="form-control" name="id_assure" value="{{ $paiement->id_assure }}"/>
        </div>
        <button type="submit" class="btn btn-primary">Modifier</button>
      </form>
  </div>
</div>
@endsection