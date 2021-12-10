<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud </title>
    <link rel="stylesheet" href="index9.css">
</head>
<body>

<div>
        <header>
            <aside id="principal">
            <h1 id="segunda">
                <p>carrito de compra</p>
            </h1>
        </aside>
        </header>

        <section>
            <div id="cabecera">
            <img src="../PROYECTO/img/cartagena3.jpg" alt="" height="450px" width="90%">
            </div>
            <p id="descripcion1">Cartagena es una ciudad que está ubicada a orillas del Mar Caribe .<br>
                 Sus calles coloridas 
                llenas de encanto la hacen la puerta de entrada a Suramérica. <br>
                 En Colombia, se encuentra al norte del país, y es la capital de la región de Bolívar.</p>
        </section>
        <form method="post">
        <section id="compras">
          <h1 id="formulario"> DILIGENCIAR EL FORMATO</h1>
          <h3>Elija la Fecha Deseada </h3>
         <div id="listas">
              <ul>
            <li id="fecha">
           <label  for=""></label>
           <input style="width : 250px; height : 20px" type="date"  name="fecha" placeholder="FECHA">
            </li>
            <li id="cedula">
          <label  for="url"></label>
          <br>
          <input style="width : 250px; height : 20px" type="text" name="cedula" placeholder="CEDULA" >
           </li>
           <li id="banco">
         <label  for="url"></label>
         <br>
        <input  style="width : 250px; height : 20px"type="text" name="banco" placeholder="INGRESE BANCO ">
         </li>
        <div id="medio">
         <h4>Medio de pago</h4>
         
         
          <a href=""><img  src="../PROYECTO/img/visa.png" alt="" height="60px" width="60px"></a>
         <a href=""><img src="../PROYECTO/img/paypal.png" alt="" height="47px" width="60px" ></a> 
         <a href=""><img src="../PROYECTO/img/unnamed.png" alt="" height="48px" width="60px"></a> 

         </div>
         <li id="clave">
         <label for="url"><h6> Clave de su tarjeta</h6></label> 
         <br>
        <input style="width : 250px; height : 20px" name="clave"  type="password"  placeholder="PASSWORD">
        </li>
        <input id="bottom5" type="submit" name="register">
        </ul>
    </form>
    <?php
    include('registrar.php')
    ?>
</body>
</html>