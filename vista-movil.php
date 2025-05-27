<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Vista Móvil</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="vista-movil.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <header>
    <h1>🌈 Plataforma Infantil para Niños con TEA 🌟</h1>
    <div id="menuSimulador" class="menu-simulador">
        <div class="hamburguesa" onclick="toggleMenuSimulador()">☰</div>
            <ul id="opcionesSimulador" class="opciones oculto">
                <li><a href="indexvm.php"><i class="fas fa-home"></i> Inicio</a></li>
                <li><a href="recursosvm.php"><i class="fas fa-book"></i> Recursos</a></li>
                <li><a href="padresvm.php"><i class="fas fa-user-friends"></i> Para Padres</a></li>
                <li><a href="forovm.php"><i class="fas fa-comments"></i> Foro</a></li>
                <li><a href="juegosvm.php"><i class="fas fa-gamepad"></i> Juegos</a></li>
                <li><a href="contactovm.php"><i class="fas fa-envelope"></i> Escríbenos</a></li>
                <li><a href="sugerenciasvm.php"><i class="fas fa-lightbulb"></i> Buzón de Sugerencias</a></li>
                <li><a href="proyectovm.php"><i class="fas fa-info-circle"></i> Sobre el Proyecto</a></li>
                <li><a href="#" onclick="toggleMenuSimulador();"><i class="fas fa-times-circle"></i> Cerrar Menú</a></li>
            </ul>
        </div>
    </div>

    <main>
        <div class="container" id="contenido-vista-movil">
            <h3> 🌟 Bienvenidos a un espacio pensado con amor y comprensión </h3>
            <p> En este sitio encontrarás un entorno amigable, diseñado especialmente para apoyar a niños con Trastorno del Espectro Autista (TEA) en su desarrollo emocional, cognitivo y social.
                Creemos firmemente que cada niño tiene un mundo único por descubrir, y nuestro objetivo es brindar herramientas, juegos interactivos y recursos visuales que estimulen sus habilidades de una manera divertida, estructurada y segura.
                Aquí, tanto familias como educadores encontrarán actividades pensadas para fortalecer la comunicación, la memoria, el reconocimiento de emociones y mucho más. Queremos ser parte de ese acompañamiento diario, aportando nuestro granito de arena para que cada niño pueda aprender, expresarse y crecer a su propio ritmo.
                Gracias por confiar en nosotros. 💙
            </p>
        </div>
    </main>

    <footer>
        <p>&copy; Ayuda para Niños con Autismo. Todos los derechos reservados.</p>
        <div>
            <a href="politica-privacidad.php">Política de Privacidad</a>
            <a href="aviso-legal.php">Aviso Legal</a>
            <a href="politica-cookies.php">Política de Cookies</a>
        </div>
    </footer>

    <script src="script.js"></script>
    <script src="scriptvm.js"></script>
</body>
</html>
