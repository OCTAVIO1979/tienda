@extends('admin.template.main')
@section('title', 'Usuarios')
@section('titlePanel', 'Lista de Usuarios')

@section('content')
	
		<table class="table table-striped">
		<a href="{{ route('users.create')}}" class="btn btn-primary">Nuevo Usuario</a>
		<hr>
		<thead>
			<tr>
			<th>Id</th>
			<th>Nombre</th>
			<th>Telefono</th>
			<th>Whatsapp</th>
			<th>Email</th>
			
		</tr>
			
		</thead>
		<tbody>
			@foreach($users as $user)
				<tr>
					<td>{{ $user->id }}</td>
					<td>{{ $user->name }}</td>
					<td>{{ $user->tel }}</td>
					<td>{{ $user->wp }}</td>
					<td>{{ $user->email }}</td>
					<td>
						<a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning"> <span class="glyphicon glyphicon-align-center"></span> </a>
						<a href="{{route('admin.users.destroy', $user->id)}}" onClick= "return confirm('¿Seguro que deseas eliminar el usuario?')" class="btn btn-danger"> <span class="glyphicon glyphicon-wrench"></span> </a> 

					</td>

				</tr>
			@endforeach
		</tbody>

	</table>
	{!! $users->render()!!}	
		
@endsection
