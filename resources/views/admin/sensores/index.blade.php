@extends('admin.template.main')

@section('title','Lista de Usuarios')


@section('contenido')


		<table class="table table-striped">
	<center><h1>Lista de Sensores Activos</h1></center>
	<thead>
	
	<th>Nombre Del Sensor</th>
	<th>Status del Sensor</th>
	
	
	</thead>
	<tbody>
	@foreach($op as  $op)
	<tr>
		
		<td>{{$op->sen_NombreSensor}}</td>
		<td>
			@if($op->sen_Status==5)
		<span class="label label-primary">Activo</span>
		@else
			<span class="label label-info">Inactivo</span>
		@endif
		 
		</td>
		

		<td>
	

	</td>
	
	@endforeach

	</tbody>

</table>


@endsection