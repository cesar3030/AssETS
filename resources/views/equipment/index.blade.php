@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-8">
                        Inventaire des équipements
                        </div>
                        <div class="col-md-offset-3 col-md-1">
                            <a class="btn btn-primary" href="{{ route('equipment.create') }}"><span class="glyphicon glyphicon-plus"></span></a>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Compagnie</th>
                            <th>Prix</th>
                            <th>Cathégorie</th>
                            <th>Opérations</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($equipments as $equipment)
                        <tr>
                            <td>{{ $equipment->name }}</td>
                            <td>{{ $equipment->company }}</td>
                            <td>{{ $equipment->price }}</td>
                            <td>{{ $equipment->category }}</td>
                            <td>
                                {!! Form::open(['url' => 'equipment/'.$equipment->id, 'method' => 'delete']) !!}
                                {!! Form::submit('Supprimer', ['class' => 'btn btn-danger pull-right']) !!}
                                {!! Form::close() !!}
                                <a href="{{ route('equipment.edit', $equipment) }}" class="btn btn-primary">Modifier</a>
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