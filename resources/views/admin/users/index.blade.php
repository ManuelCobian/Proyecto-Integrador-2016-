@extends('admin.template.main')

@section('title','Lista de Usuarios')


@section('contenido')

<script type="text/javascript">
alert('Bienvenido');
</script>

<a href="{{route('admin.users.create') }}" class="btn btn-info">Registrar Nuevo usuario</a><br>
		<table class="table table-striped">
	<center><h1>Lista de Usuarios</h1></center>
	<thead>
	<th>ID</th>
	<th>Nombre</th>
	<th>Correo</th>
	<th>Tipo</th>
	<th>Accion</th>
	
	</thead>
	<tbody>
	@foreach($users as  $user)
	<tr>
		<td>{{$user->id}}</td>
		<td>{{$user->name}}</td>
		<td>{{$user->email}}</td>
		<td>
			@if($user->type=='admin')
			<span class="label label-danger">{{$user->type}}</span>

			@else
			<span class="label label-primary">{{$user->type}}</span>
			@endif

		</td>

		<td>
	<a href="{{route('admin.users.edit',$user->id) }}" class="btn btn-danger"><span class="glyphicon glyphicon-pencil"></span></a> <!--edita usuarios-->
		
<a href="{{route('admin.users.destroy',$user->id) }}"
onclick="return confirm('¿desea eliminar');" class="btn btn-success"><span  class="glyphicon glyphicon-trash"></span></a></td>
	<!--elimina usuario-->										


	</tr>
	
	@endforeach

	</tbody>

</table>
{!!  $users->render()!!}

@endsection
