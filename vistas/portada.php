<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		
		
		<link rel="stylesheet" type="text/css" href="css/estilo.css" media="screen" />
		
		<script>
			//Rellena el div de la ventana modal con el libro.php
			
			
			
			$('.im').on('click',function(){
				$('.modal-body').load('libro.php',function(){
					$('#ventana2').modal({show:true});
				});
			});
			
		</script>
		
	</head>
	<body>
		<div class="container ">
			<div class="row">
				<div class="col-md-5" style="margin-top: 10%">
					<div class="modal fade" id="ventana1">
						<div class="modal-dialog modal-lg">
							<div class="modal-content">
								<div class="modal-header">
									<h2 class="modal-title">Biblioteca</h2>
									<!-- Login desplegable -->
									<div class="dropdown" style="margin-left:85%">
									  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Iniciar Sesion
									  <span class="caret"></span></button>
									  <ul class="dropdown-menu">
										<div class="form-group">
										  <label for="usr">Name:</label>
										  <input type="text" class="form-control" id="usr">
										</div>
										<div class="form-group">
										  <label for="pwd">Password:</label>
										  <input type="password" class="form-control" id="pwd">
										</div>
									  </ul>
									</div>
								</div>
								<div class="modal-body">
									<div role="tabpanel" >
										<ul class="nav nav-tabs" role="tablist">
											<li role="presentation" class="active"><a href="#seccion1" aria-controls="seccion1" data-toggle="tab" role="tab"/>Seccion 1</a></li>
										</ul>
										<div class="tab-content">
											<div role="tabpanel" class="tab-pane active" id="seccion1">
												<?php

													$conexdb = new mysqli('localhost','root','','biblio');
													if (!$conexdb) {
														die('Error al conectarse a mysql: ' . mysql_error());
													}

													$consult=$conexdb->query("Select id_libro from libros");
													
													$Arrayportada = $consult->fetch_all(MYSQLI_ASSOC);
							
													//$prueba = $Arrayportada;
													
													foreach ($Arrayportada as $ides){
														echo "<br>";
														//forzamos portada de 1
														echo "<a href='index.php?accion=showLibro&intro=$ides[id_libro]' data-toggle='modal' data-target='#ventana2'><img id='im' src='imgs/books/$ides[id_libro]/0.jpg' height='200px' width='200px'></a></br>";
														echo "<br>";
													}
												?>
											</div>
										</div>
									</div>
								</div>
								 <div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
								 </div>
							</div>
						</div>
					</div>
						<!-- Ventana emergente LIBRO -->
						
						<div class="modal fade" id="ventana2" role="dialog">
							<div class="modal-dialog modal-lg" >
								<!-- Modal content-->
								<div class="modal-content" style=" width: 125%;margin-left: -110px; background-color:transparent;-webkit-box-shadow: 0 0px 0px rgba(0,0,0,.5);">
									<!-- Aqui vendria el titulo del LIBRO -->
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">×</button>
										<h4 class="modal-title">Titulo Libro</h4>
									</div>
									<!-- -->
									<div class="modal-body ejemplo">
										
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
									</div>
								</div>
							</div>
						</div>
						
						
					<a href="#ventana1" class="btn btn-primary btn-lg" data-toggle="modal">Haga click..</a>
					<a href="index.php?accion=showIntAdmin" class="btn btn-primary btn-lg" data-toggle="modal">Administrar</a>
					
				</div>
			</div>
		</div>
	<script src="js/jquery.js"></script>	
	<script src="js/bootstrap.min.js"></script>	
	</body>
</html>
