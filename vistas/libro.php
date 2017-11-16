
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
 


		<div id="bloque" class="animate">
			<a href="#" class="next_page a"><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
			<a href="#" class="prev_page"><i class="fa fa-chevron-left" aria-hidden="true"></i></a>
			
			<div id="flipbook" class="animated ">
				
				<?php
					
					$libro = $_REQUEST["idlibro"];
					$directorio = "../imgs/books/$libro";
					$arrayPag = scandir($directorio);
					$num_pag = count($arrayPag)-2;

					for($i = 0;$i<$num_pag;$i++){
						if((($i==0 || $i==1) || $i==$num_pag-1) || $i==$num_pag-2)
							echo"<div class=\"hard\"> <img src=\"imgs/books/$libro/$i.jpg\" /> </div>";
						else
							echo "<div class=\"pag\"> <img src=\"imgs/books/$libro/$i.jpg\" /> </div>";
					}
				?>
				
			</div>
			
		</div>
