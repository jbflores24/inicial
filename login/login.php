<?php
    session_start();
    $mensaje = '';
    if (isset($_GET['mensaje'])){
        $mensaje = $_GET['mensaje'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2><?=$mensaje?></h2>
    <h1><?=$_SESSION['titulo']?></h1>
    <form action = "logea.php" method="post">
        <div>
            <label>Usuario</label>
            <input type = "text" 
            placeholder="Ingrese su usuario" 
            id="usuario" 
            name="usuario">
        </div>
        <div>
            <label>Contraseña</label>
            <input type = "text" 
            placeholder="Ingrese tu contraseña" 
            id="password" 
            name="password">
        </div>
        <input type="submit" value = "Iniciar">
    </form>
</body>
</html>