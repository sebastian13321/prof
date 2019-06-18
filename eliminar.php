<?php
	EliminarProducto($_GET['no']);

	function EliminarProducto($no)
	{
		include 'conexion.php';
		$sentencia="DELETE FROM skins WHERE no='".$no."' ";
		$conexion->query($sentencia) or die ("Error al eliminar".mysqli_error($conexion));

	}
?>

<script type="text/javascript">
	alert("Eliminado!!");
	window.location.href='productos.php';
</script>