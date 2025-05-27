<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Padres Vista Móvil</title>
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

    <div class="container" id="padres">
      <h3>¿Qué es el TEA y cómo podemos acompañar a los niños que lo presentan?</h3>

      <p>
        El Trastorno del Espectro Autista (TEA) no es una enfermedad, sino una condición del neurodesarrollo que afecta la forma en la que una persona se comunica, se relaciona con los demás y percibe el mundo que la rodea. Cada niño con TEA es único: algunos pueden tener dificultades para hablar, otros pueden preferir jugar solos, o tener una sensibilidad especial a ciertos sonidos, luces o texturas. No existe una única forma de ser autista, por eso se habla de un "espectro".
      </p>

      <p>
        Como madres, padres, docentes o acompañantes, a veces no sabemos por dónde empezar. Pero lo más importante es comprender que estos niños no necesitan que los cambiemos, sino que los entendamos, los aceptemos y creemos entornos donde puedan sentirse seguros, valorados y respetados.
      </p>

      <h3>¿Cómo podemos ayudar?</h3>
      <ul>
        <li><strong>Escucha y observa</strong>: Cada niño tiene su propio ritmo. Prestar atención a sus intereses y formas de comunicarse (aunque no sean con palabras) es clave.</li>
        <br><li><strong>Estructura y rutinas</strong>: Les ayuda a sentirse más seguros y a anticipar lo que va a pasar.</li>
        <br><li><strong>Lenguaje claro y visual</strong>: Usar imágenes, gestos y frases cortas puede facilitar la comprensión.</li>
        <br><li><strong>Respeto a sus tiempos y necesidades sensoriales</strong>: Si un lugar está muy ruidoso o brillante, puede resultar abrumador para ellos.</li>
        <br><li><strong>Juegos adaptados</strong>: Existen muchos juegos interactivos y herramientas diseñadas especialmente para niños con TEA que estimulan su desarrollo emocional y social.</li>
        <br><li><strong>Apoyo emocional a la familia</strong>: Acompañar a un niño con TEA puede ser todo un desafío, pero también una experiencia profundamente enriquecedora. Rodearse de redes de apoyo y profesionales marca la diferencia.</li>
      </ul>

      <h3>Páginas de ayuda y recursos útiles</h3>
      <ul>
        <li><a href="https://www.autismo.org.es" target="_blank">Autismo España</a> – Información actualizada, servicios y derechos.</li>
        <br><li><a href="https://www.fundacionmiradas.org" target="_blank">Fundación Miradas</a> – Recursos educativos y talleres para familias.</li>
        <br><li><a href="https://www.teayotrasmiradas.org" target="_blank">Tea y otras Miradas</a> – Comunidad inclusiva con guías, cuentos y herramientas prácticas.</li>
        <br><li><a href="https://autismodiario.org" target="_blank">Autismo Diario</a> – Artículos de actualidad, experiencias y consejos escritos por padres y expertos.</li>
        <br><li><strong>Asociaciones locales</strong>: Muchas ciudades y regiones tienen asociaciones específicas que ofrecen terapias, actividades y apoyo personalizado. ¡Busca la más cercana!</li>
      </ul>
    </div>

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