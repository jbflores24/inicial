<?php
    session_start();
    $mensaje='';
    if ($_SESSION['auth']==0){
        header ('location: /inicial/login/login.php?mensaje=Inicia+sesión');
    }
    if (isset($_GET['resultado'])){
        $mensaje = $_GET['resultado'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>..:: Editar ::..</title>
</head>
<body>
    <main>
        <h3><?=$mensaje?></h3>
        <h1><?=$_SESSION['titulo']?></h1>
        <h2>Página de Edición de Usuario</h2>
        <form action="procesa.php" method="post">
            <fieldset>
                <div>
                    <label>Nombre : </label>
                    <input  type = "text" 
                            placeholder="Etiqueta por default"
                            name="txtNombre"
                            id="txtNombre"
                            >
                </div>
                <div>
                    <label>apellidos : </label>
                    <input  type = "text" 
                            placeholder="Aquí van los apellidos"
                            name="txtApellido"
                            id="txtApellido">
                </div>
                <div>
                    <input type="submit" value="Guardar">
                    <button name="cancelar">Cancelar</button>
                </div>
            </fieldset>
        </form>
    </main>
</body>
</html>