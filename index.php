<?php
    $servidor = "sql111.byethost3.com";
    $usuario =  "b3_41349160";
    $password = "123456789";
    $dbname = "b3_41349160_mascotas";
    $conn = mysqli_connect($servidor, $usuario, $password, $dbname);
    if(!$conn){
        echo"<script>alert('Conexion fallida')</script>";    
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Marvin Miguel Higueros Najera">
    <meta name="Keywords"content="perros, perry corld, mascotas, canes, adopción de perros">
    <meta name="description" content="Perry Corld, es una sociedad que se dedica a la adopción de perros domesticos de multiples clases a un precio economico.">
    <meta property="og:title" content="perry Corld">
    <meta property="og:description" content="¿Necesitas un compañero? Ven a Perry Corld a encontrar a tu amigo peludo y adorable. Solo necesitas entrar a nuestro sitio web, escoger a tu mascota preferida y adoptarla.">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://www.freepik.es/fotos-premium/retrato-lindo-perro-raza-sobre-fondo-oscuro-estudio_26472920.htm">
    <meta property="og:url" content="https://github-perry_corld.get-12345.com">
    <title>Perry Corld</title>
    <link rel="stylesheet" href="Estilo/style.css">
    <link rel="icon" href="logo/mascota.png">
</head>
<body>
    <header class="cabeza">
            <div class="header">
                <div class="header__logo">
                    <img src="logo/huella.png" alt="Huella" class="logo__dos">
                </div>
                <input id="header__check" type="checkbox" class="header__check">
                <nav class="header__nav">
                    <ul class="nav__list">
                        <div class="list__logo">
                            <img class="logo__vinculo" src="logo/mascota.png" alt="Perro">
                        </div>
                        <li class="list__item">
                            <div class="item__img">
                                <img src="logo/caja-registradora.png" alt="Caja">
                            </div> 
                            <label class="item__vinculo" for="user__form" class="label">Registrarse</label>
                        </li>
                        <li class="list__item">
                            <div class="item__img">
                                <img src="logo/perro.png" alt="Perro">
                            </div>
                            <a class="item__vinculo" href="#navegar">Categorias de perros</a>
                        </li>
                        <li class="list__item">
                            <div class="item__img">
                                <img src="logo/contact-information.png" alt="Contactos">
                            </div>
                            <a class="item__vinculo" href="#footer">Contactos</a>
                        </li>
                        <li class="list__item">
                            <div class="item__img">
                                <img src="logo/gestion-de-proyectos.png" alt="Proyectos">
                            </div>
                            <a class="item__vinculo" href="Webs/Admon.php">Administracion</a>
                        </li>
                        <li class="list__item">
                            <div class="item__img">
                                <img src="logo/ayudar.png" alt="Ayuda">
                            </div>
                            <a class="item__vinculo" href="#section__help">Ayuda y asistencia</a>
                        </li>
                </ul>
            </nav>
                <div class="header__lupa">
                    <a href="Webs/Perry-corld.php" class="lupa__vinculo">
                        <img class="lupa__busqueda" src="logo/buscar.png" alt="Lupa">
                    </a>
                    <label for="header__check" class="header__menu">=</label>
                </div>
            </div>
        <div class="header__information">
            <div class="information__contenido">
                <h1>Bienvenidos a Perry Corld</h1>
            </div>
            <div class="information__image">
                <img src="img/Perro-besh.png" alt="">
            </div>
        </div>
    </header>
    <input type="checkbox" id="user__form">
    <dialog open class="user__form">
        <div class="dialog__form">
            <h2>Registrarse</h2>
            <form method="get" action="index.php" class="form__form">
                <div class="form__dato">
                    <label>Nombre
                        <input name="name" class="dato" required minlength="3" type="text" placeholder="Nombre">
                    </label>
                </div>
                <div class="form__dato">
                    <label>Apellido
                        <input name="apellido" class="dato" minlength="3" type="text" placeholder="Apellido">
                    </label>
                </div>
                <div class="form__dato email">
                    <label>Correo 
                        <input name="email" class="dato" required type="email" placeholder="Correo electronico">
                    </label>
                </div>
                <div class="form__dato">
                    <label>Contraseña
                        <input name="pwd" class="dato" required minlength="1" type="password" placeholder="Contraseña">
                    </label>
                </div>
                <div class="form__dato">
                    <label>Telefono
                        <input name="tel" class="dato" required minlength="3" type="tel" placeholder="No. telefono">
                    </label>
                </div>
                <div class="form__dato submit">
                        <input name="form" class="dato button" type="submit" value="Enviar">
                </div>
                    <?php
        if(isset($_GET['form'])){
            $name = $_GET['name'];
            $apellido = $_GET['apellido'];
            $correo = $_GET['email'];
            $pwd = $_GET['pwd'];
            $tel = $_GET['tel'];
            $admon = $_GET['pwd'];    
            if(str_contains($pwd, ".perry")){
                    $admon ="perry";
                    echo"<script>alert('Usted es administrador');</script>";   
                }
                else{
                    $admon = $pwd;
                }
            $dt = "INSERT INTO usuario (Nombre, Apellido, correo, tel, contrasena, Administrador) VALUES ('$name', '$apellido', '$correo', '$tel', '$pwd', '$admon')";
            if(mysqli_query($conn, $dt)){
                echo"<script>alert('Datos guardados');</script>";
            }
            else{
                echo"<script>alert('Datos no guardados');</script>";
            }
        }
    ?>
            </form>
            <label class="form__close" for="user__form">X</label>
    </dialog>
    <section class="section">
        <div class="section__mp4">
            <video src="mp4/perro.mp4" autoplay loop muted class="mp4__video">
            </video>
        </div>
        <div class="section__section">
            <div class="section__information">
                <h2>Perry Corld</h2>
                <p>Nosotros nos dedicamos a la busqueda de perros callejeros, para cuidarlos, alimentarlos y buscarles un hogar feliz en ti. ¿Que espeeras para buscar a tu fiel compañero?</p>
            </div>
        </div>
    </section>
    <main class="main">
        <div class="main__titulo">
            <h2>Mejores reseñas</h2>
        </div>
        <section class="main__galery uno">
            <?php
            $contador = 0;
                $sql = "SELECT * FROM mascota ORDER BY Id_mascotas ASC LIMIT 10";
                $resultado = mysqli_query($conn, $sql);
                if(!$resultado){
                echo"<script>alert('lastima')</script>";    
                }
                else{
                    while($fila = mysqli_fetch_assoc($resultado)){
                        $contador = $contador + 1;
                        $id = $fila['Id_mascotas'];
                        $img = $fila['imagen'];
                        $especie = $fila['Especie'];
                        $edad = $fila['Edad'];
                        $peso = $fila['peso']; 
                        $altura = $fila['altura']; 
                        $genero = $fila['Genero'];
                        $disponible = $fila['Disponible'];
                        echo'
                        <div class="galery__dog">
                <div class="dog__image">
                    <img src="mascotas/'.$img.'" alt="'.$especie.'">
                </div>
                <div class="dog__titulo">
                    <h3>'.$especie.'</h3>
                </div>
                <div class="dog__description">
                    <div class="dog__information">
                        <p>Peso: '. $peso. ' K <br>
                            Años: '. $edad. ' meses <br>
                            Altura: '. $altura.' cm <br>
                            Genero: '. $genero.' <br>
                            Id: '.$id.'<br>'.
                            $disponible.'
                        </p>
                    </div>
                    <div class="dog__adoptar">
                        <label for="adopcion'.$contador.'">→</label>
                    </div>
                </div>
            </div>';
            echo'<input class="input" type="checkbox" id="adopcion'.$contador.'">
        <div class="adopcion__modale mod'.$contador.'">
            <label for="adopcion'.$contador.'" class="close">X</label>
            <div class="adopcion__information">       
            <div class="adopcion__img">
                        <img src="mascotas/'.$img.'" alt="'.$especie.'">
                    </div>
                <div class="adopcion__datos">
                    <h2>'.$especie.'</h2>
                    <p>
                        Id: '.$id.'<br>
                        Especie: '.$especie.' <br>
                        Peso: '.$peso.' K <br>
                        Años: '.$edad.' <br>
                        Altura: '.$altura.' cm <br>
                        Genero: '.$genero.' <br>
                        '.$disponible.'
                    </p>
                </div>
                <div class="form__adopcion">
                    <form action="index.php" method="get">
                        <input name="correo" class="ado" type="email" required placeholder="Escribre tu correo electronico">
                        <input name="password" class="ado" type="password" required placeholder="Escribre tu contraseña">
                        <input name="verificar" class="ado ada" type="submit" value="Adoptar">
                    </form>
                </div>
            </div>
        </div>';
        echo'<style>
                #adopcion'.$contador.':checked ~ .mod'.$contador.'{
                    display: flex;
                }
            </style>';
                    }
                }
            ?>
        </section>
        <section class="main__galery dos">
            <?php
            $contador = 21;
                $sql = "SELECT * FROM mascota ORDER BY Id_mascotas desc limit 10;";
                $resultado = mysqli_query($conn, $sql);
                if(!$resultado){
                echo"<script>alert('lastima')</script>";    
                }
                else{
                    while($fila = mysqli_fetch_assoc($resultado) ){
                        $contador = $contador + -1;
                        $id = $fila['Id_mascotas'];
                        $img = $fila['imagen'];
                        $especie = $fila['Especie'];
                        $edad = $fila['Edad'];
                        $peso = $fila['peso']; 
                        $altura = $fila['altura']; 
                        $genero = $fila['Genero'];
                        $disponible = $fila['Disponible'];
                        echo'
                        <div class="galery__dog">
                <div class="dog__image">
                    <img src="mascotas/'.$img.'" alt="'.$especie.'">
                </div>
                <div class="dog__titulo">
                    <h3>'.$especie.'</h3>
                </div>
                <div class="dog__description">
                    <div class="dog__information">
                        <p>Peso: '. $peso. ' K <br>
                            Edad: '. $edad. ' meses <br>
                            Altura: '. $altura.' cm <br>
                            Genero: '. $genero.' <br>
                            Id: '.$id.'<br>'.
                            $disponible.' 
                        </p>
                    </div>
                    <div class="dog__adoptar">
                        <label for="adopcion'.$contador.'">→</label>
                    </div>
                </div>
            </div>';
            echo'<input class="input" type="checkbox" id="adopcion'.$contador.'">
        <div class="adopcion__modale mod'.$contador.'">
            <label for="adopcion'.$contador.'" class="close">X</label>
            <div class="adopcion__information">       
                <div class="adopcion__img">
                        <img src="mascotas/'.$img.'" alt="'.$especie.'">
                    </div>
                <div class="adopcion__datos">
                    <h2>'.$especie.'</h2>
                    <p>
                        Id: '.$id.'<br>
                        Especie: '.$especie.' <br>
                        Peso: '.$peso.' K <br>
                        Años: '.$edad.' <br>
                        Altura: '.$altura.' cm <br>
                        Genero: '.$genero.' <br>
                        '.$disponible.'
                    </p>
                </div>
                <div class="form__adopcion">
                    <form action="index.php" method="get">
                        <input name="correo" class="ado" type="email" required placeholder="Escribre tu correo electronico">
                        <input name="password" class="ado" type="password" required placeholder="Escribre tu contraseña">
                        <input name="verificar" class="ado ada" type="submit" value="Adoptar">
                    </form>
                </div>
            </div>
        </div>';
        echo'<style>
                #adopcion'.$contador.':checked ~ .mod'.$contador.'{
                    display: flex;
                }
            </style>';
                    }
                }
                ?>
        </section>
    </main>
    <nav id="navegar" class="navegar">
        <h2>Categorias de perros</h2>
        <div class="nav__nav">
            <div class="nav__imgtwo">
            <img src="img/gigante.png" alt="Perro enorme">
        </div>
            <ul class="nav__listwo">
                <li class="list__itemtwo"><a href="Webs/Caballos.php" class="item__vinculotwo">Caballo</a></li>
                <li class="list__itemtwo"><a href="Webs/Perros.php" class="item__vinculotwo">Perro</a></li>
                <li class="list__itemtwo"><a href="Webs/Conejos.php" class="item__vinculotwo">Conejo</a></li>
                <li class="list__itemtwo"><a href="Webs/Gatos.php" class="item__vinculotwo">Gato</a></li>
                <li class="list__itemtwo"><a href="Webs/Pericos.php" class="item__vinculotwo">Perico</a></li>
                <li class="list__itemtwo"><a href="Webs/Perry-corld.php" class="item__vinculotwo">Todos</a></li>
            </ul>
        </div>
    </nav>
    <section id="section__help" class="section__help">
        <div class="help__image">
            <img src="img/perro-blanco.png" alt="Perro blanco">
        </div>
        <div class="help__contenido">
            <details class="details__contenido">
                <summary class="summary__pregunta">¿Quienes somos?</summary>
                <p>Somos una compañia que se dedica a salvaguardar perros callejeros y los llevamos a una casa de refugio donde se cubren sus necesidades habituales</p>
            </details>
            <details class="details__contenido">
                <summary class="summary__pregunta">¿Como adoptar?</summary>
                <p>Puedes adoptar haciendo un click en las flechas de una de las tarjetas de perro y llenando el formulario que se te solicita como usuario y correo electronico</p>
            </details>
            <details class="details__contenido">
                <summary class="summary__pregunta">¿Hay que pagar?</summary>
                <p>No te preocupes no hay necesidadad de realizar ningun pago la adopcion es completamente gratuita</p>
            </details>
            <details class="details__contenido">
                <summary class="summary__pregunta">¿Como funciona la entrega?</summary>
                <p>Una vez que adoptes a tu perro preferido, se te mostrara la direccion de la casa de refugio donde puedes ir a recogerlo.</p>
            </details>
            <details class="details__contenido">
                <summary class="summary__pregunta">¿Habran mas perros disponibles?</summary>
                <p>Desde luego. Proximamente se abilitaran más perros que podras adoptar en transcurso del tiempo</p>
            </details>
            <details class="details__contenido">
                <summary class="summary__pregunta">¿La pagina funciona?</summary>
                <p>Por el momento la pagina es un prototipo aun no se encuentra en funcionamiento actualmente</p>
            </details>
        </div>
    </section>
    <footer id="footer" class="footer">
        <div class="footer__contacts">
            <div class="contact__img">
                <img src="logo/llamada.png" alt="Telefono">
            </div>
            <p>Tel: 8923-1342</p>
        </div>
        <div class="footer__contacts">
            <div class="contact__img">
                <img src="logo/gmail.png" alt="E-mail">
            </div>
            <p>E-mail: wilson@gmail.com</p>
        </div>
            <div class="footer__contacts">
                <div class="contact__img">
                    <img src="logo/derechos-de-autor.png" alt="Autor">
                </div>
                <p>&copy; Copyright Derechos de autor reservados | Marvin Miguel Higueros Najera</p>
            </div>
    </footer>
</body>
</html>
      