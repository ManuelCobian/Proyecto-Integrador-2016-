<!--soy una plantilla  -->

@include('admin.template.partials.nav')
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
<title>@yield('title','default')|Panel de Administracion</title>
<link rel="stylesheet" type="text/css" href="{{asset('plugins\bootstrap\css\bootstrap.css')}}">


<script type="text/javascript" src="{{asset('plugins\jquery\js\jquery-2.2.3.js')}}"></script>
<script type="text/javascript" src="{{asset('plugins\bootstrap\js\bootstrap.js')}}"></script>


</head>

<body>
	

<section>

@yield('contenido')

</section>

			
		    	

</body>
			
</html>