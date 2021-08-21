<!DOCTYPE HTML>
<html lang="es">
<head>
    <meta charset="utf-8">
    
</head>

<body>
<title>Formulario on php</title>

<form action="recibir.php" method="POST">
        <p>
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" value="">
        </p>
        <p>
        <label for="apellido">Apellido:</label>
        <input type="text" name="apellido" value="">
        </p>
        <input type="submit" value="Enviar">
    </form>
    

    <p> 
        </p>
    
    <form action="formulario.php" method="post">
        <label>Nombre:</label>
        <input type="text" name="nombre" />
        <br />
        <label>Apellido:</label>
        <input type="text" name="apellido" />
        <br />
        <label>Edad:</label>
        <input type="text" name="edad" />
        <br />
        <label>Sexo:</label>
        <input type="radio" name="sexo" value="M" />
        <label>Masculino</label>
        <input type="radio" name="sexo" value="F" />
        <label>Femenino</label>
        <br />
        <label>Dirección:</label>
        <input type="text" name="direccion" />
        <br />
        <label>Ciudad:</label>
        <input type="text" name="ciudad" />
        <br />
        <label>Estado:</label>
        <input type="text" name="estado" />
        <br />
        <label>País:</label>
        <input type="text" name="pais" />
        <br />
        <label>Correo:</label>
        <input type="text" name="correo" />
        <br />
        <label>Telefono:</label>
        <input type="text" name="telefono" />
        <br />
        


<?php
//variables $_GET, $_POST, $_COOKIE, $_REQUEST

?>