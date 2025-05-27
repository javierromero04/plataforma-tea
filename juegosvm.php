<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Juegos Vista Móvil</title>
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

    <section id="juegos">
        <div class="containervm">
            <h2>Juegos</h2>
            <div class="game">
                <h3>Encuentra las Parejas</h3>
                <p><strong>Instrucciones:</strong> Haz clic en dos cartas para voltearlas. Si son iguales, se quedarán visibles. Si no, se voltearán de nuevo. ¡Encuentra todas las parejas para ganar!</p>
                <div id="memory-board" class="game-container"></div>
                <button id="new-game-memory">Nueva partida</button>
            </div>
            <div class="game">
                <h3>Rompecabezas</h3>
                <p><strong>Instrucciones:</strong> Haz clic en las piezas para moverlas al espacio vacío y reordénalas hasta formar la secuencia numérica correcta (0, 1, 2, 3... el 0 es el espacio vacío).</p>
                <div id="puzzle" class="game-container"></div>
                <button id="new-game">Nueva partida</button>
            </div>
            <div class="game">
                <h3>Juego de Memoria</h3>
                <p><strong>Instrucciones:</strong> El juego te mostrará una secuencia de colores que se iluminan. Recuerda el orden y repítelo haciendo clic en los botones. ¡Cada nivel la secuencia se hará más larga!</p>
                <div id="game-container">
                    <button id="red" class="color-button" style="background-color: red;"></button>
                    <button id="blue" class="color-button" style="background-color: blue;"></button>
                    <button id="green" class="color-button" style="background-color: green;"></button>
                    <button id="yellow" class="color-button" style="background-color: yellow;"></button>
                    <p id="message"></p>
                    <button id="start">Comenzar Juego</button>
            </div>
            <div class="game">
                <h3>Identifica la Emoción</h3>
                <p><strong>Instrucciones:</strong> Observa el emoji y selecciona la emoción que representa entre las opciones disponibles.</p>
                <div id="emotion-game">
                    <div id="emoji-display"></div>
                    <div id="emotion-options">
                        <button>Feliz</button>
                        <button>Triste</button>
                        <button>Enfadado</button>
                        <button>Asustado</button>
                        <button>Contento</button>
                    </div>
                    <div id="emotion-message"></div>
                </div>
            </div>
        </div>
    </section>

    <footer id="vm">
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