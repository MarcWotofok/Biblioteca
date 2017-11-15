
<?php

    include("vista.php");
	include("config.php");
	
	
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
		
		case "showLibro":

			$id=$_REQUEST["intro"];
			$num_pag=$libro->get_pags($id)["num_pag"];
			$datos["num_pags"] = $num_pag;
			$datos["libro"] = $id;
			$vista->show("libro", $datos);

			break;
		case "showIntAdmin":
			$datos["tabla"] = $libro->get_info();
			$vista->show("IntAdmin",$datos);
			
			break;
    }

?>