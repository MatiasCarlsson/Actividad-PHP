<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividades - PHP</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'dark-bg': '#1a1a1a',
                        'dark-surface': '#2a2a2a',
                        'orange-primary': '#ff6b35',
                        'orange-secondary': '#ff8c42',
                        'gray-text': '#a0a0a0'
                    }
                }
            }
        }
    </script>
</head>

<body class="bg-dark-bg text-white min-h-screen">
    <!-- Header -->
    <header class="bg-dark-surface shadow-lg border-b-2 border-orange-primary">
        <div class="container mx-auto px-6 py-4">
            <div class="flex items-center justify-between">
                <h1 class="text-3xl font-bold text-orange-primary">Actividad PHP</h1>
                <nav>
                    <ul class="flex space-x-8">
                        <li><a href="../index.php"
                                class="text-white hover:text-orange-primary transition-colors duration-300 font-medium">Inicio</a>
                        </li>
                        <li><a href="index.php"
                                class="text-orange-secondary hover:text-orange-primary transition-colors duration-300 font-medium">Actividades</a>
                        </li>
                        <li><a href="../pages/about.php"
                                class="text-white hover:text-orange-primary transition-colors duration-300 font-medium">Acerca
                                de</a></li>
                        <li><a href="../pages/contact.php"
                                class="text-white hover:text-orange-primary transition-colors duration-300 font-medium">Contacto</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container mx-auto px-6 py-12">
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold text-white mb-4">Actividades PHP</h1>
            <p class="text-xl text-gray-text max-w-2xl mx-auto">Explora nuestras actividades
                prácticas de desarrollo web con PHP</p>
        </div>

        <!-- Activities Grid -->
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
            <?php
            // Array de actividades
            $actividades = [
                [
                    'id' => 1,
                    'titulo' => 'Variables y Tipos de Datos',
                    'descripcion' => 'Aprende sobre variables, tipos de datos y operadores en PHP.',
                    'nivel' => 'Básico',
                    'archivo' => 'actividad1.php',
                ],
                [
                    'id' => 2,
                    'titulo' => 'Estructuras de Control',
                    'descripcion' => 'Domina los condicionales y bucles en PHP.',
                    'nivel' => 'Básico',
                    'archivo' => 'actividad2.php',
                ],
                [
                    'id' => 3,
                    'titulo' => 'Funciones en PHP',
                    'descripcion' => 'Crea y utiliza funciones para organizar tu código.',
                    'nivel' => 'Intermedio',
                    'archivo' => 'actividad3.php',
                ],
                [
                    'id' => 4,
                    'titulo' => 'Arrays y Manipulación',
                    'descripcion' => 'Trabaja con arrays y sus funciones de manipulación.',
                    'nivel' => 'Intermedio',
                    'archivo' => 'actividad4.php',
                ],
                [
                    'id' => 5,
                    'titulo' => 'Formularios y $_POST',
                    'descripcion' => 'Procesa formularios y maneja datos del usuario.',
                    'nivel' => 'Intermedio',
                    'archivo' => 'actividad5.php',
                ],
                [
                    'id' => 6,
                    'titulo' => 'Sesiones y Cookies',
                    'descripcion' => 'Maneja sesiones de usuario y cookies en PHP.',
                    'nivel' => 'Avanzado',
                    'archivo' => 'actividad6.php',
                ],
            ];

            // Mostrar actividades dinámicamente
            foreach ($actividades as $actividad) {
                $colorNivel = '';
                switch ($actividad['nivel']) {
                    case 'Básico':
                        $colorNivel = 'bg-green-500';
                        break;
                    case 'Intermedio':
                        $colorNivel = 'bg-orange-primary';
                        break;
                    case 'Avanzado':
                        $colorNivel = 'bg-red-500';
                        break;
                }

                echo "<div class='bg-dark-surface rounded-xl p-6 border border-gray-700 hover:border-orange-primary transition-all duration-300 transform hover:scale-105'>";
                echo "<div class='flex justify-between items-start mb-4'>";
                echo "<h3 class='text-xl font-semibold text-white'>{$actividad['titulo']}</h3>";
                echo "<span class='px-3 py-1 {$colorNivel} text-white text-sm rounded-full font-medium'>{$actividad['nivel']}</span>";
                echo '</div>';
                echo "<p class='text-gray-text mb-4'>{$actividad['descripcion']}</p>";
                echo "<div class='flex justify-between items-center'>";
                echo "<span class='text-orange-secondary font-medium'>Actividad #{$actividad['id']}</span>";
                echo "<a href='{$actividad['archivo']}' class='bg-orange-primary text-white px-4 py-2 rounded-lg hover:bg-orange-secondary transition-colors duration-300'>Comenzar</a>";
                echo '</div>';
                echo '</div>';
            }
            ?>
        </div>

        <!-- Stats Section -->
        <div class="bg-dark-surface rounded-2xl p-8 border border-gray-700">
            <h2 class="text-2xl font-semibold text-orange-primary mb-6 text-center">Estadísticas del
                Curso</h2>
            <div class="grid md:grid-cols-3 gap-6">
                <div class="text-center">
                    <div class="text-3xl font-bold text-orange-primary mb-2">
                        <?php echo count($actividades); ?>
                    </div>
                    <p class="text-gray-text">Actividades Disponibles</p>
                </div>
                <div class="text-center">
                    <div class="text-3xl font-bold text-orange-secondary mb-2">
                        <?php
                        $niveles = array_count_values(array_column($actividades, 'nivel'));
                        echo count($niveles);
                        ?>
                    </div>
                    <p class="text-gray-text">Niveles de Dificultad</p>
                </div>
                <div class="text-center">
                    <div class="text-3xl font-bold text-green-500 mb-2">100%</div>
                    <p class="text-gray-text">Contenido Gratuito</p>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-dark-surface border-t-2 border-orange-primary mt-12">
        <div class="container mx-auto px-6 py-8">
            <div class="text-center">
                <p class="text-gray-text">&copy; 2025 Actividad PHP. Todos los derechos reservados.
                </p>
                <p class="text-sm text-gray-500 mt-2">Desarrollado con PHP y Tailwind CSS</p>
            </div>
        </div>
    </footer>

</body>

</html>