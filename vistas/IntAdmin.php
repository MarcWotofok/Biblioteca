
<!DOCTYPE html>
<html>
	<link rel="stylesheet" href="css/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/estilo.css" media="screen" />
	<head>
    <script language="Javascript">
        function mi_alerta(){
             return confirm("¿Estás seguro? Esta acción no se puede deshacer.");
        }

    </script>	
	
</head>

	<body>


	<?php

        
        echo "<table border='1' cellspacing='0' style='width: 90%;margin: 0 auto;text-align: center'>";
                echo "<tr>
                        <td>id</td>
                        <td>Titulo</td>
                        <td>Autor</td>
                        <td>Editorial</td>
                        <td>Lugar de edicion</td>
                        <td>Fecha de edicion</td>
                        <td>ISBN</td>
                        <td>Disponibilidad</td>
                        <td colspan='3'><a href='index.php?accion=showInsertLibro'><i class='fa fa-plus' aria-hidden='true'></i><i class='fa fa-book' aria-hidden='true'></i></a></td>
                       </tr>";


            $tablaUsuario = $datos["tabla"];
			echo "<a href='index.php?accion=showInsertLibro'><i class='fa fa-plus' aria-hidden='true'></i><i class='fa fa-book' aria-hidden='true'></i></a>";
            foreach ($tablaUsuario as $usu) {
                echo "<tr>
                        <td>".$usu[0]."</td>
                        <td>".$usu[1]."</td>
                        <td>".$usu[2]."</td>
                        <td>".$usu[3]."</td>
                        <td>".$usu[4]."</td>
                        <td>".$usu[5]."</td>
                        <td>".$usu[6]."</td>
                        <td>".$usu[7]."</td>
                        <td><a href='index.php?accion=modificarLibro&id=".$usu[0]."'><i class='fa fa-pencil-square-o' aria-hidden='true'></i></a></td>
                        <td><a href='index.php?accion=showInsertImg&id=".$usu[0]."'><i class='fa fa-file-image-o' aria-hidden='true'></i></a></td>
                        <td><a href='index.php?accion=deleteLibro&id=".$usu[0]."' onclick='return mi_alerta()'><i class='fa fa-trash' aria-hidden='true'></i></a></td>
                       </tr>";
            }
            echo "</table>";

?>



	</body>

</html>
