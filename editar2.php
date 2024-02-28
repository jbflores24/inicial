<?php
    if (isset($_REQUEST['guardar'])){
        $nombre = $_REQUEST['txtNombre'];
        $apellido = $_REQUEST['txtApellido'];
        if ($nombre==''){
            echo "<h1>Debes escribir el nombre</h1>";
        } else {
            if ($apellido==''){
                echo "<h1>Debes escribir el apellido</h1>";
            } else {
                echo "<h1>Tu nombre es : $nombre $apellido</h1>";
            }
        }
    }
    if (isset($_REQUEST['cancelar'])){
        echo "<br>Pulsaste Cancelar<br>";
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
        <h2>Página de Edición de Usuario</h2>
        <form action="" method="post">
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
                    <button name="guardar">Guardar</button>
                    <button name="cancelar">Cancelar</button>
                </div>
            </fieldset>
        </form>
    </main>
</body>
</html>