<div class="container">
  <form action="{{ route('voyages.update', ['voyage' => $voyage]) }}"  method="DELETE">
    @csrf
        <div class="form-group">
            <div class="col-md-6 col-md-offset">
                <input type="submit" value="Mettre à jour" class="btn btn-default btn-primary" />
                <button type="button" class="btn btn-default btn-primary" onclick="{ window.location = '{{url('Voyage') }}'; }">
                <span class="glyphicon glyphicon-remove"></span> Annuler</button>
            </div>
        </div>
  </form>
</div>
@endsection