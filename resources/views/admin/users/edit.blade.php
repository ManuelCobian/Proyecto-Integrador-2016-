@extends('admin.template.main')


@section('title','Editar  usuario'.$users->name)


@section('contenido')
<center>
<span class='btn btn-info'>Editando Usuario {{$users->name}}</span>
</center>



{!!  Form::open(['route'=>['admin.users.update',$users->id], 'method' => 'PUT','onsubmit'=>'return validar();']) !!}

   	
   	<div class="form-group">


	 {!!Form::label('nombre')!!}
  

  	{!!Form::text('name',$users->name,['class'=>'form-control nombre','placeholder' =>'Inserte nombre','requerid'])!!}
	 </div>

	 <div class="form-group">

	 	{!!Form::label('correo electronico')!!}
 	 
 	 {!!Form::email('email',$users->email,['class'=>'form-control email','placeholder' =>'example@gmail.com','requerid'])!!}

	 </div>

	 <div class="form-group">


	{!!Form::label('Password')!!}
 	 
  {!!Form::password('password',['class'=>'form-control password','placeholder' =>'password','requerid'])!!}


	 </div>

	
	
	 <div class="form-group">
	 	<input type='submit' value='Editar' onclick='validar();' class='btn btn-info' >
	 	

	 </div>



{!! Form::close() !!}
@endsection