<?php

	ModificarProducto($_POST['nombre'],  $_POST['gemas'] );

	function ModificarProducto($nom, $gem)
	{
		include 'conexion.php';
		echo $sentencia="UPDATE skins SET nombre='".$nom."', gemas='".$gem."' WHERE no='".$no."' ";
		$conexion->query($sentencia) or die ("Error al actualizar datos".mysqli_error($conexion));
	}

	if ($_FILES["file1"]["error"] > 0)
	{

	} 
	else {

		$nom_archivo=$_FILES['file1']['name']; 
		$ruta = "images/" . $nom_archivo; 
		$archivo = $_FILES['file1']['tmp_name']; 
		$subir=move_uploaded_file($archivo, $ruta); 
		include 'conexion.php';
		echo $sentencia_img="UPDATE skins SET imagen='$ruta' WHERE no='".$_POST['no']."' ";
		$conexion->query($sentencia_img) or die ("Error al actualizar datos".mysqli_error($conexion));
		
	}

	
?>

<script type="text/javascript">
	alert("Datos Actualizados Exitosamante!!");
	window.location.href='productos.php';
</script>