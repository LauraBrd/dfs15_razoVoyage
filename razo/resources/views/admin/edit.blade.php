@extends('layouts.admin')
@section('content')

<div class="container">
  <form action="{{ route('voyages.update', ['voyage' => $voyage]) }}"  method="POST">
    @csrf
    @method('PUT')
    <div class="col-sm-6">
      <h1>Modifier un voyage</h1>
    </div>
    <div class="column">
      <input type="hidden" value="{{ old('id') }}">
      <div class="form-group">
        <div class="col-md">
          <input type="text" name="titre" value="{{ old('titre') }}" class="form-control" placeholder="titre" required >
        </div>
      </div>
      <div class="form-group">
        <div class="col-md">
          <input type="text" name="image" value="{{ old('image') }}" class="form-control" placeholder="url de l'image" required>
        </div>
      </div>
      <div class="form-group">
        <div class="col-md">
          <input type="number" name="prix" value="{{ old('prix') }}" class="form-control" placeholder="Prix en €" required>
        </div>
      </div>
      <div class="form-group">
        <div class="col-md">
          <input type="text" name="destination" value="{{ old('destination') }}" placeholder="Destination" class="form-control" required>
        </div>
      </div>
      <div class="form-group">
        <div class="col-md">
          <textarea name="description" value="{{ old('description') }}" placeholder="Description" class="form-control" required></textarea>
        </div>
      </div> 
      <div class="form-group">
        <div class="col-md-6 col-md-offset">
          <input type="submit" value="Mettre à jour" class="btn btn-default btn-primary" />
          <button type="button" class="btn btn-default btn-primary" onclick="{ window.location = '{{url('Voyage') }}'; }">
                        <span class="glyphicon glyphicon-remove"></span> Annuler</button>
        </div>
      </div>
    </div>
  </form>
</div>
@endsection