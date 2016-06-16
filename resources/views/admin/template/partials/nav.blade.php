<STYLE TYPE="text/css">
img{

  width:35px;
}


</STYLE>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><img src="{{asset('images/logos.png' )}}"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="{{ url('/home') }}">Regresar al Panel de Inicio<span class="sr-only">(current)</span></a></li>
        <li><a href="{{route('admin.users.index') }}">Usuarios</a></li>
        <li><a href="{{route('admin.divices.index') }}">Dispositivos</a></li>
        <li><a href="{{route('admin.sensores.index') }}">Sensores</a></li>
        <li><a href="{{route('admin.datos.index') }}">Datos capturados</a></li>
        <li><a href="{{route('admin.graficas.index') }}">Graficas </a></li>
       
       
     
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>