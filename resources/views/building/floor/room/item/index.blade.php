@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-8">
                        Salles
                        </div>
                        <div class="col-md-offset-3 col-md-1">
                            <a class="btn btn-primary" href="{{ route('building.floor.room.item.create', [$building, $floor, $room]) }}"><span class="glyphicon glyphicon-plus"></span></a>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Catégorie</th>
                            <th>Prix</th>
                            <th>Quantité</th>
                            <th>Opérations</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($items as $item)
                        <tr>
                          
                            <td>{{ $item->equipment->name }}</td>
                            <td>{{ $item->equipment->category }}</td>
                            <td>{{ $item->equipment->price }}</td>
                            <td>{{ $item->quantity }}</td>
                            <td>
                                {!! Form::open(['url' => '/building/'.$building->id.'/floor/'.$floor->id.'/room/'.$room->id.'/item/'.$item->id, 'method' => 'delete']) !!}
                                {!! Form::submit('Supprimer', ['class' => 'btn btn-danger pull-right']) !!}
                                {!! Form::close() !!}
                                <a href="{{ route('building.floor.room.item.edit', [$building, $floor, $room, $item]) }}" class="btn btn-primary">Modifier</a>
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