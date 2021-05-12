<!DOCTYPE html>
<html lang="es">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="CarlosArturoMT">
    <meta name="DC.creator" content="CarlosArturoMT">
    <meta name="copyright" content="CarlosArturoMT">
    <meta name="description" content="Licenciada en Psicología, especializado en Psicología Clínica.">
    <meta property="og:url" content="https://psicologosDeTexcoco2021.com">
    <meta property="og:type" content="blog">
    <meta property="og:image" content="/assets/imgs/altagraciaColorado.jpg">
    <meta property="og:image:url" content="/assets/imgs/altagraciaColorado.jpg">
    <meta itemprop="image" content="/assets/imgs/altagraciaColorado.jpg">
    <meta name="twitter:image" content="/assets/imgs/altagraciaColorado.jpg">
    <meta itemprop="image" content="/assets/imgs/altagraciaColorado.jpg">
    <title>Psicóloga Altagracia Colorado Díaz</title>
    <link rel="icon " type="image/png " href="https://carlosarturomt.com/assets/imgs/carlosarturomt_logo.png ">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="./css/desktop.css" media="(min-width: 900px)">
</head>

<body>
    <header class="nav_100-fixed">
        <div class="logo">
        <a href="index"><img class="logo" src="https://www.texcocoedomex.gob.mx/img/logo_vive_bien.png" alt="PsicólogosTexcoco"></a>
        </div>
        <nav id="menu">
            <ul class="navTop">
                <li><a href="index">Inicio</a></li>
                <li><a href="#">Terapia Psicológica</a></li>
                <li><a href="#">Terapeutas</a></li>
            </ul>
        </nav>
        <div class="menu-toggle">
            <i class="fa fa-bars"></i>
        </div>
    </header>
    
    <main>
    <section>
            <aside>
                <picture>
                <a href="https://psicologosdetexoco2021.carlosarturomt.com/altagraciaColoradoD"><img class="main-container-photo--agendar" src="/assets/imgs/altagraciaColorado.jpg" alt="Psicólgo CarlosArturoMT"></a>
                </picture>
                <hgroup>
                    <h1 class="contacto-h1 text-blue">Lic. Altagracia Colorado Díaz</h1>
                    <h2 class="contacto-h2"><span class="psique"></span> Psicóloga</h2>
                </hgroup>
            </aside>
        </section>

        <section class="login">
            <section class="login__container">
                <h2>Agendar Cita</h2>
                <form class="login__container--form " action="#" method="POST">
                    <div class="login1">
                        <span class="user"></span>
                        <input class="input--register" type="text" name="nombre" placeholder="Nombre" autocomplete="on" required>
                    </div>
                    <div class="login1">
                        <span class="phone"></span>
                        <input class="input--register" type="tel" name="numero" placeholder="Teléfono" autocomplete="tel" required>
                    </div>
                    <div class="login1">
                        <span class="mail   "></span>
                        <input class="input--register" type="email" name="correo" placeholder="Correo" autocomplete="email" required>
                    </div>
                    <div class="login1">
                        <span class="font"></span>
                        <input class="input--register" type="text" name="mensaje" placeholder="Escribe el Servicio que deseas y déjame tu mensaje" autocomplete="off" required>
                    </div>
                    <button type="submit" name="btn-submit" class="buttonLog">Enviar</button>
                </form>
            </section>
        </section>
        <section>
            <hgroup><h3 class="text-blue">Cómo llegar</h3></hgroup>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d940.1813352330511!2d-98.8804663!3d19.5104491!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1e7b350eeaaab%3A0x42c02f89b3a284e9!2sConsciente%20Colectivo!5e0!3m2!1sen!2smx!4v1619545196608!5m2!1sen!2smx"  allowfullscreen="" loading="lazy"></iframe>
            <p class="iframe"><a href="https://www.google.com/maps/place/Consciente+Colectivo/@19.5104491,-98.8804663,19z/data=!4m5!3m4!1s0x85d1e7b350eeaaab:0x42c02f89b3a284e9!8m2!3d19.5104161!4d-98.8798142?hl=en" target="_blank"><span class="map"></span>Aldama 148 col el Carmen, Texcoco</a></p>
        </section>
    </main>

    <footer>
        <div>
            <h4>© 2021 PsicólogosTexcoco</h4>
            <p>Desarrollado por <a href="https://carlosarturomt.com" target="_blank" rel="noopener">CarlosArturoMT</a></p>
        </div>
    </footer>
</body>
<!-- scripts -->
<script src="js/toggle.js "></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js " integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj " crossorigin="anonymous "></script>
<script src="https://kit.fontawesome.com/2c36e9b7b1.js " crossorigin="anonymous " aria-label="Dark Theme "></script>

</html>

<?php
    if (isset($_POST['btn-submit'])) {

        $asunto = "Interesado en Servicio del la Psicóloga AltagraciaCD.";
        $mensaje = test_input($_POST['mensaje']);
        $numero = test_input($_POST['numero']);
        $nombre = test_input($_POST['nombre']);
        $correo = test_input($_POST['correo']);


        $destino1 = "carlosarturomt@gmail.com, orochimarudelahoja.5600@gmail.com";

        $header = "From: web carlosarturomt" . "\r\n";
        $header = "Reply-To: noreply" . "\r\n";
        $header = "X-Mailer: PHP/" . phpversion();

        $carta = "Mensaje: $mensaje \n";
        $carta .= "Tel. de contacto: $numero \n";
        $carta .= "Nombre del contacto: $nombre \n";
        $carta .= "Correo de contacto: $correo \n";

       
        // $mail1 = mail($destino1, $asunto, $carta, $header);
        $mail1 = mail($destino1, $asunto, $carta, $header);

        if ($mail1) {

            echo "<h2>Mensaje enviado, gracias por contactarme.</h2>";
            echo "<meta http-equiv='refresh' content='3,url=index.html'>";
        } else {
            echo "No se ha podido enviar tu mensaje, intentalo mas tarde";
        }
    }
    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>