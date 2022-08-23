@extends('layouts.dashboard')
@section('adja')
<style>
  .uper {
    margin-top: 40px;
  }
</style>

<div class="card uper">
  <div class="card-header">
    Effectuer un Paiement
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

      <form method="post" action="{{ route('assures.paiement') }}">
         @csrf
          <div class="form-group">
              <label for="montant">Montant :</label>
              <input type="integer" class="form-control" name="montant"/>
          </div>

          <div class="form-group">
              <label for="date">Date :</label>
              <input type="date" class="form-control" name="date"/>
          </div>

          <div class="container" hidden>
            <label class="form-label" for="doa">Id_assure</label>
            <input type="number" class="form-control" name="id_assure"/>
          </div>
          <button type="submit" class="btn btn-primary">Valider</button>
      </form>
  </div>
</div>
@endsection