@extends('layouts.admin')
@section('content')

<div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2><b>Detail des voyages</b></h2></div>
                    <div class="col-sm-4">
                        <div class="search-box">
                            <i class="material-icons">&#xE8B6;</i>
                            <input type="text" class="form-control" placeholder="Search&hellip;">
                        </div>
                    </div>
                </div>
            </div>
        </div>

            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Id <i class="fa fa-sort"></i></th>
                        <th>Destination</th>
                        <th>Description <i class="fa fa-sort"></i></th>
                        <th>Prix</th>
                        <th>Titre <i class="fa fa-sort"></i></th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $voyage->id }}</td>
                        <td>{{ $voyage->destination }}</td>
                        <td>{{ $voyage->description }}</td>
                        <td>{{ $voyage->prix }} €</td>
                        <td>{{ $voyage->titre }}</td>
                        <td>
							<a href="Voyage/{idVoyage}" class="view" title="View" data-toggle="tooltip"><i class="material-icons">&#xE417;</i></a>
                            <a href="#" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                            <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
    </div>