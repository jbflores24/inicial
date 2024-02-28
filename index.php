<?php
    session_start();
    $_SESSION['titulo'] = "Instituto Tecnológico de Salina Cruz";
    $_SESSION['auth'] = 0;
?>
<!DOCTYPE html><!-- Indica que es html5 -->
<html lang="es"> <!--indico que es una página web-->
    <!-- Configuraciones-->
    <head>
        <meta charset="utf-8"/>
        <title>Mi primera página</title>   
    </head>
    <!-- Cuerpo principal-->
    <body>
        <header>
            <h1><?=$_SESSION["titulo"]?></h1> 
            <?php
                echo "<h2>Hola mundo desde php</h2>";
                $a = 0;  
                echo "El valor de a es : ".$a;
                $a = 1;
                echo "El valor de a es : $a";
                $a=2;
                printf ("El valor de a es : %d",$a);
                $a = 'Hola mundo';
                echo "El valor de a es : $a";
                $a="Este es un nuevo valor";
                printf ("El valor de a es : %s",$a);
                echo "<br>";
                $edad = 17;
                $mensaje = "Es menor de edad";
                if ($edad > 18) 
                    $mensaje = "Es mayor de edad";
                echo $mensaje;
                echo "<br>";
                $edad = 18;
                if ($edad >= 18) 
                    $mensaje = "Es mayor de edad";
                else
                    $mensaje = "Es menor de edad";
                echo $mensaje;
                $op = 5;
                switch($op){
                    case 1 : $mensaje = "opción 1";
                            break;
                    case 2 : $mensaje = "opción 2";
                    break;
                    case 3 : $mensaje = "opción 3";
                    break;
                    case 4 : $mensaje = "opción 4";
                    break; 
                    default : $mensaje ="No existe esa opción";
                            break;      
                }
                echo "<br>$mensaje";

                $a = 4;
                echo "<br>Tabla de multiplicar  del $a:";
                for ($i=1;$i<=10;$i++){
                    $resultado = $a * $i;
                    echo "<br>$a * $i = $resultado";
                }

                $a = 5;
                echo "<br>Tabla de multiplicar  del ".$a." :";
                for ($i=1;$i<=10;$i++){
                    echo "<br>".$a." * ".$i." = ".($a * $i);
                }

                $a = 5;
                printf ("<br>Tabla de multiplicar  del %d :", $a);
                for ($i=1;$i<=10;$i++){
                    printf ("<br> %d * %d = %d",$a,$i,$a*$i);
                }
            ?>
        </header>
        <nav>
            <ul>
                <li><a href="opcion1.html">Opción 1</a></li>
                <li><a href="opcion2.php">Opción 2</a></li>
                <li><a href="editar2.php">Opción 3</a></li>
                <li>Opción <?=$a?></li>
                <li>Opción <?php echo $a;?></li>
            </ul>
        </nav>
        <main>
            <h1>Es el título principal, sólo puede haber uno por página</h1>
            <h2>Se utiliza para destactar categorias</h2>
            <h3>Elementos destacados pero no tan importantes como en h2</h3>
            <h4>Es otro header tamaño 4</h4>
            <h5>Es otro header tamaño 5</h5>     
            <h6>Es otro header tamaño 6</h6>     
            <section>
                <h2>Opiniones</h2>
                <article>
                    <p>Éste es un párrafo</p>
                    <p>Éste es otro párrafo</p>
                    <p><b>Lorem</b> <i>ipsum</i> <s>dolor</s> <span style="color:blue;">sit</span> amet consectetur adipisicing elit. Distinctio, beatae iure saepe id earum dolorem, voluptas consequuntur aspernatur aut atque excepturi quidem nisi incidunt, laboriosam eveniet. Quam perferendis culpa pariatur.</p>
                </article>
                <article>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sed voluptatem corrupti voluptatum reprehenderit labore blanditiis dignissimos cumque cum officiis praesentium libero aperiam, quod, eveniet voluptates, neque ipsum aliquid expedita! Tempore. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Recusandae laborum in facilis numquam ea voluptatum tenetur reiciendis, consequatur iste, quaerat omnis cum officiis esse consectetur eos? Corrupti ex quisquam perspiciatis?Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident unde veniam rerum ullam? Debitis beatae vel voluptatum temporibus qui, soluta aliquid sit rerum itaque consectetur aspernatur expedita. Officia, iusto tempora!</p>
                </article>
            </section>
            <ul>
                <li><a href="opcion2.php">Opción 2</a></li>
                <li><a href="./login/logout.php">Cerrar Sesión</a></li>

            </ul>
        </main>
        <aside>
            <h2>Redes sociales</h2>
            <section>
                <p>Facebook</p>
                <p>X</p>
                <p>TikTok</p>
                <p>Youtube</p>
            </section>
        </aside>
        <footer>
            todos los derechos reservados 2024
        </footer>
    </body>
</html>