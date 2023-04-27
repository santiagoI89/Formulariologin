<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio sesion</title>
</head>
<body>
    <form action="" method="post">
        <h1>Iniciar Sesion</h1>
        <label>Usuario</label>
        <input type="text" name="usuario">
        <label>Contraseña</label>
        <input type="password" name="contraseña">
        <input type="submit" name="iniciar">
    </form>
</body>
</html>

<?php
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];

if ($usuario=="1025461298" && $contraseña=="2004") 
{
    header('Location: usuario.php');
}
else
{
    echo "datos incorrectos";
}