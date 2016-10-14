<?php
	
require_once('../conexiones/connect.php');

$search = '';
if (isset($_POST['search'])) {
		$search = $_POST['search'];
}	

$consulta = "SELECT * FROM previas WHERE materia LIKE '%".$search."%' OR formacion LIKE '%".$search."%' OR curso LIKE '%".$search."%' OR docente LIKE '%".$search."%' OR mes LIKE '%".$search."%' OR dia LIKE '%".$search."%' OR hora LIKE '%".$search."%' ORDER BY id LIMIT 5";
$resultado = $connect->query($consulta);
$fila = mysqli_fetch_assoc($resultado);
$total = mysqli_num_rows($resultado);
?>
<?php if ($total>0 && $search!=''){ ?>
	<?php do { ?>
		<div class="artoffight">
			<?php echo $fila['formacion'] ?>
			<?php echo ('&nbsp;'); ?>
			<?php echo $fila['curso'] ?>
			<?php echo ('&nbsp;'); ?>
			<?php echo $fila['materia'] ?>
			<?php echo ('&nbsp;'); ?>
			<?php echo $fila['docente'] ?>
			<?php echo ('&nbsp;'); ?>
			<?php echo $fila['mes'] ?>
			<?php echo ('&nbsp;'); ?>
			<?php echo $fila['dia'] ?>
			<?php echo ('&nbsp;'); ?>
			<?php echo $fila['hora'] ?>
		</div>
	<?php } while($fila=mysqli_fetch_assoc($resultado)); ?>
<?php } ?>