<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Nombre Fotografo</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="/css/web2.css">



</head>
<body>
	<div class="row">
		<div class="col-sm-3">
			<div class="container-fluid">
				<h2>Fotógrafo Mantenedor</h2>

				<hr>				
			</div>
		</div>
	</div>

	<div class="row">
	<div class="col-sm-3">
		<div class="row">
			<div class="text-center">
				<h4 class="">Bienvenido name</h4>
				<img src="bandmember.jpg" alt="">
				<br>
				<span><button class="btn btn-danger navbar-btn"><i class="fa fa-2x fa-power-off" aria-hidden="true"></i></button> Cerrar Sesión</span>
			</div>
		</div>
				
		<div class="row">
			<div class="container-fluid">
				<ul class="nav nav-pills nav-stacked">
					<hr>
					<li class=""><a href="#">Correo</a></li>
					<li><a href="#">Ir a Página Web</a></li>
					<hr>
					<li><a href="#">Modificar Informacion Personal</a></li>
					<li><a href="mantenedor/create/album">Crear Album</a></li>
					<li class="dropdown">
				        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Album
				        <span class="caret"></span></a>
				        <ul class="dropdown-menu">
				          <li><a href="#">Page 1-1</a></li>
				          <li><a href="#">Page 1-2</a></li>
				          <li><a href="#">Page 1-3</a></li>
				        </ul>
				    </li>
				</ul><br>
			</div>
		</div>
	</div>

    <div class="col-sm-8 container-fluid">
		<div class="jumbotron">	
			<br>	    
	    	<div class="row">		                    
			    <br>
			    <div class="row">
			        <div class=" ">
			            <p>Estamos Trabajando en:</p>
			            <div class="container text-center">            
							@yield('nombreAlbum') <!-- welcome.blade !-->
			                <hr>                
			            </div>
			        </div>
			    </div>
			    <div class="row">
					<button type="button" class="btn btn-lg btn-success">AGREGAR FOTOS</button>
				</div>

			</div>
		</div>
	</div>



	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	
	<script src="/js/web.js" type="text/javascript" charset="utf-8" asyc defer></script>
</body>
</html>