@extends('admin.template.main')
@section('title', 'Tecnicos')
@section('titlePanel', 'Listado de tecnicos')
@section('content')
	
	<table class="table table-striped">
		<a href="{{ route('tecnicos.create')}}" class="btn btn-primary">Nuevo Tecnico</a>
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
			@foreach($tecnicos as $tecnico)
				<tr>
					<td>{{ $tecnico->id }}</td>
					<td>{{ $tecnico->name }}</td>
					<td>{{ $tecnico->tel }}</td>
					<td>{{ $tecnico->wp }}</td>
					<td>{{ $tecnico->email }}</td>
					<td>
						<a href="{{ route('tecnicos.edit', $tecnico->id) }}" class="btn btn-warning"> <span class="glyphicon glyphicon-align-center"></span> </a>
						<a href="{{route('admin.tecnicos.destroy', $tecnico->id)}}" onClick= "return confirm('¿Seguro que deseas eliminar el Tecnico?')" class="btn btn-danger"> <span class="glyphicon glyphicon-wrench"></span> </a> 

					</td>

				</tr>
			@endforeach
		</tbody>

	</table>
	{!! $tecnicos->render()!!}	
@endsection