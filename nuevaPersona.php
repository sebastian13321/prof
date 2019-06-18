<?php

	
	NuevoProducto($_POST['nombre'], $_POST['gemas']);
	
	function NuevoProducto($nom, $gem)
	{

		$nom_archivo=$_FILES['file1']['name']; 
		$img = "images/" . $nom_archivo; 
		$archivo = $_FILES['file1']['tmp_name']; 
		$subir=move_uploaded_file($archivo, $img);

		include 'conexion.php';
		$sentencia= "INSERT INTO skins (nombre, imagen, gemas) VALUES ('".$nom."', '".$img."', '".$gem."') ";
		$conexion->query($sentencia) or die ("Error al ingresar los datos".mysqli_error($conexion));
	}
?>


<script type="text/javascript">
	alert("Registrado Exitosamante!!");
	window.location.href='productos.php';
</script>