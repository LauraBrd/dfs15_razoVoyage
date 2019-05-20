@extends('layouts.admin')
@section('content')

<div>
    <br> <br>
    <br> <br>
    <div class="container">
        <div class="blanc">
            <h1>Ajouter un voyage</h1>
        </div>
        
        <div class="well">
            {!! Form::open(['url' => 'ajoutReservation', 'file' => true]) !!}
            
                <div class="form-group">
                    <input type='hidden' name='idCli' value="{{$uneReservation->idCli or ''}}"/>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label">Nombre de personnes : </label>
                    <div class="col-md-3">
                        <input type="number" name="nbpers" value="{{$mesReservations->nbpers or "" }}"  class="form-control"  required >
                    </div>
                </div>
                <br/><br/>

                <div class="form-group">
                    <label class="col-md-3 control-label">Durée : </label>
                    <div class="col-md-3">
                        <input type="text" name="duree" value="{{$mesReservations->duree or ""}}"  class="form-control"  required>
                    </div>
                </div>
                <br/><br/>



                <div class="form-group">
                    <label class="col-md-3 control-label">Date de début : </label>
                    <div class="col-md-3">
                        <input type="text" name="datedebut" value="aaaa-mm-jj" class="form-control" placeholder="AAAA-MM-JJ" required autofocus>
                    </div>
                </div>
                <br/><br/>


                <div class="form-group">
                    <label class="col-md-3 control-label">Date de fin : </label>
                    <div class="col-md-3">
                        <input type="text" name="datefin" value="" placeholder="aaaa-mm-jj" class="form-control" placeholder="AAAA-MM-JJ" required autofocus>
                    </div>
                </div>
                <br/><br/>

               <div class="form-group">
                    <label class="col-md-3 control-label">Type de voyage: </label>
                    <div class="col-md-3">
                        <select class="form-control" name="cbTypeVoyage" required>
                            <option value=0>Planète</option>
                            <option value=1>Station</option>
                        </select>
                    </div>
                </div>
                <br><br>
                
                

                
                <div class="form-group">
                    <div class="col-md-6 col-md-offset-3">
                        <button type="submit" class="btn btn-default btn-primary"><span class="glyphicon glyphicon-ok">Valider</span></button>
                        &nbsp;
                        
                        <button type="button" class="btn btn-default btn-primary" onclick="{ window.location = '{{url('/') }}'; }">
                            <span class="glyphicon glyphicon-remove"></span> Annuler</button>
                    </div>
                </div>

        </div>
</div>
