<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/estilo.css" media="screen" />
		
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
			
			
			//desaperecer libro
			/*setTimeout(function() {
					$('#flipbook').fadeOut(1500);
				},3000);*/
				
		</script>
	</head>
	<body>
		<div id="bloque" class="animate">
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