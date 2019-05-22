@extends('layouts.layout')
@section('content')


<div>
    <div class="container">
        <div class="title">
            <h1>Liste des voyages</h1>
        </div><br>
        <button type="button" class="btn btn-default btn-primary">
        <a href="{{ route('voyages.create') }}"><span class="glyphicon glyphicon-remove"></span></a>Ajouter un voyage</button>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Image</th>
                    <th>Destination</th>
                    <th>Description</th>
                    <th>Prix</th>
                    <th>Titre </th>
                    <th>Détail</th>
                    <th>Action</th>
                </tr>
            </thead>
            @foreach($voyages as $voyage)
                <tr>
                    <td> {{ $voyage->id }}</td>
                    <td> {{ $voyage->image }}</td>
                    <td> {{ $voyage->destination }}</td>
                    <td> {{ $voyage->description }} </td>
                    <td> {{ $voyage->prix }} € </td>
                    <td>{{ $voyage->titre }}</td>
                    <td style="text-align: center;">
                        <a href="{{ route('voyages.show', ['id' => $voyage->id]) }}">
                            <span class="glyphicon glyphicon-pencil" data-toggle="tooltip" data-placement="top" title="Détail"></span>
                        </a>
                    </td>
                    <td>
                        <a href="{{ route('voyages.edit', ['voyage' => $voyage]) }}" class="glyphicon glyphicon-pencil" title="Modifier" data-toggle="tooltip"></a>
                        <form method="POST" action="{{ route('voyages.destroy', ['voyage' => $voyage]) }}" class="glyphicon glyphicon-trash" title="Supprimer" data-toggle="tooltip">
                        @csrf
                        @method('DELETE')
                            <input type="submit" value=""/>
                            
                        </form>
                    </td>
                </tr>
            @endforeach
            <br><br>
        </table>
    </div>
</div>
@endsection