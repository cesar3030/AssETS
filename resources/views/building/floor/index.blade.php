@extends('layouts.app')

@section('content')
<script>
  function confirmDelete() {
  var result = confirm('Confirmer la suppression de cet élément?');

  if (result) {
          return true;
      } else {
          return false;
      }
  }
</script>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            {{ Breadcrumbs::render('floor_static', $building) }}
        </div>
    </div>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-8">
                        Étages
                        </div>
                        <div class="col-md-offset-3 col-md-1">
                            <a class="btn btn-primary" href="{{ route('building.floor.create', $building) }}"><span class="glyphicon glyphicon-plus"></span></a>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Opérations</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($floors as $floor)
                        <tr>
                            <td>{{ $floor->name }}</td>
                            <td>
                                {!! Form::open(['url' => '/building/'.$building->id.'/floor/'.$floor->id,'onsubmit' => 'return confirmDelete()', 'method' => 'delete']) !!}
                                {!! Form::submit('Supprimer', ['class' => 'btn btn-danger pull-right']) !!}
                                {!! Form::close() !!}
                                <a href="{{ route('building.floor.edit', [$building, $floor]) }}" class="btn btn-primary">Modifier</a>
                                <a href="{{ route('building.floor.room.index', [$building, $floor]) }}" class="btn btn-success">Salles</a>
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
