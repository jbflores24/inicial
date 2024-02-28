<?php
    session_start();
    $mensaje = '';
    if ($_SESSION['auth']==0){
        header ('location: /inicial/login/login.php?mensaje=Inicia+sesión');
    }
    if (isset($_GET['mensaje'])){
        $mensaje = $_GET['mensaje'];
    }
    require ("Alumno.php");
    $alumno[0] = new Alumno(1,'Novaly Briannet','Flores Salazar','descarga.jpg');
    $alumno[1] = new Alumno(2,'José Braulio','Flores Martínez','descarga.jpg');
    $alumno[2] = new Alumno(3,'Miguel Edgardo','Flores Gallegos','descarga.jpg');
    $alumno[3] = new Alumno(4,'José Mauricio','Flores Gallegos','descarga.jpg');
    echo "<br>".$alumno[0]->toString();
    echo "<br>".$alumno[1]->toString();
    echo "<br>".$alumno[2]->toString();
    echo "<br>".$alumno[3]->toString();
    echo "<br>Imprimiendo de otra forma!";
    for ($i=0; $i<4; $i++){
        echo "<br>".$alumno[$i]->getNombre();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página 1</title>
</head>
<body>
    <main>
        <h1><?=$_SESSION["titulo"]?></h1>
        <h2><?=$mensaje?></h2>
        <h2>Página de opción 2</h2>
        <table border="1">
            <tr> <!--sirve para una nueva fila-->
                <th>Id</th><!--nueva columna-->
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Fotografía</th>
                <th>Operaciones</th>
            </tr>
            <?php
                for ($i=0;$i<4;$i++){
                    echo "<tr>";
                    echo "<td>".$alumno[$i]->getId()."</td>";
                    echo "<td>".$alumno[$i]->getNombre()."</td>";
                    echo "<td>".$alumno[$i]->getApellidos()."</td>";
                    echo "<td><img src = '".$alumno[$i]->getImagen()."' alt = 'imágen' height='50px' width='70px'></td>";
                    echo "<td><a href='#'>Editar</a></td>";
                }
            ?>
                
            </tr>
            
        </table>

        <section>
            <h2>Otra forma de poner tablas : </h2>
            <table border="1">
                <thead>
                    <th>Id</th><!--nueva columna-->
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Fotografía</th>
                    <th>Operaciones</th>                          
                </thead>
                <tbody>
                    <?php foreach ($alumno as $a):?>
                    <tr>
                        <td><?=$a->getId()?></td>
                        <td><?=$a->getNombre()?></td>
                        <td><?=$a->getApellidos()?></td>
                        <td><img src = "<?=$a->getImagen()?>" alt = "imágen" height="50px" width="70px"></td>
                        <td><a href="editar3.php">Editar</a></td>
                    </tr>
                    <?php endforeach;?>   
                </tbody>
            </table>
        </section>


        <a href="index.html">Regresar</a>
    </main>
</body>
</html>