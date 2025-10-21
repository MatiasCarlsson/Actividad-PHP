<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 2 - Estructuras de Control</title>
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
                class="px-4 py-2 bg-green-500 text-white text-sm rounded-full font-medium mb-4 inline-block">Actividad
                #2 - Básico</span>
            <h1 class="text-4xl font-bold text-white mb-4">Estructuras de Control</h1>
            <p class="text-xl text-gray-text max-w-2xl mx-auto">Aprende a usar condicionales y
                bucles para controlar el flujo de tu programa</p>
        </div>

        <!-- Explicación -->
        <div class="bg-dark-surface rounded-2xl p-8 border border-gray-700 mb-8">
            <h2 class="text-2xl font-semibold text-orange-primary mb-6">📚 Explicación</h2>

            <div class="grid lg:grid-cols-2 gap-8">
                <div>
                    <h3 class="text-xl font-semibold text-white mb-4">Condicionales (if/else)</h3>
                    <p class="text-gray-text mb-4">Los condicionales permiten ejecutar código solo
                        si se cumple una condición específica.</p>

                    <div class="bg-dark-bg p-4 rounded-lg mb-4">
                        <pre class="text-sm">
<span class="text-purple-400">&lt;?php</span>
<span class="text-blue-400">if</span> (<span class="text-red-400">$edad</span> >= <span class="text-yellow-400">18</span>) {
    <span class="text-blue-400">echo</span> <span class="text-green-400">"Eres mayor de edad"</span>;
} <span class="text-blue-400">else</span> {
    <span class="text-blue-400">echo</span> <span class="text-green-400">"Eres menor de edad"</span>;
}
<span class="text-purple-400">?></span>
                        </pre>
                    </div>

                    <h3 class="text-xl font-semibold text-white mb-4">Operadores de Comparación</h3>
                    <ul class="text-gray-text space-y-1">
                        <li><code class="text-orange-secondary">==</code> Igual a</li>
                        <li><code class="text-orange-secondary">!=</code> Diferente de</li>
                        <li><code class="text-orange-secondary">></code> Mayor que</li>
                        <li><code class="text-orange-secondary">>=</code> Mayor o igual que</li>
                        <li><code class="text-orange-secondary">&lt;</code> Menor que</li>
                        <li><code class="text-orange-secondary">&lt;=</code> Menor o igual que</li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-xl font-semibold text-white mb-4">Bucles (for/while)</h3>
                    <p class="text-gray-text mb-4">Los bucles permiten repetir código múltiples
                        veces.</p>

                    <div class="bg-dark-bg p-4 rounded-lg mb-4">
                        <pre class="text-sm">


                        <span class="text-purple-400">&lt;?php</span>

                        <span class="text-gray-500">// Bucle for</span>

                        <span class="text-blue-400">for</span> (<span class="text-red-400">$i</span> = <span class="text-yellow-400">1</span>; <span class="text-red-400">$i</span> <= <span class="text-yellow-400">5</span>; <span class="text-red-400">$i</span>++) {
                            <span class="text-blue-400">echo</span> <span class="text-green-400">"Número: $i"</span>;
                        }
                        <span class="text-gray-500">// Bucle while</span>
                        <span class="text-red-400">$contador</span> = <span class="text-yellow-400">1</span>;
                        <span class="text-blue-400">while</span> (<span class="text-red-400">$contador</span> <= <span class="text-yellow-400">3</span>) {
                            <span class="text-blue-400">echo</span> <span class="text-green-400">"Vuelta: $contador"</span>;
                            <span class="text-red-400">$contador</span>++;
                        }
                        <span class="text-purple-400">?></span>
                        </pre>
                    </div>
                </div>
            </div>
        </div>

        <!-- Ejemplo Práctico -->
        <div class="bg-dark-surface rounded-2xl p-8 border border-gray-700 mb-8">
            <h2 class="text-2xl font-semibold text-orange-primary mb-6">💻 Ejemplo Práctico</h2>

            <div class="bg-dark-bg p-6 rounded-lg mb-6">
                <?php
                // Sistema de calificaciones
                $calificaciones = [85, 92, 78, 96, 73];
                $nombres = ["Ana", "Carlos", "María", "José", "Laura"];

                echo "<h3 class='text-white text-lg mb-4'>Sistema de Calificaciones:</h3>";
                echo "<div class='space-y-3'>";

                for ($i = 0; $i < count($calificaciones); $i++) {
                    $nota = $calificaciones[$i];
                    $nombre = $nombres[$i];

                    // Determinar la categoría
                    if ($nota >= 90) {
                        $categoria = "Excelente";
                        $color = "text-green-400";
                    } elseif ($nota >= 80) {
                        $categoria = "Muy Bueno";
                        $color = "text-blue-400";
                    } elseif ($nota >= 70) {
                        $categoria = "Bueno";
                        $color = "text-yellow-400";
                    } else {
                        $categoria = "Necesita Mejorar";
                        $color = "text-red-400";
                    }

                    echo "<div class='bg-dark-surface p-3 rounded border-l-4 border-orange-primary'>";
                    echo "<span class='text-gray-text'>$nombre:</span> ";
                    echo "<span class='text-white font-semibold'>$nota puntos</span> - ";
                    echo "<span class='$color font-medium'>$categoria</span>";
                    echo "</div>";
                }

                // Calcular promedio
                $promedio = array_sum($calificaciones) / count($calificaciones);
                echo "</div>";
                echo "<div class='mt-4 pt-4 border-t border-gray-600'>";
                echo "<p class='text-gray-text'><span class='text-orange-secondary'>Promedio del grupo:</span> " . number_format($promedio, 1) . " puntos</p>";
                echo "</div>";
                ?>
            </div>
        </div>

        <!-- Consigna -->
        <div class="bg-gradient-to-r from-orange-primary to-orange-secondary rounded-2xl p-8 mb-8">
            <h2 class="text-2xl font-semibold text-white mb-6">🎯 Consigna de la Actividad</h2>

            <div class="bg-white/10 backdrop-blur rounded-lg p-6">
                <h3 class="text-xl font-bold text-white mb-4">Crear un Sistema de Evaluación de
                    Productos</h3>

                <div class="space-y-4 text-white">
                    <div>
                        <h4 class="font-semibold mb-2">Parte 1: Clasificación por Precio</h4>
                        <ul class="list-disc list-inside space-y-1 text-sm opacity-90">
                            <li>Crea variables para 5 productos con sus precios</li>
                            <li>Usa condicionales para clasificar cada producto:</li>
                            <li class="ml-6">• Menos de $50: "Económico"</li>
                            <li class="ml-6">• $50-$100: "Precio Medio"</li>
                            <li class="ml-6">• Más de $100: "Premium"</li>
                        </ul>
                    </div>

                    <div>
                        <h4 class="font-semibold mb-2">Parte 2: Sistema de Descuentos</h4>
                        <ul class="list-disc list-inside space-y-1 text-sm opacity-90">
                            <li>Usa un bucle for para aplicar descuentos progresivos</li>
                            <li>1er producto: 5% descuento</li>
                            <li>2do producto: 10% descuento</li>
                            <li>3er producto: 15% descuento (y así sucesivamente)</li>
                            <li>Muestra el precio original y el precio con descuento</li>
                        </ul>
                    </div>

                    <div>
                        <h4 class="font-semibold mb-2">Parte 3: Análisis de Ventas</h4>
                        <ul class="list-disc list-inside space-y-1 text-sm opacity-90">
                            <li>Calcula el total de ventas (suma de precios con descuento)</li>
                            <li>Usa un condicional para determinar el rendimiento:</li>
                            <li class="ml-6">• Más de $400: "Excelentes ventas"</li>
                            <li class="ml-6">• $250-$400: "Buenas ventas"</li>
                            <li class="ml-6">• Menos de $250: "Ventas bajas"</li>
                        </ul>
                    </div>
                </div>

                <div class="mt-6 p-4 bg-white/10 rounded-lg">
                    <p class="text-white font-medium">📋 Entrega: Crea un archivo PHP que muestre
                        toda la información de manera organizada y con colores para cada categoría.
                    </p>
                </div>
            </div>
        </div>

        <!-- Navegación -->
        <div class="flex justify-between items-center">
            <a href="actividad1.php"
                class="inline-flex items-center px-6 py-3 bg-gray-600 text-white rounded-lg hover:bg-gray-500 transition-colors">
                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                        d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                        clip-rule="evenodd" />
                </svg>
                Actividad Anterior
            </a>

            <a href="actividad3.php"
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