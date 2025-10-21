<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 3 - Funciones en PHP</title>
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
        <div class="mb-8">
            <a href="index.php"
                class="inline-flex items-center text-orange-primary hover:text-orange-secondary transition-colors">
                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                        d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z"
                        clip-rule="evenodd" />
                </svg>
                Volver a Actividades
            </a>
        </div>

        <div class="text-center mb-12">
            <span
                class="px-4 py-2 bg-orange-primary text-white text-sm rounded-full font-medium mb-4 inline-block">Actividad
                #3 - Intermedio</span>
            <h1 class="text-4xl font-bold text-white mb-4">Funciones en PHP</h1>
            <p class="text-xl text-gray-text max-w-2xl mx-auto">Aprende a crear y utilizar funciones
                para organizar y reutilizar tu código</p>
        </div>

        <!-- Explicación -->
        <div class="bg-dark-surface rounded-2xl p-8 border border-gray-700 mb-8">
            <h2 class="text-2xl font-semibold text-orange-primary mb-6">📚 Explicación</h2>

            <div class="grid lg:grid-cols-2 gap-8">
                <div>
                    <h3 class="text-xl font-semibold text-white mb-4">¿Qué son las Funciones?</h3>
                    <p class="text-gray-text mb-4">Las funciones son bloques de código reutilizable
                        que realizan una tarea específica. Permiten organizar mejor el código y
                        evitar repeticiones.</p>

                    <div class="bg-dark-bg p-4 rounded-lg mb-4">
                        <pre class="text-sm">
<span class="text-purple-400">&lt;?php</span>
<span class="text-blue-400">function</span> <span class="text-yellow-400">saludar</span>(<span class="text-red-400">$nombre</span>) {
    <span class="text-blue-400">return</span> <span class="text-green-400">"Hola, "</span> . <span class="text-red-400">$nombre</span> . <span class="text-green-400">"!"</span>;
}

<span class="text-gray-500">// Llamar la función</span>
<span class="text-blue-400">echo</span> <span class="text-yellow-400">saludar</span>(<span class="text-green-400">"María"</span>);
<span class="text-purple-400">?></span>
                        </pre>
                    </div>

                    <h3 class="text-xl font-semibold text-white mb-4">Parámetros y Argumentos</h3>
                    <ul class="text-gray-text space-y-2">
                        <li><strong>Parámetros:</strong> Variables definidas en la función</li>
                        <li><strong>Argumentos:</strong> Valores pasados al llamar la función</li>
                        <li><strong>Return:</strong> Devuelve un valor desde la función</li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-xl font-semibold text-white mb-4">Tipos de Funciones</h3>

                    <div class="space-y-4">
                        <div class="bg-dark-bg p-4 rounded-lg">
                            <h4 class="text-orange-secondary font-semibold mb-2">Sin parámetros:
                            </h4>
                            <pre class="text-sm">
<span class="text-blue-400">function</span> <span class="text-yellow-400">obtenerFecha</span>() {
    <span class="text-blue-400">return</span> <span class="text-yellow-400">date</span>(<span class="text-green-400">"Y-m-d"</span>);
}
                            </pre>
                        </div>

                        <div class="bg-dark-bg p-4 rounded-lg">
                            <h4 class="text-orange-secondary font-semibold mb-2">Con múltiples
                                parámetros:</h4>
                            <pre class="text-sm">
<span class="text-blue-400">function</span> <span class="text-yellow-400">calcularArea</span>(<span class="text-red-400">$ancho</span>, <span class="text-red-400">$alto</span>) {
    <span class="text-blue-400">return</span> <span class="text-red-400">$ancho</span> * <span class="text-red-400">$alto</span>;
}
                            </pre>
                        </div>

                        <div class="bg-dark-bg p-4 rounded-lg">
                            <h4 class="text-orange-secondary font-semibold mb-2">Con valor por
                                defecto:</h4>
                            <pre class="text-sm">
