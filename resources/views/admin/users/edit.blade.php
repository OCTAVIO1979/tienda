@extends('admin.template.main')
@section('title', 'Editar Usuario')
@section('titlePanel', 'Editar Usuario ' . $user->name)
@section('content')
	
		{!! Form::open(['route' => ['users.update', $user], 'method' => 'PUT']) !!}
			
			<div class="row">
				
				<div class="form-group col-xs-6">
				{!! Form::label('name', 'Nombre:')!!}
				{!! Form::text('name', $user->name, ['class' => 'form-control', 'required', 'placeholder' => 'Nombre y apellido'])!!}

				</div>

				<div class="form-group col-xs-3">
					{!! Form::label('tel', 'Telefono:')!!}
					{!! Form::text('tel', $user->tel, ['class' => 'form-control', 'required', 'placeholder' => 'Numero de Telefono'])!!}

				</div>

				<div class="form-group col-xs-3">
					{!! Form::label('wp', 'Whatsapp:')!!}
					{!! Form::text('wp', $user->wp, ['class' => 'form-control', 'required', 'placeholder' => 'Numero Whatsapp'])!!}

				</div>
				

			</div>
			<div class="row">
				<div class="form-group col-xs-12">
				{!! Form::label('email', 'Correo Electronico:')!!}
				{!! Form::email('email', $user->email, ['class' => 'form-control', 'placeholder' => 'ejemplo@email.com', 'required'])!!}

				</div>
		
			</div>

			


			<hr>
					

			<div class="row">
				<div class="form-group col-xs-12">
					{!! Form::submit('Editar Usuario', ['class' => 'btn btn-primary']) !!}
				</div>
	
			</div>
			

		{!!Form::close()!!}	
	
	
@endsection