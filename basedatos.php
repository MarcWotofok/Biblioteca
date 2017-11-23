<?php

class Basedatos {

	private $mysqli;

	public function conectar() {
		$this->mysqli = new mysqli("localhost" ,"root" ,"" ,"biblio");
	}
	
	public function desconectar()  {
		$this->mysqli->close();
	}
	
	public function consulta($sql) {
		$r = $this->mysqli->query($sql);
		$a = array();
		while ($fila = $r->fetch_array()) {
			$a[] = $fila;
		}
		return $a;
	}
	
	public function dobleconsulta($sql) {
		$r = $this->mysqli->query($sql);
		$aud=$r->fetch_array();
		return $aud;
	}
	
	public function miniconsulta($sql) {
		$r = $this->mysqli->query($sql);
		$aud=$r->fetch_array();
		return $aud[0];
	}
	
	public function manipula($sql) {
		$this->mysqli->query($sql);
		return $this->mysqli->affected_rows;
		
	}


}
?>