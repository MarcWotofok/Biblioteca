<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/estilo.css" media="screen" />
		<link rel="stylesheet" href="css/font-awesome-4.7.0/css/font-awesome.min.css">
		<script type="text/javascript" src="extras/jquery.min.1.7.js"></script>
		<script type="text/javascript" src="extras/jquery-ui-1.8.20.custom.min.js"></script>
		<script type="text/javascript" src="extras/jquery.mousewheel.min.js"></script>
		<script type="text/javascript" src="extras/modernizr.2.5.3.min.js"></script>
		<script type="text/javascript" src="lib/hash.js"></script>
		<script  type="text/javascript" src="js/jquery-3.2.1.js"></script>
		<script type="text/javascript" src="js/turn.js"></script>
		
		<script type="text/javascript">
			$(document).ready(function(){
				
				$("#flipbook").turn({
					width: 1000,
					height: 650,
					elevation: 50,
					autoCenter: true,
					duration:2500
				
				});
			//abrir libro
				setTimeout(function() {
					$('#flipbook').turn('page', 2);
					},1000);
				});
			//agrega la funcion para la accion del link pagina previa
				 $('.prev_page').click(function(){
				  $('#flipbook').turn('previous');
				 });
				 
			//agrega la funcion para la accion del link pagina siguiente
				 $('.next_page').click(function(){
				  $('#flipbook').turn('next');
				 });
				 
			//capturar teclas derecha e izquierda
			
			//zoom
				$('#flipbook').turn('zoom', 0.5, 0);
				
				$('#flipbook').bind('zooming', function(event,  newZoomValue, currentZoomValue) {
				  alert('New zoom: '+currentZoomValue);
				});
				
			//desaperecer libro
				/*setTimeout(function() {
				$('#flipbook').fadeOut(1500);
				},3000);*/
				
		</script>
	</head>
	<body>
		<div id="bloque" class="animate">
		
			<button type="button" class="close cerrar" data-dismiss="modal">×</button>
			<a href="#" class="next_page a"><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
			<a href="#" class="prev_page"><i class="fa fa-chevron-left" aria-hidden="true"></i></a>
			<div id="flipbook" class="animated ">
				
				<?php
					$num_pag = $datos["num_pags"];
					$libro = $datos["libro"];

					for($i = 0;$i<$num_pag;$i++){
						if((($i==0 || $i==1) || $i==$num_pag-1) || $i==$num_pag-2)
							echo"<div class=\"hard\"> <img src=\"imgs/books/$libro/$i.jpg\" /> </div>";
						else
							echo "<div class=\"pag\"> <img src=\"imgs/books/$libro/$i.jpg\" /> </div>";
					}
				?>
				
			</div>
			
		</div>
	</body>
</html>