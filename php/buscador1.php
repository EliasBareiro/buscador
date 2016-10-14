<?php 

	require_once('../conexiones/connect.php');

	$search = '';
	if (isset($_POST['search'])){
		$search = $_POST['search'];
	}

	$consulta = "SELECT * FROM articulos WHERE articulo LIKE '%".$search."%' OR nombre LIKE '%".$search."%' ORDER BY visitas";
	$resultado = $connect->query($consulta);
	$fila = mysqli_fetch_assoc($resultado);
	$total = mysqli_num_rows($resultado);


	#echo $fila['nombre'];
	#echo('&nbsp;');
	#echo $fila['articulo'];
	#echo('&nbsp;');
	#echo $fila['visitas'];
?>
<?php if ($total>0 && $search!='') { ?>
	<h2>Resultados de la busqueda</h2>
	<?php do { ?>
		<?php echo $fila['nombre'] ?>
	<?php }while ($fila=mysqli_fetch_assoc($resultado)); ?>
<?php } ?>