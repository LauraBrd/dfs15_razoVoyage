@extends('layouts.admin')
@section('content')

<div class="container">
  <form method="POST" action="{{ route('voyages.store') }}">
    @csrf
    <div class="col-sm-6">
      <h1>Ajouter un voyage</h1>
    </div>
    <div class="column">
      <div class="form-group">
        <div class="col-md">
          <input type="text" name="titre" class="form-control" placeholder="titre" required >
        </div>
      </div>
      <div class="form-group">
        <div class="col-md">
          <input type="text" name="image" class="form-control" placeholder="url de l'image" required>
        </div>
      </div>
      <div class="form-group">
        <div class="col-md">
          <input type="number" name="prix" class="form-control" placeholder="Prix en €" required>
        </div>
      </div>
      <div class="form-group">
        <div class="col-md">
          <input type="text" name="destination" placeholder="Destination" class="form-control" required>
        </div>
      </div>
      <div class="form-group">
        <div class="col-md">
          <textarea name="description" placeholder="Description" class="form-control" required></textarea>
        </div>
      </div> 
      <div class="form-group">
        <div class="col-md-6 col-md-offset">
          <input type="submit" value="Ajouter" class="btn btn-default btn-primary" />
          <button type="button" class="btn btn-default btn-primary" onclick="{ window.location = '{{url('voyages') }}'; }">
                        <span class="glyphicon glyphicon-remove"></span> Annuler</button>
        </div>
      </div>
    </div>
  </form>
</div>
@endsection