@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-8">
                        Buildings
                        </div>
                        <div class="col-md-offset-3 col-md-1">
                            <a href="{{ route('building.create') }}"><span class="glyphicon glyphicon-plus"></span></a>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Adresse</th>
                            <th>Opérations</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($buildings as $building)
                        <tr>
                            <td>{{ $building->name }}</td>
                            <td>{{ $building->address }}</td>
                            <td>
                                <!-- Right Side Of Navbar -->
                                <ul class="nav navbar-nav navbar-left">

                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                                options <span class="caret"></span>
                                            </a>

                                            <ul class="dropdown-menu">
                                              <li>
                                                  <a href="{{ route('building.edit', $building) }}" class="btn btn-primary">Modifier</a>
                                              </li>
                                              <li>
                                                  <a href="{{ route('building.floor.index', $building) }}" class="btn btn-success">Étages</a>
                                              </li>
                                            </ul>
                                        </li>
                                </ul>
                                {!! Form::open(['url' => '/building/'.$building->id,'onsubmit' => 'return ConfirmDelete()', 'method' => 'delete']) !!}
                                {!! Form::submit('Supprimer', ['class' => 'btn btn-danger pull-right']) !!}
                                {!! Form::close() !!}
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
