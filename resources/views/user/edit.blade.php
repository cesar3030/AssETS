@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
		    {!! Form::model($user, ['route' => ['user.update', $user], 'class' => 'form-horizontal', 'method' => 'PUT']) !!}
			<fieldset>
			<legend>Configuration utilisateur</legend>
			<div class="form-group">
	  			{!! Form::label('building', 'Batiments', ['class' => 'col-md-4 control-label']) !!} 
		  		<div class="col-md-4">
				 	@foreach ($buildings as $building)
				 	@php ($checked = in_array($building->id, $checkeds) ? true : false)
					<div class="checkbox">
					    <label>
					      {{ Form::checkbox('checkbox[]', $building->id, $checked) }} {{ $building->name }}
					    </label>
					</div>
					@endforeach
			  	</div>
			</div>
			{!! Form::submit('Modifier', ['class' => 'btn btn-info']) !!}
			</fieldset>
			{!! Form::close() !!}
		</div>
	</div>
</div>
@endsection