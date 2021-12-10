<?php 
$inc = include("con_db.php");
if ($inc){
	$consulta = "SELECT * FROM users";
	$resultado = mysqli_query($conex,$consulta);
	if ($resultado) {
		while ($row = $resultado->fetch_array()) {
	    $id = $row['id'];
	    $nombre = $row['nombre'];
		$apellidos = $row['apellidos'];
	    $email = $row['email'];
		$contraseña = $row['contraseña'];
	    $fechareg = $row['fecha_reg'];
	    ?>
        <div>
        	<h2><?php echo $nombre; ?></h2>
        	<div>
        		<p>
        			<b>ID: </b> <?php echo $id ?><br>
					<b>nombres </b> <?php echo $nombre ?><br>
					<b>apellidos </b> <?php echo $apellidos ?><br>
        		    <b>Email: </b> <?php echo $email ?><br>
					<b>contraseña: </b> <?php echo  $contraseña ?><br>
        		    <b>Fecha Registro: </b> <?php echo $fechareg ?><br>
        		</p>
        	</div>
        </div> 
		
	    <?php
	    }
	}
}
?>