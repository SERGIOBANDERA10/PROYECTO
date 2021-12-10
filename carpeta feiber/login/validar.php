<?php

$email = $_POST['email'];
$contraseña = $_POST['contraseña'];
session_start();
$_SESSION['email']=$email;

include('db.php');

$consulta="SELECT*FROM users where email='$email' and contraseña='$contraseña'";
$resultado = mysqli_query($conexion,$consulta);


$filas=mysqli_num_rows($resultado);

if($filas){
    header("location:inicio.php");
}else{
  ?>
  <?php
  include("index.php");
  ?>
  <?php
   echo '<script type="text/javascript">'; echo 'alert("datos incorrectos")</script>'
   ?>
  <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
