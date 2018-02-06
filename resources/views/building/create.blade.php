@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
			{!! Form::open(['route' => 'building.store', 'class' => 'form-horizontal']) !!}
				<fieldset>

				<!-- Form Name -->
				<legend>Nouveau batiment</legend>

				<!-- Text input-->
				<div class="form-group">
		  			{!! Form::label('name', 'Nom', ['class' => 'col-md-4 control-label']) !!} 
			  		<div class="col-md-4">
				 	{!! Form::text('name', null, ['class' => 'form-control input-md', 'required' => 'required']) !!}
				  	</div>
				</div>
				<!-- Text input-->
				<div class="form-group">
		  			{!! Form::label('address', 'Adresse', ['class' => 'col-md-4 control-label']) !!} 
			  		<div class="col-md-4">
				 	{!! Form::text('address', null, ['class' => 'form-control input-md', 'required' => 'required']) !!}
				  	</div>
				</div>
				{!! Form::submit('Submit', ['class' => 'btn btn-info']) !!}
				</fieldset>
			{!! Form::close() !!}
		</div>
	</div>
</div>
@endsection