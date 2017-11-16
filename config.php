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
	}

?>
