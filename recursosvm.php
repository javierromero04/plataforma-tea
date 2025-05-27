<?php session_start(); 
$pictogramas = [
  'Emociones' => [
    ['nombre' => 'Feliz', 'archivo' => 'img/feliz.png'],
    ['nombre' => 'Triste', 'archivo' => 'img/triste.png'],
    ['nombre' => 'Enfadado', 'archivo' => 'img/enfadado.png'],
    ['nombre' => 'Asustado', 'archivo' => 'img/asustado.png'],
    ['nombre' => 'Ansiedad', 'archivo' => 'img/ansioso.png'],
  ],
  'Rutinas Diarias' => [
    ['nombre' => 'Desayuno', 'archivo' => 'img/desayuno.png'],
    ['nombre' => 'Cepillarse los dientes', 'archivo' => 'img/cepillarse.png'],
    ['nombre' => 'Vestirse', 'archivo' => 'img/vestirse.png'],
    ['nombre' => 'Ir al colegio', 'archivo' => 'img/cole.png'],
    ['nombre' => 'Ir al baño', 'archivo' => 'img/retrete.png'],
  ],
  'Necesidades' => [
    ['nombre' => 'Tengo sed', 'archivo' => 'img/sed.png'],
    ['nombre' => 'Tengo hambre', 'archivo' => 'img/hambre.png'],
    ['nombre' => 'Quiero descansar', 'archivo' => 'img/descansar.png'],
    ['nombre' => 'Necesito ayuda', 'archivo' => 'img/ayuda.png'],
    ['nombre' => 'Me molesta el ruido', 'archivo' => 'img/ruidoso.png'],
  ],
];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Recursos Vista Móvil</title>
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

    <div class="container-recursos">
      <h1 class="h1vm">Pictogramas descargables para niños con TEA</h1>
      <p id="pvm">Haz clic en los botones para descargar los pictogramas que necesites. Son ideales para crear rutinas visuales, reforzar el lenguaje o facilitar la comunicación.</p>

      <?php foreach ($pictogramas as $categoria => $imagenes): ?>
        <h2 class="h2vm"><?php echo $categoria; ?></h2>
        <div class="galeria">
          <?php foreach ($imagenes as $picto): ?>
            <div class="pictograma">
              <img src="<?php echo $picto['archivo']; ?>" alt="<?php echo $picto['nombre']; ?>">
              <p><?php echo $picto['nombre']; ?></p>
              <a href="<?php echo $picto['archivo']; ?>" download class="boton">Descargar</a>
            </div>
          <?php endforeach; ?>
        </div>
      <?php endforeach; ?>
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