<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Sugerencias Vista Móvil</title>
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

    <div class="container" id="sugerencias">
        <h2>Buzón de Sugerencias</h2>
        <p>Si tienes alguna sugerencia para mejorar nuestra plataforma o añadir contenido, no dudes en compartirla con nosotros. ¡Tu opinión es muy importante!</p>

        <?php
        if (!empty($response)) {
            if ($response['type'] === 'success') {
                echo '<div class="message success">' . htmlspecialchars($response['message']) . '</div>';
            } elseif ($response['type'] === 'error') {
                echo '<div class="message error">';
                if (isset($response['messages']) && is_array($response['messages'])) {
                    echo '<ul class="error-list">';
                    foreach ($response['messages'] as $msg) {
                        echo '<li>' . htmlspecialchars($msg) . '</li>';
                    }
                    echo '</ul>';
                } else {
                    echo htmlspecialchars($response['message']); // Fallback por si hay un solo error sin 'messages'
                }
                echo '</div>';
            }
        }
        ?>

        <form method="post" action="sugerencias.php" id="formsugerencias">
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" value="<?= isset($response['old_input']['nombre']) ? htmlspecialchars($response['old_input']['nombre']) : '' ?>" required oninvalid="this.setCustomValidity('Parece que falta tu nombre. ¿Puedes escribirlo, por favor?')" oninput="this.setCustomValidity('')">
            </div>

            <div class="form-group">
                <label for="sugerencia">Tu Sugerencia:</label>
                <textarea id="sugerencia" name="sugerencia" rows="5" cols="40" required oninvalid="this.setCustomValidity('Parece que tu sugerencia está vacía. ¿Puedes contarnos algo, por favor?')" oninput="this.setCustomValidity('')"><?= isset($response['old_input']['sugerencia']) ? htmlspecialchars($response['old_input']['sugerencia']) : '' ?></textarea>
            </div>

            <button type="submit">Enviar sugerencia</button>
        </form>
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