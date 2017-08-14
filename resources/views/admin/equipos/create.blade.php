@extends('admin.template.main')
@section('title', 'Equipos Reparacion ')
@section('titlePanel', 'Ingresar Equipos')
@section('content')

	{!! Form::open(['route' => 'equipos.store', 'method' => 'POST']) !!}
			
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

			<hr>


			<div class="row">
				
				<div class="form-group col-xs-6">
				{!! Form::label('modelo', 'Modelo:')!!}
				{!! Form::text('modelo', null, ['class' => 'form-control', 'required', 'placeholder' => 'Modelo del equipo'])!!}

				</div>

				<div class="form-group col-xs-3">
					{!! Form::label('imei', 'IMEI:')!!}
					{!! Form::text('imei', null, ['class' => 'form-control', 'required', 'placeholder' => 'IMEI del telefono'])!!}

				</div>

				<div class="form-group col-xs-3">
					{!! Form::label('ref', 'Referencia:')!!}
					{!! Form::text('ref', "", ['class' => 'form-control', 'required', 'placeholder' => 'Ingrese referencia si la hay'])!!}

				</div>
				

			</div>


			<div class="row">
				
				<div class="form-group col-xs-6">
				{!! Form::label('falla', 'Falla:')!!}
				{!! Form::textArea('falla', null, ['class' => 'form-control', 'required', 'placeholder' => 'Ingresa que falla esta presentando el equipos'])!!}

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

			
				
		
		
		


			<hr>
					

			<div class="row">
				<div class="form-group col-xs-12">
					{!! Form::submit('Crear Usuario', ['class' => 'btn btn-primary']) !!}
				</div>
	
			</div>
			

		{!!Form::close()!!}	
	
	






@endsection
