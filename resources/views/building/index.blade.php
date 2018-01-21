@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Buildings
                    <div class="push-right">
                        <a href="/building/create">Nouveau</a>
                    </div>
                </div>
                <div class="panel-body">
                    <table>
                        <tr>
                            <th>Nom</th>
                            <th>Addresse</th>
                        </tr>
                        @foreach ($buildings as $building)
                        <tr>
                            <th>{{ $building->name }}</th>
                            <th>{{ $building->address }}</th>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection