@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
			{!! Form::model($item, ['route' => ['building.floor.room.item.update', $building, $floor, $room, $item], 'class' => 'form-horizontal', 'method' => 'PUT']) !!}
			<fieldset>

			<!-- Form Name -->
			<legend>Modification d'un item</legend>

			<div class="form-group">
				{!! Form::label('equipment', 'Équipment', ['class' => 'col-md-4 control-label']) !!} 
		  		<div class="col-md-4">
	  				{!! Form::select('equipment_id', $equipments) !!}
  				</div>
			</div>
			
			<div class="form-group">
	  			{!! Form::label('quantity', 'Quantité', ['class' => 'col-md-4 control-label']) !!} 
		  		<div class="col-md-4">
			 	{!! Form::number('quantity', null, ['class' => 'form-control input-md', 'required' => 'required']) !!}
			  	</div>
			</div>
			{!! Form::submit('Modifier', ['class' => 'btn btn-info']) !!}
			</fieldset>
			{!! Form::close() !!}
		</div>
	</div>
</div>
@endsection