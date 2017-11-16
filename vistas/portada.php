<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link href="css/hover.css" rel="stylesheet" media="all">
		
		<link rel="stylesheet" type="text/css" href="css/estilo.css" media="screen" />
		
		
		<link rel="stylesheet" href="css/animate.css">
		<script>
			//Rellena el div de la ventana modal con el libro.php
			
			$('.im').on('click',function(){
				$('.modal-body').load('libro.php',function(){
					$('#ventana2').modal({show:true});
				});
			});
			
			  
			/*function cambiarcont(pagina) {
			$(“#contenido”).load(pagina);
			}*/
			//$('.ejemplo').load('libro.php');//actualizas el div
			//}, 1000 );
			
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
									<h2 class="modal-title">Biblioteca I.E.S CELIA VIÑAS</h2>
								</div>
								<div class="modal-body fondo">
									<?php

										$conexdb = new mysqli('localhost','root','','biblio');
											if (!$conexdb) {
												die('Error al conectarse a mysql: ' . mysql_error());
											}

										$consult=$conexdb->query("Select id_libro from libros");
													
										$Arrayportada = $consult->fetch_all(MYSQLI_ASSOC);
											echo "<div class='estanteria'>";		
												echo "<table>";	
													echo "<tr>";											
											foreach ($Arrayportada as $ides){
												//Sacamos las portadas de los libros
												
													echo "<td class='columna'>";
														echo "<a href='index.php?accion=showLibro&intro=$ides[id_libro]' data-toggle='modal' data-target='#ventana2' ><img id='im' class='efectBook'src='imgs/books/$ides[id_libro]/0.jpg' height='250px' width='200px'></a>";
													echo "</td>";	
												
											}
													echo "</tr>";
												echo "</table>";
											echo "</div>";
									?>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
								</div>			
							</div>
									
						</div>
						
					</div>
				</div>
			</div>
			<!-- Ventana emergente LIBRO -->
			<div class="modal fade" id="ventana2" role="dialog">
				<div class="modal-dialog modal-lg" >
					<!-- Modal content background-color:transparent;  -->
						<div class="modal-content" style=" width: 135%;margin-left: -165px; -webkit-box-shadow: 0 0px 0px rgba(0,0,0,.5);">
							<!-- Aqui vendria el titulo del LIBRO -->
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">×</button>
								<h4 class="modal-title">Titulo Libro</h4>
							</div>
							<!-- Cuerpo de modal carga el libro.php -->
							<div class="modal-body">
										
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
							</div>
						</div>
				</div>
			</div>
			<a href="#ventana1" class="btn btn-primary btn-lg" data-toggle="modal">Ver libros en nuestra biblioteca</a>			
			<a href="index.php?accion=showIntAdmin" class="btn btn-primary btn-lg" data-toggle="modal">Administrar</a>		
		</div>

	<script src="js/jquery.js"></script>	
	<script src="js/bootstrap.min.js"></script>	
	</body>
</html>
