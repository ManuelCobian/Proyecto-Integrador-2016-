@extends('admin.template.main')


@section('title','Registrar Dispositivos')

@section('contenido')

{!! Form::open(['route'=>'admin.divices.store','method'=> 'POST']) !!}

<div class="form-group">


	 {!!Form::label('nombre')!!}
  

  	{!!Form::text('name',null,['class'=>'form-control nombre','placeholder' =>'Inserte nombre','requerid'])!!}
	 </div>

	 <div class="form-group">

	 	{!!Form::label('correo electronico')!!}
 	 
 	 {!!Form::email('email',null,['class'=>'form-control email','placeholder' =>'example@gmail.com','requerid'])!!}

	 </div>

	 <div class="form-group">


	{!!Form::label('Password')!!}
 	 
  {!!Form::password('password',['class'=>'form-control password','placeholder' =>'password','requerid'])!!}


	 </div>

	<div class="form-group">
		{!!Form::label('type','Tipo')!!}
		{!!Form::select('type',[" "=>"",'member'=>'Miembro','admin'=>'Administrador'],null,
		['class'=>'form-control'])!!}

	</div>
	
	 <div class="form-group">
	 	{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}

	 </div>



{!! Form::close() !!}
@endsection