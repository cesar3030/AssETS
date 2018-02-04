@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
			{!! Form::model($floor, ['route' => ['building.floor.update', $building, $floor], 'class' => 'form-horizontal', 'method' => 'PUT']) !!}
				<fieldset>

				<!-- Form Name -->
				<legend>Modification d'un étage</legend>

				<!-- Text input-->
				<div class="form-group">
		  			{!! Form::label('name', 'Nom', ['class' => 'col-md-4 control-label']) !!} 
			  		<div class="col-md-4">
				 	{!! Form::text('name', null, ['class' => 'form-control input-md']) !!}
				  	</div>
				</div>
				{!! Form::submit('Modifier', ['class' => 'btn btn-info']) !!}
				</fieldset>
			{!! Form::close() !!}
		</div>
	</div>
</div>
@endsection