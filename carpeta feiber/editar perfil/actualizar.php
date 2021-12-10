<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
<h1>ACTUALIZAR</h1>
<form action="" method="post">
<input type="text" name="id" placeholder="ID A MODIFICAR "><br><br>
<input type="text" name="nombre" placeholder="NOMBRES"><br><br>
<input type="text" name="apellidos" placeholder="APELLIDOS"><br><br>
<input type="text" name="email" placeholder="EMAIL"><br><br>
<input type="password" name="contraseña" placeholder="PASSWORD"><br><br>
 <input type="submit" name="subir" value="actualizar">

 <?php
 $con = mysqli_connect("localhost","root","","registro");
 $db = mysqli_select_db($con,'registro');
 if(isset($_POST['subir']))
 {
   $id = $_POST['id'];

   $query = "UPDATE users SET
    nombre='$_POST[nombre]',
   apellidos='$_POST[apellidos]',
   email='$_POST[email]',
   contraseña='$_POST[contraseña]'
    where id='$_POST[id]'";
   $query_run= mysqli_query($con,$query);

   if($query_run){
     echo '<script type"text/javascript">alert("datos actualizados")</script> ';
   }else{
    echo '<script type"text/javascript">alert("no se actualizaron los datos")  <(script> ';
   }

 }

?>
</body>
</html>