
<?php

    include("vista.php");
	include("libro.php");
	
	
    $vista = new Vista();
	$libro = new Libro();
	
    if (isset($_REQUEST["accion"]))
        $accion = $_REQUEST["accion"];
    else
        $accion = "showPortada";  // Acción por defecto

    switch ($accion) {
        case "showPortada":
            $vista->show("portada");
            break;
		case "showAdmin":
		
			break;
		
		
		case "showIntAdmin":
			$datos["tabla"] = $libro->get_info();
			$vista->show("IntAdmin",$datos);
			
			break;
			
		case "modificarLibro":
		
			$id_libro=$_REQUEST["id"];
			$resultado= $libro->update($id_libro);
			
			$datos["libros"] = $resultado;
			
			$vista->show("modificarLibro", $datos);
			break;	
		case "showInsertLibro":
			$vista->show("inserLibro");
			break;
			
		case "deleteLibro":
			$id_libro = $_REQUEST["id"];
			$resultado = $libro->deleteLibro($id_libro);
			break;
		case "showInsertImg":
			$datos = $_REQUEST["id"];
			$vista->show("insertimg",$datos);
		break;
		case "procesarInsertImg":
			$id_libro = $_REQUEST["id"];
			$pag_ant = $_REQUEST["pagina_ant"];
			$num_pag = $_REQUEST["num_pag"];
			$libro->renomDir($id_libro,$pag_ant,$num_pag);
			$libro->insertarImagen($id_libro, $pag_ant);
			$datos = $_REQUEST["id"];
			$vista->show("insertImg",$datos);
		break;
    }

?>
