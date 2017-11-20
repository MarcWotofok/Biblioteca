<?php
        
        echo "<table border='1' cellspacing='0'>";
                echo "<tr>
                        <td>id</td>
                        <td>Titulo</td>
                        <td>Autor</td>
                        <td>Editorial</td>
                        <td>Lugar de edicion</td>
                        <td>Fecha de edicion</td>
                        <td>ISBN</td>
                        <td>tipo</td>
                       </tr>";


            $tablaUsuario = $datos["tabla"];
			echo "<a href='index.php?accion=showInsertLibro'>Insertar</a>";
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
                        <td><a href='index.php?accion=deleteLibro&id=".$usu[0]."'></a></td>
                        <td><a href='index.php?accion=modificarLibro&id=".$usu[0]."'>Modificar</a></td>
                        <td><a href='index.php?accion=showInsertImg&id=".$usu[0]."'>Insertar Pagina</a></td>
                       </tr>";
            }
            echo "</table>";

?>


