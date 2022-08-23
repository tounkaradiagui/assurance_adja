@extends('layouts.dashboard')
@section('adja')
<style>
  .uper {
    margin-top: 40px;
    width: 45%;
    margin-left: 25%;
    margin-bottom: 5%;
    color: black;
  }

  .card-header{
    text-align: center;
    text-transform: uppercase;
    font-weight: bold;
    color: white;
    background-color: #4e73df;
  }

  form{
    width: 100%;
    justify-content: center;
  }

  .btn{
    margin-left: 40%;
    color: white;
    font-weight: bold;
  }
</style>

<div class="card uper">
  <div class="card-header">
    Ajouter un Vehicule
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

      <form method="post" action="{{ route('vehicules.store') }}">
         @csrf
          <div class="form-group">
              <label for="immatriculation">Immatriculation:</label>
              <input type="text" class="form-control" name="immatriculation" placeholder="Immatriculation"/>
          </div>

          <div class="form-group">
              <label for="marque">Marque:</label>
              <input type="text" class="form-control" name="marque" placeholder="Marque"/>
          </div>

          <div class="form-group">
              <label for="modele">Modele:</label>
              <input type="text" class="form-control" name="modele" placeholder="Modele"/>
          </div>

          <div class="form-group">
              <label for="couleur">Couleur:</label>
              <input type="text" class="form-control" name="couleur" placeholder="Couleur"/>
          </div>

          <div class="form-group">
              <label for="carburant">Carburant:</label>
              <input type="text" class="form-control" name="carburant" placeholder="Carburant"/>
          </div>

          <div class="form-group">
              <label for="type">Type:</label>
              <input type="text" class="form-control" name="type" placeholder="Type"/>
          </div>


          <div class="container">
            <label class="form-label" for="doa">Nom_assure</label>
            <select class="form-select" style="color: #41A7A5" aria-label="Default select example" name="id_assure">
            @foreach ($assures as $assure)
                <option value="{{$assure->id}}">{{$assure->prenom}}</option>
            @endforeach
            </select>
          </div>
          <button type="submit" class="btn btn-primary">Ajouter</button>
      </form>
  </div>
</div>
@endsection