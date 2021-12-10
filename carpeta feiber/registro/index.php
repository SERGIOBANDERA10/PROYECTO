<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud </title>
    <link rel="stylesheet" href="index18.css">
</head>
<body>
<div>
       <form method="post">
        <header>
        </header>
            <article id="primera">
            <img src="./img/LG-ALLT-.png" alt="" height="100%" width="23%" >
           </article>
           </header>
           <section>
           <h1>REGISTRO </h1>
           <li id="uno" style="text-decoration: none;">
           <label for="url">INGRESE SUS NOMBRES</label><br>
           <input style="width : 280px; height : 20px" name="name" type="text" placeholder="NOMBRES">
           </li>
           <li id="dos" style="text-decoration: none;">
           <label for="url">INGRESE SUS APELLIDOS</label><br>
           <input style="width : 280px; height : 20px" name="apellidos" type="text" placeholder="APELLIDOS"><br><br>
        </li>
        <li id="dos" style="text-decoration: none;">
        <label for="url">INGRESE SU EMAIL</label><br>
        <input style="width : 280px; height : 20px" name="email" type="email" placeholder="EMAIL"><br><br>
         </li>
          <li id="dos" style="text-decoration: none;">
         <label for="url">INGRESE SU CONTRASEÑA</label><br>
          <input style="width : 280px; height : 20px" name="contraseña" type="password" placeholder="CONTRASEÑA"><br><br>
       
           <a href="../login/index.php">iniciar secion</a><br><br>
           </li>
           <input id="bottom5" type="submit" name="register" value="registrarme">
           </section>
        </div>
    </form>
    <?php
    include('registrar.php')
    ?>
</body>
</html>