<span class="text-blue-400">function</span> <span class="text-yellow-400">potencia</span>(<span class="text-red-400">$numero</span>, <span class="text-red-400">$exponente</span> = <span class="text-yellow-400">2</span>) {
    <span class="text-blue-400">return</span> <span class="text-yellow-400">pow</span>(<span class="text-red-400">$numero</span>, <span class="text-red-400">$exponente</span>);
}
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Ejemplo Práctico -->
        <div class="bg-dark-surface rounded-2xl p-8 border border-gray-700 mb-8">
            <h2 class="text-2xl font-semibold text-orange-primary mb-6">💻 Ejemplo Práctico</h2>

            <div class="bg-dark-bg p-6 rounded-lg mb-6">
                <?php
                // Funciones para un sistema de biblioteca

                function calcularMulta($diasRetraso, $multaPorDia = 2.5)
                {
                    if ($diasRetraso <= 0) {
                        return 0;
                    }
                    return $diasRetraso * $multaPorDia;
                }

                function formatearTitulo($titulo)
                {
                    return strtoupper($titulo);
                }

                function generarCodigoLibro($genero, $numero)
                {
                    $codigoGenero = [
                        'ficcion' => 'FIC',
                        'ciencia' => 'CIE',
                        'historia' => 'HIS',
                        'arte' => 'ART',
                    ];

                    $prefijo = $codigoGenero[$genero] ?? 'GEN';
                    return $prefijo . '-' . str_pad($numero, 4, '0', STR_PAD_LEFT);
                }

                function evaluarEstadoLibro($diasPrestado)
                {
                    if ($diasPrestado <= 7) {
                        return ['estado' => 'A tiempo', 'color' => 'text-green-400'];
                    } elseif ($diasPrestado <= 14) {
                        return ['estado' => 'Próximo a vencer', 'color' => 'text-yellow-400'];
                    } else {
                        return ['estado' => 'Atrasado', 'color' => 'text-red-400'];
                    }
                }

                // Datos de ejemplo
                $libros = [
                    [
                        'titulo' => 'cien años de soledad',
                        'genero' => 'ficcion',
                        'numero' => 123,
                        'dias' => 5,
                    ],
                    [
                        'titulo' => 'breve historia del tiempo',
                        'genero' => 'ciencia',
                        'numero' => 456,
                        'dias' => 10,
                    ],
                    [
                        'titulo' => 'el arte de la guerra',
                        'genero' => 'historia',
                        'numero' => 789,
                        'dias' => 18,
                    ],
                ];

                echo "<h3 class='text-white text-lg mb-4'>Sistema de Biblioteca:</h3>";
                echo "<div class='space-y-4'>";

                foreach ($libros as $libro) {
                    $tituloFormateado = formatearTitulo($libro['titulo']);
                    $codigo = generarCodigoLibro($libro['genero'], $libro['numero']);
                    $estadoInfo = evaluarEstadoLibro($libro['dias']);
                    $multa = calcularMulta($libro['dias'] - 7); // 7 días es el límite

                    echo "<div class='bg-dark-surface p-4 rounded-lg border-l-4 border-orange-primary'>";
                    echo "<div class='flex justify-between items-start'>";
                    echo '<div>';
                    echo "<h4 class='text-white font-semibold'>$tituloFormateado</h4>";
                    echo "<p class='text-gray-text text-sm'>Código: $codigo</p>";
                    echo "<p class='text-gray-text text-sm'>Días prestado: {$libro['dias']}</p>";
                    echo '</div>';
                    echo "<div class='text-right'>";
                    echo "<span class='{$estadoInfo['color']} font-medium'>{$estadoInfo['estado']}</span>";
                    if ($multa > 0) {
                        echo "<p class='text-red-400 text-sm'>Multa: $" .
                            number_format($multa, 2) .
                            '</p>';
                    }
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                }

                echo '</div>';
                ?>
            </div>
        </div>

        <!-- Consigna -->
        <div class="bg-gradient-to-r from-orange-primary to-orange-secondary rounded-2xl p-8 mb-8">
            <h2 class="text-2xl font-semibold text-white mb-6">🎯 Consigna de la Actividad</h2>

            <div class="bg-white/10 backdrop-blur rounded-lg p-6">
                <h3 class="text-xl font-bold text-white mb-4">Sistema de Gestión de Empleados</h3>

                <div class="space-y-4 text-white">
                    <div>
                        <h4 class="font-semibold mb-2">Funciones a Crear:</h4>
                        <div class="grid md:grid-cols-2 gap-4 text-sm">
                            <div class="bg-white/10 p-3 rounded">
                                <strong>1. calcularSalarioNeto($salarioBruto, $descuentos =
                                    0.15)</strong>
                                <p class="opacity-90">Calcula el salario después de descuentos (15%
                                    por defecto)</p>
                            </div>
                            <div class="bg-white/10 p-3 rounded">
                                <strong>2. generarEmail($nombre, $apellido, $dominio =
                                    "empresa.com")</strong>
                                <p class="opacity-90">Genera email: nombre.apellido@dominio</p>
                            </div>
                            <div class="bg-white/10 p-3 rounded">
                                <strong>3. calcularAntiguedad($fechaIngreso)</strong>
                                <p class="opacity-90">Calcula años de antigüedad desde la fecha de
                                    ingreso</p>
                            </div>
                            <div class="bg-white/10 p-3 rounded">
                                <strong>4. determinarCategoria($antiguedad)</strong>
                                <p class="opacity-90">Categoriza: Junior (&lt;2 años), Semi-Senior
                                    (2-5), Senior (&gt;5)</p>
                            </div>
                            <div class="bg-white/10 p-3 rounded">
                                <strong>5. calcularVacaciones($antiguedad)</strong>
                                <p class="opacity-90">14 días base + 1 día por cada año de
                                    antigüedad</p>
                            </div>
                            <div class="bg-white/10 p-3 rounded">
                                <strong>6. formatearNombreCompleto($nombre, $apellido)</strong>
                                <p class="opacity-90">Formato: "APELLIDO, Nombre"</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h4 class="font-semibold mb-2">Datos de Prueba (mínimo 4 empleados):</h4>
                        <ul class="list-disc list-inside space-y-1 text-sm opacity-90">
                            <li>Nombres y apellidos</li>
                            <li>Fechas de ingreso diferentes</li>
                            <li>Salarios brutos variados</li>
                            <li>Algunos con descuentos personalizados</li>
                        </ul>
                    </div>

                    <div>
                        <h4 class="font-semibold mb-2">Mostrar para cada empleado:</h4>
                        <ul class="list-disc list-inside space-y-1 text-sm opacity-90">
                            <li>Nombre completo formateado</li>
                            <li>Email generado</li>
                            <li>Años de antigüedad</li>
                            <li>Categoría (Junior/Semi-Senior/Senior)</li>
                            <li>Salario bruto y neto</li>
                            <li>Días de vacaciones</li>
                        </ul>
                    </div>
                </div>

                <div class="mt-6 p-4 bg-white/10 rounded-lg">
                    <p class="text-white font-medium">📋 Bonus: Crea una función adicional que
                        calcule el promedio de salarios del equipo y muestre estadísticas generales.
                    </p>
                </div>
            </div>
        </div>

        <!-- Navegación -->
        <div class="flex justify-between items-center">
            <a href="actividad2.php"
                class="inline-flex items-center px-6 py-3 bg-gray-600 text-white rounded-lg hover:bg-gray-500 transition-colors">
                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                        d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                        clip-rule="evenodd" />
                </svg>
                Actividad Anterior
            </a>

            <a href="actividad4.php"
                class="inline-flex items-center px-6 py-3 bg-orange-primary text-white rounded-lg hover:bg-orange-secondary transition-colors">
                Siguiente Actividad
                <svg class="w-5 h-5 ml-2" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                        clip-rule="evenodd" />
                </svg>
            </a>
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