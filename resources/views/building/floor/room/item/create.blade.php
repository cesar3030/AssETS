@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
			{!! Form::open(['route' => ['building.floor.room.item.store', $building, $floor, $room], 'class' => 'form-horizontal']) !!}
			<fieldset>

			<!-- Form Name -->
			<legend>Ajouter un nouveau item</legend>

			<!-- Text input-->
			<div class="form-group">
	  			{!! Form::select('Equipements', $equipments ) !!}
			</div>

			<div class="form-group">
	  			{!! Form::label('quantity', 'Quantité', ['class' => 'col-md-4 control-label']) !!} 
		  		<div class="col-md-4">
			 	{!! Form::text('quantity', null, ['class' => 'form-control input-md']) !!}
			  	</div>
			</div>
			{!! Form::submit('Ajouter', ['class' => 'btn btn-info']) !!}
			</fieldset>
			{!! Form::close() !!}
		</div>
	</div>
</div>
@endsection