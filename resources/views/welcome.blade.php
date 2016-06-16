<!--Usuarios Invitados -->


@extends('layouts.app')

@section('content')


<html>
<head>
    <link rel="stylesheet" type="text/css" href="{{asset('plugins\bootstrap\css\bootstrap.css')}}">

<link rel="stylesheet" type="text/css" href="{{asset('css\general.css')}}">
<script type="text/javascript" src="{{asset('plugins\jquery\js\jquery-2.2.3.js')}}"></script>
<script type="text/javascript" src="{{asset('plugins\bootstrap\js\bootstrap.js')}}"></script>

   <center class='principal'>

   <img src="{{asset('images/logo.png' )}}"width='60%'>
   <img src="{{asset('images/menu.png' )}}"width='60%'>
</center>

</head>
<body>
      

      @include('admin.graficas.grafica')
            

</body>
</html>

@endsection
