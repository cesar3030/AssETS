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
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-8">
                        Utilisateurs
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
                            <th>email</th>
                            <th>Opérations</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->email}}</td>
                            <td>
                                {!! Form::open(['url' => 'user'.$user->id,'onsubmit' => 'return confirmDelete()', 'method' => 'delete']) !!}
                                {!! Form::submit('Supprimer', ['class' => 'btn btn-danger pull-right']) !!}
                                {!! Form::close() !!}
                                <a href="{{ route('user.edit', $user) }}" class="btn btn-primary">Modifier</a>
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
