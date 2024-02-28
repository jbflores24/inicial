<?php
    $nombre = $_REQUEST['txtNombre'];
    $apellido = $_REQUEST['txtApellido'];
    $mensaje = '';
    if ($nombre==''){
        $mensaje = "Debes escribir el nombre";
    } else {
        if ($apellido==''){
            $mensaje = "Debes escribir el apellido";
        } else {
            $mensaje = "Tu nombre es : $nombre $apellido";
        }
    }
    header('location: editar3.php?resultado='.$mensaje);
    
