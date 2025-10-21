<?php
$pageTitle = 'Actividad 4 - Arrays y Manipulación';
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
                class="px-4 py-2 bg-orange-primary text-white text-sm rounded-full font-medium mb-4 inline-block">Actividad
                #4 - Intermedio</span>
            <h1 class="text-4xl font-bold text-white mb-4">Arrays y Manipulación</h1>
            <p class="text-xl text-gray-text max-w-2xl mx-auto">Domina los arrays y aprende a
                manipular colecciones de datos de manera eficiente</p>
        </div>

        <!-- Explicación -->
        <div class="bg-dark-surface rounded-2xl p-8 border border-gray-700 mb-8">
            <h2 class="text-2xl font-semibold text-orange-primary mb-6">📚 Explicación</h2>

            <div class="grid lg:grid-cols-2 gap-8">
                <div>
                    <h3 class="text-xl font-semibold text-white mb-4">Arrays Indexados</h3>
                    <p class="text-gray-text mb-4">Arrays con índices numéricos que empiezan en 0.
                    </p>

                    <div class="bg-dark-bg p-4 rounded-lg mb-4">
                        <pre class="text-sm">
<span class="text-purple-400">&lt;?php</span>
<span class="text-gray-500">// Crear array</span>
<span class="text-red-400">$frutas</span> = [<span class="text-green-400">"manzana"</span>, <span class="text-green-400">"naranja"</span>, <span class="text-green-400">"plátano"</span>];
<span class="text-gray-500">// Acceder a elementos</span>
<span class="text-blue-400">echo</span> <span class="text-red-400">$frutas</span>[<span class="text-yellow-400">0</span>]; <span class="text-gray-500">// "manzana"</span>
<span class="text-gray-500">// Agregar elemento</span>
<span class="text-red-400">$frutas</span>[] = <span class="text-green-400">"uva"</span>;
<span class="text-purple-400">?></span>
                        </pre>
                    </div>

                    <h3 class="text-xl font-semibold text-white mb-4">Arrays Asociativos</h3>
                    <p class="text-gray-text mb-4">Arrays que usan claves nombradas en lugar de
                        índices.</p>

                    <div class="bg-dark-bg p-4 rounded-lg mb-4">
                        <pre class="text-sm">
<span class="text-purple-400">&lt;?php</span>
<span class="text-red-400">$persona</span> = [
    <span class="text-green-400">"nombre"</span> => <span class="text-green-400">"Juan"</span>,
    <span class="text-green-400">"edad"</span> => <span class="text-yellow-400">25</span>,
    <span class="text-green-400">"ciudad"</span> => <span class="text-green-400">"Madrid"</span>
];

