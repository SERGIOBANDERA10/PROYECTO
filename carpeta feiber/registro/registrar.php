<?php

include("con_db.php");
$conex = mysqli_connect("localhost","root","","registro");
if (isset($_POST['register'])){
    if(strlen($_POST['name']) >= 1 && 
     strlen($_POST['apellidos']) >= 1 &&  
     strlen($_POST['email']) >= 1 &&  
     strlen($_POST['contraseña']) >= 1){
     $name = trim ($_POST['name']);
     $ape = trim ($_POST['apellidos']);
    $email = trim ($_POST['email']);
    $contra = trim ($_POST['contraseña']);
    $fechareg = date("d/m/y");
 $consulta ="INSERT INTO users( nombre,apellidos,email,contraseña, fecha_reg) VALUES ('$name','$ape','$email','$contra','$fechareg')";
    $resultado = mysqli_query($conex,$consulta);
    if ( $resultado ) {
        ?> 
      <?php

       echo '<script type="text/javascript">'; echo 'alert("registrado correctamente")</script>'
        ?>
       <?php
    } else {

        echo '<script type="text/javascript">'; echo 'alert("ups a ocurrido u")</script>'
        ?> 
        
       <?php
    }
}    else {
    echo '<script type="text/javascript">'; echo 'alert("no se a registrado ")s</script>'
        ?> 
        
       <?php
    }

}   

?>
