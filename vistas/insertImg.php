<!DOCTYPE html>
<html>
	<head>
		<style type="text/css">
			.file-input {
			  visibility: hidden;
			  width: 0;
			  position: relative;
			}
			.file-input::before {
			  content: '+';
			  display: inline-block;
			  background: -webkit-linear-gradient(top, #f9f9f9, #e3e3e3);
			  border: 1px solid #999;
			  border-radius: 3px;
			  padding: 5px 8px;
			  outline: none;
			  white-space: nowrap;
			  -webkit-user-select: none;
			  cursor: pointer;
			  text-shadow: 1px 1px #fff;
			  font-weight: 700;
			  font-size: 10pt;
			  visibility: visible;
			  position: absolute;
			}
			.file-input:hover::before {
			  border-color: black;
			}
			.file-input:active::before {
			  background: -webkit-linear-gradient(top, #e3e3e3, #f9f9f9);
			}

		</style>
		
	</head>

<?php  
	
	$idlibro = $datos;
	$directorio = "imgs/books/$idlibro";
	$arrayPag = scandir($directorio);
	$num_pag = count($arrayPag)-2;

		echo "<table>";
			echo "<tr>";
				for($i = 0;$i<$num_pag;$i++){
						if($i%5==0){
							echo "</tr>";
							echo "<tr>";
						}
						echo "<td class='columna'>";
							echo "<img src='imgs/books/$idlibro/$i.jpg' height='250px' width='200px'>".
									"<form action='index.php?accion=procesarInsertImg' method='post' enctype='multipart/form-data'>".
										"<input type='hidden' name='id' value='$idlibro'>".
										"<input type='hidden' name='num_pag' value='$num_pag'>".
										"<input type='hidden' name='pagina_ant' value='".($i-1)."'>".
										"<input type='file' class='file-input' name='fichero' accept='image/*'  id='input' multiple='true' onchange='handleFiles(this.files)'/>".
										"<input type='submit'/>".
										"</form><br/>";
							echo "<button>Borrar</button>";
							echo "$i";
						echo "</td>";
					}
			echo "</tr>";
		echo "</table>";
		
			
			
			
?>