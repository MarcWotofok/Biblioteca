<?php
	class Libro{

		
		private $pag;
        
		public function get_info(){
			$db = new mysqli("localhost", "root", "", "biblio");
            $select = $db->query("SELECT * FROM libros");
            $tabla = $select->fetch_all();
            $db->close();
            return $tabla;
		}
		public function update($id_libro){
				
			$conexdb=new mysqli("localhost","root","","biblio");
			$select = $conexdb->query("select * from libros where id_libro = '$id_libro'");
			$tabla = $select->fetch_array();
			$conexdb->close();
					return $tabla;
		
		}
		public function deleteLibro($id_libro){
			$conexdb=new mysqli("localhost","root","","biblio");
			$select = $conexdb-> query("Delete  from libros WHERE id_libro='$id_libro'");

            if($conexdb->affected_rows==1) {
                $resultado = true;
            }else {
                $resultado= false;
            }

            return $resultado;
			
		}

		public function renomDir($id_libro,$pag_ant,$num_pag){
			for($i=$num_pag-1;$i>$pag_ant;$i--){
				$oldDir="imgs/books/$id_libro/".$i.".jpg";
				$newDir="imgs/books/$id_libro/".($i+1).".jpg";
				rename($oldDir,$newDir);
			}
		}

		public function insertarImagen($id_libro, $pag_ant) {
			
			$target_file = "imgs/books/$id_libro/" . ($pag_ant + 1). ".jpg";
			echo $target_file;
			$uploadOk = 1;
			$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
			
			if (move_uploaded_file($_FILES['fichero']['tmp_name'], $target_file)) {
			    echo "El fichero es válido y se subió con éxito.\n";
			} else {
			    echo "¡Posible ataque de subida de ficheros!\n";
			}

		}

		public function insertarImgsLibros($id_libro) {
			
			$target_file = "imgs/books/$id_libro/" . ($pag_ant + 1). ".jpg";
			//$target_file = "imgs/books/$id_libro/" . $_FILES["fichero"]["name"];
			echo $target_file;
			$uploadOk = 1;
			$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
			
			if (move_uploaded_file($_FILES['fichero']['tmp_name'], $target_file)) {
			    echo "El fichero es válido y se subió con éxito.\n";
			} else {
			    echo "¡Posible ataque de subida de ficheros!\n";
			}

		}

		public function insertLibro(){
			$conexdb=new mysqli("localhost","root","","biblio");

			$titulo=$_REQUEST["titulo"];
			$autor=$_REQUEST["autor"];
			$editorial=$_REQUEST["editorial"];
			$lugar=$_REQUEST["lugar"];
			$fecha=$_REQUEST["fecha"];
			$isbn=$_REQUEST["isbn"];
			$tipo=$_REQUEST["tipo"];

			$select = $conexdb-> query("INSERT INTO libros(id_libro,titulo,autor,editorial,lugar_edicion,fecha_edicion,ISBN,tipo) VALUES ('$titulo','$autor','$editorial','$lugar','$fecha','$fecha','$isbn','$tipo')");

			if($conexdb->affected_rows==1) {
                $resultado = true;
            }else {
                $resultado= false;
            }

            return $resultado;
		}
	}

?>
