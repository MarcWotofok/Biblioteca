<!DOCTYPE html>
<html>
	<head>
		<style type="text/css">
			.file-input {
			  visibility: hidden;
			  width: 0;
			  float: left;
			}
			.file-input::before {
			  content: 'Insertar paginas';
			  display: inline-block;
			  background: -webkit-linear-gradient(top, #f9f9f9, #e3e3e3);
			  border: 1px solid #999;
			  border-radius: 3px;
			  padding: 5px 8px;
			  outline: none;
			  white-space: nowrap;
			  -webkit-user-select: none;
			  cursor: pointer;
			  text-shadow: 1px 1px #fff;
			  font-weight: 700;
			  font-size: 10pt;
			  visibility: visible;
			  position: absolute;
			}
			.file-input:hover::before {
			  border-color: black;
			}
			.file-input:active::before {
			  background: -webkit-linear-gradient(top, #e3e3e3, #f9f9f9);
			}
			.enviar{
				top: 1500px;
			}

		</style>
		
	</head>

<?php // Formulario de registro de libros
	$id_libro = $datos["id_libro"];

echo"

	<h1>Insertar libro</h1>
	<form action='index.php' method='get'>
		Titulo <input type='text' name='titulo'><br/>
		Autor <input type='text' name='autor'><br/>
		Editorial <input type='text' name='editorial'><br/>
		Lugar de edición <input type='text' name='lugar'><br/>
		Fecha de edición <input type='text' name='fecha'><br/>
		ISBN <input type='text' name='isbn'><br/>
		Tipo <input type='text' name='tipo'><br/>
		<input type='hidden' name='id_libro' value='$id_libro[0]'/>
    	<input type='file' class='file-input' name='fichero' accept='image/jpg'  id='input' multiple='true' onchange='handleFiles(this.files)'/><br/><br/>
		<input type='hidden' name='accion' value='insertLibro'/>
		<input type='submit'>
    
</form>
"
?>

