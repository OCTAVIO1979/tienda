<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>@yield('title', 'Default')| Panel de administracion</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans|Open+Sans+Condensed:300" rel="stylesheet"> 
	


</head>
<body>

	@include('admin.partials.nav')


	<section>
		<div class="container">
			
				<div class="panel panel-primary">
		  		    <div class="panel-heading">@yield('titlePanel', 'Titulo')</div>
		 			<div class="panel-body">

		 			@include('flash::message')
		    			@yield('content')
		  			</div>
				</div>
			
		
		</div>
	
		
	</section>

	
	@include('admin.partials.footer')

	<script src=" {{asset('js/jquery.js')}}"></script>

	<script src=" {{asset('js/bootstrap.js')}}"></script>
</body>
</html>