<?php // Formulario de registro de libros
?>

<h1>Insertar libro</h1>
<form action='index.php' method='get'>
    Titulo <input type='text' name='titulo'><br/>
    Autor <input type='text' name='autor'><br/>
    Editorial <input type='text' name='editorial'><br/>
    Lugar de edición <input type='text' name='lugar'><br/>
    Fecha de edición <input type='text' name='fecha'><br/>
    Número de páginas <input type='text' name='pags'><br/>
    ISBN <input type='text' name='isbn'><br/>
    Tipo <input type='text' name='tipo'><br/>
    Sube cosas <button type='button'>Subir Libro</button><br/>
    <input type="hidden" name="accion" value="processRegisterForm">
    <input type='submit'>
</form>
