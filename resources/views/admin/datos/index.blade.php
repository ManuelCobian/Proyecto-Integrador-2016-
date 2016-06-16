@extends('admin.template.main')

@section('title','Lista de Datos Registrados')


@section('contenido')

<table class="table table-striped">
	<center><h1>Lista de Datos Capturados</h1></center>
	<thead>
	<th>ID</th>
	<th>Nombre Del dispositivo</th>
	<th>Sensores</th>
	<th>Dato Capturado</th>
	<th>Fecha</th>
	
	</thead>
	<tbody>
	@foreach($op as  $op)
	<tr>
		<td>{{$op->dat_id}}</td>
		<td>@if($op->dat_id_Dispositivo==2)
		<span class="label label-primary">Galileo</span>
		
		@endif</td>
		<td>
			@if($op->dat_id_sensor==1)
		<span class="label label-danger">Temperatura</span>
		
		@endif

		@if($op->dat_id_sensor==2)
		<span class="label label-info">Humedad</span>
		
		@endif

		@if($op->dat_id_sensor==3)
		<span class="label label-success">Calidad del aire</span>
		
		@endif
		 
		</td>
		<td>
			@if($op->dat_id_sensor==1)
			{{$op->dat_dc_dato}} º
			@endif

			@if($op->dat_id_sensor==2)
			{{$op->dat_dc_dato}} %
			@endif

			@if($op->dat_id_sensor==3)
			{{$op->dat_dc_dato}} %
			@endif
			
		</td>

		<td>
		{{$op->fecha}}

	</td>
	
	@endforeach

	</tbody>

</table>


@endsection