<?php
	class Libro{

		private $dbh;
		private $pag;

		/*public function __construct(){

			$this->pag=array();
			$this->dbh=new mysqli("localhost","root","","biblio");

		}*/

		public function get_pags($intro){
            $conexdb=new mysqli("localhost","root","","biblio");
			$tabla = $conexdb->query("select num_pag from libros where id_libro = '$intro'");

            $Arrayportada = $tabla->fetch_array();
			/*if ($tabla) {
                foreach ($tabla as $row) {
                    $this->pag[] = $row;
                }
            }*/

			return $Arrayportada;
		}
		
        public function create_pags($num_pag,$libro){

		    for($i = 0;$i<$num_pag["num_pag"];$i++){
		        if((($i==0 || $i==1) || $i==$num_pag-1) || $i==$num_pag-2)
                    echo"<div class=\"hard\"> <img src=\"imgs/books/$libro/$i.jpg\" /> </div>";
		        else
                    echo "<div class=\"pag\"> <img src=\"imgs/books/$libro/$i.jpg\" /> </div>";
            }

        }
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
