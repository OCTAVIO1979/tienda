@extends('admin.template.main')
@section('title', 'Crear Usuario')
@section('titlePanel', 'Crear Usuario')
@section('content')
	
		{!! Form::open(['route' => 'users.store', 'method' => 'POST']) !!}
			
			<div class="row">
				
				<div class="form-group col-xs-6">
				{!! Form::label('name', 'Nombre:')!!}
				{!! Form::text('name', null, ['class' => 'form-control', 'required', 'placeholder' => 'Nombre y apellido'])!!}

				</div>

				<div class="form-group col-xs-3">
					{!! Form::label('tel', 'Telefono:')!!}
					{!! Form::text('tel', null, ['class' => 'form-control', 'required', 'placeholder' => 'Numero de Telefono'])!!}

				</div>

				<div class="form-group col-xs-3">
					{!! Form::label('wp', 'Whatsapp:')!!}
					{!! Form::text('wp', "", ['class' => 'form-control', 'required', 'placeholder' => 'Numero Whatsapp'])!!}

				</div>
				

			</div>
			<div class="row">
				<div class="form-group col-xs-12">
				{!! Form::label('email', 'Correo Electronico:')!!}
				{!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'ejemplo@email.com', 'required'])!!}

				</div>
		
			</div>

			<div class="row">
				<div class="form-group col-xs-6">
				{!! Form::label('password', 'Escriba una contraseña:')!!}
				{!! Form::password('password', ['class' => 'form-control', 'placeholder' => '********', 'required'])!!}

				</div>

				
		
		
			</div>


			<hr>
					

			<div class="row">
				<div class="form-group col-xs-12">
					{!! Form::submit('Crear Usuario', ['class' => 'btn btn-primary']) !!}
				</div>
	
			</div>
			

		{!!Form::close()!!}	
	
	
@endsection