<?php
    class Vista{

        public function show($nombreVista, $datos = null) {
           // include("vistas/header.php");
            include("vistas/$nombreVista.php");
           // include("vistas/footer.php");
			
        }
    }

?>
