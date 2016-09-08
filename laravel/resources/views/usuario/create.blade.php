@extends('layouts.admin')

@section('content')
	{!! Form::open(['route'=>'usuario.store', 'method'=>'POST']) !!}
		<div class="form-group">
			{!! Form::label('Nombre:') !!}
			{!! Form::text('name',null,['class'=>'form-control', 'placeholder'=>'Ingresa el nombre de usuario']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('Correo:') !!}
			{!! Form::text('email',null,['class'=>'form-control', 'placeholder'=>'Ingresa tu correo electrónico']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('Password:') !!}
			{!! Form::password('password',['class'=>'form-control', 'placeholder'=>'Ingresa la contraseña']) !!}
		</div>
		{!! Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
	{!! Form::close() !!}
	<!--
	<form>
		<div class="form-group">
			<label for="">Nombre</label>
			<input type="text" class="form-control">
		</div>
		<div class="form-group">
			<label for="">Correo</label>
			<input type="text" class="form-control">
		</div>
		<div class="form-group">
			<label for="">Contraseña</label>
			<input type="password" class="form-control">
		</div>
		<button class="btn btn-primary">Registrar</button>
	</form><-->
@stop