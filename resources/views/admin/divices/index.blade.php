@extends('admin.template.main')

@section('title','Lista de Usuarios')


@section('contenido')


		<table class="table table-striped">
	<center><h1>Lista de Dispositivos Activos</h1></center>
	<thead>
	<th>ID</th>
	<th>Nombre Del dispositivo</th>
	<th>Status del dispositivo</th>
	<th>Ubicacion del dispositivo</th>
	<th>Accion</th>
	
	</thead>
	<tbody>
	@foreach($op as  $op)
	<tr>
		<td>{{$op->id}}</td>
		<td>{{$op->NombreDispositivo}}</td>
		<td>
			@if($op->Status==5)
		<span class="label label-primary">Activo</span>
		@else
			<span class="label label-info">Inactivo</span>
		@endif
		 
		</td>
		<td>@if($op->dis_loc==1)
			<span class="label label-info">Colima</span>
			@else
			<span class="label label-info">Fuera de Colima</span>
			@endif
		</td>

		<td>
	

	</td>
	
	@endforeach

	</tbody>

</table>


@endsection