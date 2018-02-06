@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
			{!! Form::model($equipment, ['route' => ['equipment.update', $equipment], 'class' => 'form-horizontal', 'method' => 'PUT']) !!}
			<fieldset>

			<!-- Form Name -->
			<legend>Modification d'un équipment</legend>

			<div class="form-group">
	  			{!! Form::label('name', 'Nom du produit', ['class' => 'col-md-4 control-label']) !!} 
		  		<div class="col-md-4">
			 	{!! Form::text('name', null, ['class' => 'form-control input-md', 'required' => 'required']) !!}
			  	</div>
			</div>

			<div class="form-group">
	  			{!! Form::label('company', 'Nom de la companie', ['class' => 'col-md-4 control-label']) !!} 
		  		<div class="col-md-4">
			 	{!! Form::text('company', null, ['class' => 'form-control input-md', 'required' => 'required']) !!}
			  	</div>
			</div>

			<div class="form-group">
	  			{!! Form::label('price', 'Prix', ['class' => 'col-md-4 control-label']) !!} 
		  		<div class="col-md-4">
			 	{!! Form::number('price', null, ['class' => 'form-control input-md', 'required' => 'required']) !!}
			  	</div>
			</div>

			<div class="form-group">
	  			{!! Form::label('category', 'Cathégorie', ['class' => 'col-md-4 control-label']) !!} 
		  		<div class="col-md-4">
			 	{!! Form::select('category', $categories) !!}
			  	</div>
			</div>

			{!! Form::submit('Modifier', ['class' => 'btn btn-info']) !!}
			</fieldset>
			{!! Form::close() !!}
		</div>
	</div>
</div>
@endsection