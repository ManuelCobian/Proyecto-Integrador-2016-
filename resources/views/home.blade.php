<!--Usuarios ya logiados -->


@extends('layouts.logeado')

@section('content')
<style type="text/css">
*{

    background:url('{{asset('images/menu.png' )}}'); 
    background-repeat:no-repeat;
    background-position:center; 
    background-attachment:fixed;
}
.izquierda{

  float:right;
  margin-top:30px;
}

</style>
<script type="text/javascript" src="{{asset('plugins\jquery\js\jquery-2.2.3.js')}}"></script>
<script type="text/javascript" src="{{asset('plugins\bootstrap\js\bootstrap.js')}}"></script>
<link rel="stylesheet" type="text/css" href="{{asset('plugins\bootstrap\css\bootstrap.css')}}">

<div class="container">
  <div class="row izquierda">

 <img src="{{asset('images/logos.png' )}}" width='150px'>


  </div>
  <br>
  <br>
    <div class="row">
             <center>
       <img src="{{asset('images/logo.png' )}}"width='45%'> 
         <h2>Bienvenido {{ Auth::user()->name }} </h2>
       <br><br>
   </center>

   
      
           <br>
       
     
         </div>
</div>
  
@endsection


