<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad PHP</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <header>
        <h1>Actividad PHP</h1>
        <nav>
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="pages/about.php">Acerca de</a></li>
                <li><a href="pages/contact.php">Contacto</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <h1>Bienvenido a la Actividad PHP</h1>

        <?php
        // Generar tres párrafos con PHP
        for ($i = 1; $i <= 3; $i++) {
            echo "<p>Este es el párrafo número $i generado con PHP.</p>";
        }
        ?>
    </main>

    <footer>
        <p>&copy; 2025 Actividad PHP. Todos los derechos reservados.</p>
    </footer>

</body>

</html>