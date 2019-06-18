<?php
  
  $consulta=ConsultarProducto($_GET['no']);

  function ConsultarProducto( $no_prod )
  {
   include 'conexion.php';
   $sentencia="SELECT * FROM skins WHERE no='".$no_prod."' ";
   $resultado= $conexion->query($sentencia) or die ("Error al consultar producto".mysqli_error($conexion)); 
   $fila=$resultado->fetch_assoc();

   return [
    $fila['nombre'],
    $fila['gemas'],
    
   ];
  }
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Modificar</title>
</head>
<body>
	<div class="container">
	
	<form method="post" action="guardarDatosEditados.php" enctype="multipart/form-data">
		<input type="hidden" name="no"  value="<?php echo $_GET['no']?>">
		<label >Nombre:</label>
		
		<input name="nombre" required type="text" id="nombre" placeholder="" value="<?php echo $consulta[0] ?>">
	<br>
		<label >Gemas:</label>
	
		<input name="gemas" required type="text" id="gemas" placeholder="" value="<?php echo $consulta[1] ?>">
	<br>
		<label >Imagen</label>
		<input required   type="file" name="file1" id="file1" >
		
		<br><br><input type="submit" value="Registrar">
	</form>
</div>
</body>
</html>

<script>
$("#file-1").fileinput({
showCaption: false,
browseClass: "btn btn-primary btn-lg",
fileType: "any"
});
</script>