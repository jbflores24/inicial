<?php
    session_start();
    $mensaje = '';
    $usuario = $_REQUEST['usuario'];
    $password = $_REQUEST['password'];
    if ($usuario=='') {
        $mensaje = 'Ingrese el usuario';
    } else {
        if ($password == '') {
            $mensaje = 'Ingrese la contraseña';
        } else {
            if (!($usuario == 'braulio' && $password=='1234')){
                $mensaje = 'usuario o contraseña inválida';
            } else {
                $mensaje = "Bienvenido, $usuario";
                $_SESSION['auth'] = 1;
                header('location: ../opcion2.php?mensaje='.$mensaje);
                return;
            }
        }
    }
    header('location: login.php?mensaje='.$mensaje);
