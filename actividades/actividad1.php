<?php
$pageTitle = 'Actividad 1 - Variables y Tipos de Datos';
$basePath = '../';
include '../components/header.php';
?>

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
                #1 - Básico</span>
            <h1 class="text-4xl font-bold text-white mb-4">Variables y Tipos de Datos</h1>
            <p class="text-xl text-gray-text max-w-2xl mx-auto">Aprende sobre variables, tipos de
                datos y operadores básicos en PHP</p>
        </div>

        <!-- Contenido de la Actividad -->
        <div class="grid lg:grid-cols-2 gap-8">
            <!-- Teoría -->
            <div class="bg-dark-surface rounded-2xl p-8 border border-gray-700">
                <h2 class="text-2xl font-semibold text-orange-primary mb-6">Conceptos Básicos</h2>

                <div class="space-y-6">
                    <div>
                        <h3 class="text-lg font-semibold text-white mb-3">Variables en PHP</h3>
                        <p class="text-gray-text mb-3">En PHP, las variables se declaran con el
                            símbolo <code
                                class="bg-dark-bg px-2 py-1 rounded text-orange-secondary">$</code>
                        </p>
                        <div class="bg-dark-bg p-4 rounded-lg">
                            <code class="text-green-400">
                                $nombre = "Juan";<br>
                                $edad = 25;<br>
                                $precio = 19.99;
                            </code>
                        </div>
                    </div>

                    <div>
                        <h3 class="text-lg font-semibold text-white mb-3">Tipos de Datos</h3>
                        <ul class="space-y-2 text-gray-text">
                            <li><span class="text-orange-secondary">String:</span> Cadenas de texto
                            </li>
                            <li><span class="text-orange-secondary">Integer:</span> Números enteros
                            </li>
                            <li><span class="text-orange-secondary">Float:</span> Números decimales
                            </li>
                            <li><span class="text-orange-secondary">Boolean:</span> true o false
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Práctica -->
            <div class="bg-dark-surface rounded-2xl p-8 border border-gray-700">
                <h2 class="text-2xl font-semibold text-orange-primary mb-6">Ejemplo Práctico</h2>

                <div class="bg-dark-bg p-6 rounded-lg mb-6">
                    <?php
                    // Variables de ejemplo
                    $nombre = 'María García';
                    $edad = 28;
                    $salario = 45000.5;
                    $esActivo = true;

                    echo "<h3 class='text-white text-lg mb-4'>Información del Empleado:</h3>";
                    echo "<div class='space-y-2'>";
                    echo "<p class='text-gray-text'><span class='text-orange-secondary'>Nombre:</span> $nombre</p>";
                    echo "<p class='text-gray-text'><span class='text-orange-secondary'>Edad:</span> $edad años</p>";
                    echo "<p class='text-gray-text'><span class='text-orange-secondary'>Salario:</span> $" .
                        number_format($salario, 2) .
                        '</p>';
                    echo "<p class='text-gray-text'><span class='text-orange-secondary'>Estado:</span> " .
                        ($esActivo ? 'Activo' : 'Inactivo') .
                        '</p>';
                    echo '</div>';

                    // Operaciones básicas
                    $salarioMensual = $salario / 12;
                    echo "<div class='mt-4 pt-4 border-t border-gray-600'>";
                    echo "<p class='text-gray-text'><span class='text-orange-secondary'>Salario Mensual:</span> $" .
                        number_format($salarioMensual, 2) .
                        '</p>';
                    echo '</div>';
                    ?>
                </div>

                <!-- Código Fuente -->
                <div class="bg-gray-900 p-4 rounded-lg text-sm overflow-x-auto">
                    <pre class="text-gray-300">

<span class="text-purple-400">&lt;?php</span>
<span class="text-gray-500">// Variables de ejemplo</span>
<span class="text-red-400">$nombre</span> = <span class="text-green-400">"María García"</span>;
<span class="text-red-400">$edad</span> = <span class="text-yellow-400">28</span>;
<span class="text-red-400">$salario</span> = <span class="text-yellow-400">45000.50</span>;
<span class="text-red-400">$esActivo</span> = <span class="text-blue-400">true</span>;
<span class="text-gray-500">// Mostrar información</span>
<span class="text-blue-400">echo</span> <span class="text-green-400">"Nombre: $nombre"</span>;
<span class="text-blue-400">echo</span> <span class="text-green-400">"Edad: $edad años"</span>;
<span class="text-gray-500">// Operaciones</span>
<span class="text-red-400">$salarioMensual</span> = <span class="text-red-400">$salario</span> / <span class="text-yellow-400">12</span>;
<span class="text-purple-400">?&gt;</span>
                    </pre>
                </div>
            </div>
        </div>

        <!-- Ejercicios -->
        <div class="mt-8 bg-dark-surface rounded-2xl p-8 border border-gray-700">
            <h2 class="text-2xl font-semibold text-orange-primary mb-6">Ejercicios para Practicar
            </h2>

            <div class="grid md:grid-cols-2 gap-6">
                <div class="bg-dark-bg p-6 rounded-lg">
                    <h3 class="text-lg font-semibold text-white mb-3">Ejercicio 1</h3>
                    <p class="text-gray-text mb-4">Crea variables para almacenar información de un
                        producto (nombre, precio, stock) y muéstralas.</p>
                    <div class="text-sm text-orange-secondary">💡 Tip: Usa diferentes tipos de datos
                    </div>
                </div>

                <div class="bg-dark-bg p-6 rounded-lg">
                    <h3 class="text-lg font-semibold text-white mb-3">Ejercicio 2</h3>
                    <p class="text-gray-text mb-4">Calcula el área de un rectángulo usando variables
                        para alto y ancho.</p>
                    <div class="text-sm text-orange-secondary">💡 Tip: área = alto × ancho</div>
                </div>
            </div>
        </div>

        <!-- Navegación -->
        <div class="flex justify-between items-center mt-12">
            <a href="index.php"
                class="inline-flex items-center px-6 py-3 bg-gray-600 text-white rounded-lg hover:bg-gray-500 transition-colors">
                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                        d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z"
                        clip-rule="evenodd" />
                </svg>
                Volver al Índice
            </a>

            <span class="text-orange-primary font-semibold">Actividad 1 de 6</span>

            <a href="actividad2.php"
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

<?php include '../components/footer.php'; ?>
