<?php  
	
	$tablaLibros = $datos["libros"];
	
		
			echo "
			
			<form action='index.php' method='get'>
			
			titulo:<input type='text' name='titulo' value='$tablaLibros[1]'><br/><br/>
			autor:<input type='text' name='autor' value='$tablaLibros[2]'><br/><br/>
			editorial:<input type='text' name='editorial' value='$tablaLibros[3]'><br/><br/>
			lugar_edicion:<input type='text' name='lugar_edicion' value='$tablaLibros[4]'><br/><br/>
			fecha_edicion:<input type='text' name='fecha_edicion' value='$tablaLibros[5]'><br/><br/>
			num_pag:<input type='text' name='num_pag' value='$tablaLibros[6]'><br/><br/>
			ISBN:<input type='text' name='ISBN' value='$tablaLibros[7]'><br/><br/>
			tipo:<input type='text' name='tipo' value='$tablaLibros[8]'><br/><br/>
			<input type='hidden' name='id_libro' value='$tablaLibros[0]'><br/><br/>
			<input type=\"hidden\" name=\"accion\" value=\"modifiedLibro\" href='index.php?accion=modifiedUser&id_libro=".$tablaLibros[0]."'>
			<input type='submit'>
			
			</form>";
		
		
			
			
			
?>