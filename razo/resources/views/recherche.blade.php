@extends('layouts.layout')
@section('content')

<div class="container">
  <form method="POST" action="{{ route('search', ['titre' => $titre]) }}">
    @csrf
    <div class="col-sm-6">
      <h1>Rechercher un voyage</h1>
    </div>
    <div class="column">
      <div class="form-group">
        <div class="col-md">
            <input type="text" name="titre" class="form-control" placeholder="titre" required >
        </div>
      </div>
      <div class="form-group">
        <div class="col-md-6 col-md-offset">
          <input type="submit" value="Rechercher" class="btn btn-default btn-primary" />
          <button type="button" class="btn btn-default btn-primary" onclick="{ window.location = '{{url('/') }}'; }">
                <span class="glyphicon glyphicon-remove"></span> Annuler</button>
        </div>
      </div>
    </div>
  </form>
</div>
@endsection