<span class="text-blue-400">echo</span> <span class="text-red-400">$persona</span>[<span class="text-green-400">"nombre"</span>];
<span class="text-purple-400">?></span>
                        </pre>
                    </div>
                </div>

                <div>
                    <h3 class="text-xl font-semibold text-white mb-4">Funciones Útiles</h3>

                    <div class="space-y-3">
                        <div class="bg-dark-bg p-3 rounded">
                            <code class="text-orange-secondary">count($array)</code>
                            <p class="text-gray-text text-sm">Cuenta elementos</p>
                        </div>

                        <div class="bg-dark-bg p-3 rounded">
                            <code class="text-orange-secondary">array_push($array, $valor)</code>
                            <p class="text-gray-text text-sm">Agrega al final</p>
                        </div>

                        <div class="bg-dark-bg p-3 rounded">
                            <code class="text-orange-secondary">array_sum($array)</code>
                            <p class="text-gray-text text-sm">Suma valores numéricos</p>
                        </div>

                        <div class="bg-dark-bg p-3 rounded">
                            <code class="text-orange-secondary">sort($array)</code>
                            <p class="text-gray-text text-sm">Ordena ascendente</p>
                        </div>

                        <div class="bg-dark-bg p-3 rounded">
                            <code class="text-orange-secondary">array_search($valor, $array)</code>
                            <p class="text-gray-text text-sm">Busca un valor</p>
                        </div>

                        <div class="bg-dark-bg p-3 rounded">
                            <code class="text-orange-secondary">in_array($valor, $array)</code>
                            <p class="text-gray-text text-sm">Verifica existencia</p>
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
                // Sistema de inventario de una tienda

                $productos = [
                    [
                        'nombre' => 'Laptop Gaming',
                        'precio' => 1299.99,
                        'categoria' => 'Tecnología',
                        'stock' => 15,
                        'ventas' => 23,
                    ],
                    [
                        'nombre' => 'Smartphone',
                        'precio' => 699.99,
                        'categoria' => 'Tecnología',
                        'stock' => 8,
                        'ventas' => 45,
                    ],
                    [
                        'nombre' => 'Auriculares Bluetooth',
                        'precio' => 159.99,
                        'categoria' => 'Tecnología',
                        'stock' => 32,
                        'ventas' => 67,
                    ],
                    [
                        'nombre' => 'Silla Ergonómica',
                        'precio' => 299.99,
                        'categoria' => 'Mobiliario',
                        'stock' => 12,
                        'ventas' => 18,
                    ],
                    [
                        'nombre' => 'Monitor 4K',
                        'precio' => 449.99,
                        'categoria' => 'Tecnología',
                        'stock' => 5,
                        'ventas' => 31,
                    ],
                ];

                // Calcular estadísticas
                $totalProductos = count($productos);
                $precios = array_column($productos, 'precio');
                $ventas = array_column($productos, 'ventas');
                $stocks = array_column($productos, 'stock');

                $precioPromedio = array_sum($precios) / $totalProductos;
                $ventasTotales = array_sum($ventas);
                $stockTotal = array_sum($stocks);

                // Encontrar productos destacados
                $maxVentas = max($ventas);
                $minStock = min($stocks);
                $maxPrecio = max($precios);

                echo "<h3 class='text-white text-lg mb-4'>Inventario de Productos:</h3>";

                // Mostrar productos
                echo "<div class='grid gap-4 mb-6'>";
                foreach ($productos as $index => $producto) {
                    $alertaStock = $producto['stock'] < 10 ? 'border-red-500' : 'border-gray-600';
                    $estadoStock = $producto['stock'] < 10 ? 'Stock Bajo' : 'Stock OK';
                    $colorStock = $producto['stock'] < 10 ? 'text-red-400' : 'text-green-400';

                    echo "<div class='bg-dark-surface p-4 rounded-lg border-l-4 $alertaStock'>";
                    echo "<div class='flex justify-between items-start mb-2'>";
                    echo "<h4 class='text-white font-semibold'>{$producto['nombre']}</h4>";
                    if ($producto['ventas'] == $maxVentas) {
                        echo "<span class='px-2 py-1 bg-yellow-500 text-black text-xs rounded font-bold'>🏆 MÁS VENDIDO</span>";
                    }
                    echo '</div>';

                    echo "<div class='grid grid-cols-2 gap-4 text-sm'>";
                    echo '<div>';
                    echo "<p class='text-gray-text'>Precio: <span class='text-orange-secondary'>$" .
                        number_format($producto['precio'], 2) .
                        '</span></p>';
                    echo "<p class='text-gray-text'>Categoría: <span class='text-white'>{$producto['categoria']}</span></p>";
                    echo '</div>';
                    echo '<div>';
                    echo "<p class='text-gray-text'>Stock: <span class='$colorStock'>{$producto['stock']} ($estadoStock)</span></p>";
                    echo "<p class='text-gray-text'>Ventas: <span class='text-blue-400'>{$producto['ventas']} unidades</span></p>";
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                }
                echo '</div>';

                // Estadísticas generales
                echo "<div class='bg-dark-surface p-4 rounded-lg border border-gray-600'>";
                echo "<h4 class='text-orange-primary font-semibold mb-3'>📊 Estadísticas del Inventario</h4>";
                echo "<div class='grid md:grid-cols-4 gap-4 text-sm'>";
                echo "<div class='text-center'>";
                echo "<p class='text-2xl font-bold text-orange-secondary'>$totalProductos</p>";
                echo "<p class='text-gray-text'>Productos Total</p>";
                echo '</div>';
                echo "<div class='text-center'>";
                echo "<p class='text-2xl font-bold text-green-400'>$" .
                    number_format($precioPromedio, 0) .
                    '</p>';
                echo "<p class='text-gray-text'>Precio Promedio</p>";
                echo '</div>';
                echo "<div class='text-center'>";
                echo "<p class='text-2xl font-bold text-blue-400'>$ventasTotales</p>";
                echo "<p class='text-gray-text'>Ventas Totales</p>";
                echo '</div>';
                echo "<div class='text-center'>";
                echo "<p class='text-2xl font-bold text-purple-400'>$stockTotal</p>";
                echo "<p class='text-gray-text'>Stock Total</p>";
                echo '</div>';
                echo '</div>';
                echo '</div>';
                ?>
            </div>
        </div>

        <!-- Consigna -->
        <div class="bg-gradient-to-r from-orange-primary to-orange-secondary rounded-2xl p-8 mb-8">
            <h2 class="text-2xl font-semibold text-white mb-6">🎯 Consigna de la Actividad</h2>

            <div class="bg-white/10 backdrop-blur rounded-lg p-6">
                <h3 class="text-xl font-bold text-white mb-4">Sistema de Gestión de Estudiantes</h3>

                <div class="space-y-4 text-white">
                    <div>
                        <h4 class="font-semibold mb-2">Parte 1: Crear Arrays de Datos</h4>
                        <ul class="list-disc list-inside space-y-1 text-sm opacity-90">
                            <li>Array de al menos 8 estudiantes con: nombre, edad, carrera,
                                semestre, promedio</li>
                            <li>Array de materias: Matemáticas, Programación, Historia, Inglés,
                                Química</li>
                            <li>Array asociativo de calificaciones para cada estudiante (5 materias)
                            </li>
                        </ul>
                    </div>

                    <div>
                        <h4 class="font-semibold mb-2">Parte 2: Manipulación de Arrays</h4>
                        <div class="grid md:grid-cols-2 gap-3 text-sm">
                            <div class="bg-white/10 p-3 rounded">
                                <strong>• Filtrar por carrera</strong>
                                <p class="opacity-90">Mostrar estudiantes de una carrera específica
                                </p>
                            </div>
                            <div class="bg-white/10 p-3 rounded">
                                <strong>• Ordenar por promedio</strong>
                                <p class="opacity-90">De mayor a menor calificación</p>
                            </div>
                            <div class="bg-white/10 p-3 rounded">
                                <strong>• Buscar estudiante</strong>
                                <p class="opacity-90">Por nombre (usar array_search)</p>
                            </div>
                            <div class="bg-white/10 p-3 rounded">
                                <strong>• Top 3 estudiantes</strong>
                                <p class="opacity-90">Con mejores promedios</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h4 class="font-semibold mb-2">Parte 3: Estadísticas y Análisis</h4>
                        <ul class="list-disc list-inside space-y-1 text-sm opacity-90">
                            <li><strong>Promedio general</strong> de todos los estudiantes</li>
                            <li><strong>Materia con mejor promedio</strong> grupal</li>
                            <li><strong>Distribución por carrera</strong> (contar estudiantes)</li>
                            <li><strong>Estudiantes en riesgo</strong> (promedio < 7.0)</li>
                            <li><strong>Rango de edad</strong> (menor y mayor edad)</li>
                        </ul>
                    </div>

                    <div>
                        <h4 class="font-semibold mb-2">Parte 4: Funciones Adicionales</h4>
                        <ul class="list-disc list-inside space-y-1 text-sm opacity-90">
                            <li>Agregar un nuevo estudiante al array</li>
                            <li>Actualizar calificaciones de un estudiante existente</li>
                            <li>Eliminar estudiante por nombre</li>
                            <li>Generar reporte en formato tabla HTML</li>
                        </ul>
                    </div>
                </div>

                <div class="mt-6 p-4 bg-white/10 rounded-lg">
                    <p class="text-white font-medium">📋 Presentation: Usa colores para destacar
                        diferentes estados (aprobado/reprobado, carreras, etc.) y muestra los datos
                        de forma organizada con tablas o cards.</p>
                </div>
            </div>
        </div>

        <!-- Navegación -->
        <div class="flex justify-between items-center">
            <a href="actividad3.php"
                class="inline-flex items-center px-6 py-3 bg-gray-600 text-white rounded-lg hover:bg-gray-500 transition-colors">
                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                        d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                        clip-rule="evenodd" />
                </svg>
                Actividad Anterior
            </a>

            <a href="actividad5.php"
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
