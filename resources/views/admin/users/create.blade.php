@extends('admin.template.main')


@section('title','crear usuario')


@section('contenido')
<script type="text/javascript" src="{{asset('js/validar.js')}}"></script>

{!! Form::open(['route'=>'admin.users.store','method'=> 'POST','onsubmit'=>'return validar();']) !!}


   	
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
 	 
  {!!Form::password('password',['class'=>'form-control password','placeholder' =>'Mayor a 6 digitos','requerid'])!!}


	 </div>

	
	
	 <div class="form-group">
	 	<input type='submit' value='Registrar' onclick='validar();' class='btn btn-info' >
	 	

	 </div>



{!! Form::close() !!}
@endsection