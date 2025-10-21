<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 5 - Formularios y $_POST</title>
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
                #5 - Intermedio</span>
            <h1 class="text-4xl font-bold text-white mb-4">Formularios y $_POST</h1>
            <p class="text-xl text-gray-text max-w-2xl mx-auto">Aprende a procesar formularios y
                manejar datos del usuario de forma segura</p>
        </div>

        <!-- Explicación -->
        <div class="bg-dark-surface rounded-2xl p-8 border border-gray-700 mb-8">
            <h2 class="text-2xl font-semibold text-orange-primary mb-6">📚 Explicación</h2>

            <div class="grid lg:grid-cols-2 gap-8">
                <div>
                    <h3 class="text-xl font-semibold text-white mb-4">Formularios HTML</h3>
                    <p class="text-gray-text mb-4">Los formularios permiten al usuario enviar datos
                        al servidor para procesarlos.</p>

                    <div class="bg-dark-bg p-4 rounded-lg mb-4">
                        <pre class="text-sm">
                            <span class="text-blue-400">&lt;form</span> <span class="text-yellow-400">method</span>=<span class="text-green-400">"POST"</span> <span class="text-yellow-400">action</span>=<span class="text-green-400">"procesar.php"</span><span class="text-blue-400">&gt;</span>
                            <span class="text-blue-400">&lt;input</span> <span class="text-yellow-400">type</span>=<span class="text-green-400">"text"</span> <span class="text-yellow-400">name</span>=<span class="text-green-400">"nombre"</span><span class="text-blue-400">&gt;</span>
                            <span class="text-blue-400">&lt;input</span> <span class="text-yellow-400">type</span>=<span class="text-green-400">"email"</span> <span class="text-yellow-400">name</span>=<span class="text-green-400">"email"</span><span class="text-blue-400">&gt;</span>
                            <span class="text-blue-400">&lt;button</span> <span class="text-yellow-400">type</span>=<span class="text-green-400">"submit"</span><span class="text-blue-400">&gt;</span>Enviar<span class="text-blue-400">&lt;/button&gt;</span>
                            <span class="text-blue-400">&lt;/form&gt;</span>
                        </pre>
                    </div>

                    <h3 class="text-xl font-semibold text-white mb-4">Superglobales</h3>
                    <ul class="text-gray-text space-y-2">
                        <li><code class="text-orange-secondary">$_POST</code> - Datos del formulario
                            method="POST"</li>
                        <li><code class="text-orange-secondary">$_GET</code> - Datos de la URL</li>
                        <li><code class="text-orange-secondary">$_REQUEST</code> - Combina $_GET,
                            $_POST y $_COOKIE</li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-xl font-semibold text-white mb-4">Procesamiento en PHP</h3>

                    <div class="bg-dark-bg p-4 rounded-lg mb-4">
                        <pre class="text-sm">
<span class="text-purple-400">&lt;?php</span>
<span class="text-blue-400">if</span> (<span class="text-red-400">$_SERVER</span>[<span class="text-green-400">'REQUEST_METHOD'</span>] == <span class="text-green-400">'POST'</span>) {
    <span class="text-gray-500">// Obtener datos</span>
    <span class="text-red-400">$nombre</span> = <span class="text-red-400">$_POST</span>[<span class="text-green-400">'nombre'</span>];
    <span class="text-red-400">$email</span> = <span class="text-red-400">$_POST</span>[<span class="text-green-400">'email'</span>];
    
    <span class="text-gray-500">// Validar datos</span>
    <span class="text-blue-400">if</span> (!<span class="text-yellow-400">empty</span>(<span class="text-red-400">$nombre</span>) && <span class="text-yellow-400">filter_var</span>(<span class="text-red-400">$email</span>, <span class="text-yellow-400">FILTER_VALIDATE_EMAIL</span>)) {
        <span class="text-blue-400">echo</span> <span class="text-green-400">"Datos válidos"</span>;
    }
}
<span class="text-purple-400">?></span>
                        </pre>
                    </div>

                    <h3 class="text-xl font-semibold text-white mb-4">Validaciones Importantes</h3>
                    <div class="space-y-3">
                        <div class="bg-dark-bg p-3 rounded">
                            <code class="text-orange-secondary">isset()</code>
                            <p class="text-gray-text text-sm">Verifica si existe la variable</p>
                        </div>

                        <div class="bg-dark-bg p-3 rounded">
                            <code class="text-orange-secondary">empty()</code>
                            <p class="text-gray-text text-sm">Verifica si está vacía</p>
                        </div>

                        <div class="bg-dark-bg p-3 rounded">
                            <code class="text-orange-secondary">filter_var()</code>
                            <p class="text-gray-text text-sm">Valida y filtra datos</p>
                        </div>

                        <div class="bg-dark-bg p-3 rounded">
                            <code class="text-orange-secondary">htmlspecialchars()</code>
                            <p class="text-gray-text text-sm">Previene XSS</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Ejemplo Práctico -->
        <div class="bg-dark-surface rounded-2xl p-8 border border-gray-700 mb-8">
            <h2 class="text-2xl font-semibold text-orange-primary mb-6">💻 Ejemplo Práctico</h2>

            <?php
            $mensaje = '';
            $tipoMensaje = '';

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $nombre = trim($_POST['nombre'] ?? '');
                $email = trim($_POST['email'] ?? '');
                $telefono = trim($_POST['telefono'] ?? '');
                $ciudad = $_POST['ciudad'] ?? '';
                $intereses = $_POST['intereses'] ?? [];
                $comentarios = trim($_POST['comentarios'] ?? '');

                // Validaciones
                $errores = [];

                if (empty($nombre) || strlen($nombre) < 2) {
                    $errores[] = 'El nombre debe tener al menos 2 caracteres';
                }

                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $errores[] = 'Email inválido';
                }

                if (!empty($telefono) && !preg_match('/^\d{10}$/', $telefono)) {
                    $errores[] = 'El teléfono debe tener 10 dígitos';
                }

                if (empty($ciudad)) {
                    $errores[] = 'Selecciona una ciudad';
                }

                if (empty($errores)) {
                    $mensaje = '✅ Registro exitoso para ' . htmlspecialchars($nombre);
                    $tipoMensaje = 'success';

                    // Aquí normalmente guardarías en base de datos
                    $datosRecibidos = [
                        'nombre' => htmlspecialchars($nombre),
                        'email' => htmlspecialchars($email),
                        'telefono' => htmlspecialchars($telefono),
                        'ciudad' => htmlspecialchars($ciudad),
                        'intereses' => array_map('htmlspecialchars', $intereses),
                        'comentarios' => htmlspecialchars($comentarios),
                        'fecha' => date('Y-m-d H:i:s'),
                    ];
                } else {
                    $mensaje = '❌ Errores encontrados: ' . implode(', ', $errores);
                    $tipoMensaje = 'error';
                }
            }
            ?>

            <div class="grid lg:grid-cols-2 gap-8">
                <!-- Formulario -->
                <div>
                    <h3 class="text-xl font-semibold text-white mb-4">Formulario de Registro</h3>

                    <?php if (!empty($mensaje)): ?>
                    <div
                        class="p-4 rounded-lg mb-4 <?php echo $tipoMensaje == 'success'
                            ? 'bg-green-900 text-green-200'
                            : 'bg-red-900 text-red-200'; ?>">
                        <?php echo $mensaje; ?>
                    </div>
                    <?php endif; ?>

                    <form method="POST" class="space-y-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-text mb-2">Nombre
                                completo *</label>
                            <input type="text" name="nombre"
                                value="<?php echo htmlspecialchars($_POST['nombre'] ?? ''); ?>"
                                class="w-full px-4 py-3 bg-dark-bg border border-gray-700 rounded-lg text-white focus:border-orange-primary focus:outline-none"
                                required>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-text mb-2">Email
                                *</label>
                            <input type="email" name="email"
                                value="<?php echo htmlspecialchars($_POST['email'] ?? ''); ?>"
                                class="w-full px-4 py-3 bg-dark-bg border border-gray-700 rounded-lg text-white focus:border-orange-primary focus:outline-none"
                                required>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-text mb-2">Teléfono
                                (opcional)</label>
                            <input type="tel" name="telefono"
                                value="<?php echo htmlspecialchars($_POST['telefono'] ?? ''); ?>"
                                class="w-full px-4 py-3 bg-dark-bg border border-gray-700 rounded-lg text-white focus:border-orange-primary focus:outline-none"
                                placeholder="1234567890">
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-text mb-2">Ciudad
                                *</label>
                            <select name="ciudad"
                                class="w-full px-4 py-3 bg-dark-bg border border-gray-700 rounded-lg text-white focus:border-orange-primary focus:outline-none"
                                required>
                                <option value="">Selecciona una ciudad</option>
                                <option value="madrid"
                                    <?php echo ($_POST['ciudad'] ?? '') == 'madrid'
                                        ? 'selected'
                                        : ''; ?>>
                                    Madrid</option>
                                <option value="barcelona"
                                    <?php echo ($_POST['ciudad'] ?? '') == 'barcelona'
                                        ? 'selected'
                                        : ''; ?>>
                                    Barcelona</option>
                                <option value="valencia"
                                    <?php echo ($_POST['ciudad'] ?? '') == 'valencia'
                                        ? 'selected'
                                        : ''; ?>>
                                    Valencia</option>
                                <option value="sevilla"
                                    <?php echo ($_POST['ciudad'] ?? '') == 'sevilla'
                                        ? 'selected'
                                        : ''; ?>>
                                    Sevilla</option>
                            </select>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-text mb-2">Intereses
                                (múltiple)</label>
                            <div class="space-y-2">
                                <?php
                                $opcionesIntereses = [
                                    'tecnologia' => 'Tecnología',
                                    'deportes' => 'Deportes',
                                    'arte' => 'Arte',
                                    'musica' => 'Música',
                                    'viajes' => 'Viajes',
                                ];
                                $interesesSeleccionados = $_POST['intereses'] ?? [];
                                ?>
                                <?php foreach ($opcionesIntereses as $valor => $etiqueta): ?>
                                <label class="flex items-center">
                                    <input type="checkbox" name="intereses[]"
                                        value="<?php echo $valor; ?>"
                                        <?php echo in_array($valor, $interesesSeleccionados)
                                            ? 'checked'
                                            : ''; ?>
                                        class="mr-2 text-orange-primary focus:ring-orange-primary">
                                    <span class="text-gray-text"><?php echo $etiqueta; ?></span>
                                </label>
                                <?php endforeach; ?>
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-text mb-2">Comentarios
                                adicionales</label>
                            <textarea name="comentarios" rows="4"
                                class="w-full px-4 py-3 bg-dark-bg border border-gray-700 rounded-lg text-white focus:border-orange-primary focus:outline-none"
                                placeholder="Cuéntanos más sobre ti..."><?php echo htmlspecialchars(
                                    $_POST['comentarios'] ?? '',
                                ); ?></textarea>
                        </div>

                        <button type="submit"
                            class="w-full bg-orange-primary text-white py-3 rounded-lg font-semibold hover:bg-orange-secondary transition-colors">
                            Registrarse
                        </button>
                    </form>
                </div>

                <!-- Datos procesados -->
                <div>
                    <h3 class="text-xl font-semibold text-white mb-4">Datos Procesados</h3>

                    <?php if (isset($datosRecibidos) && $tipoMensaje == 'success'): ?>
                    <div class="bg-dark-bg p-6 rounded-lg">
                        <h4 class="text-orange-primary font-semibold mb-3">Información Recibida:
                        </h4>
                        <div class="space-y-3 text-sm">
                            <div>
                                <span class="text-gray-text">Nombre:</span>
                                <span
                                    class="text-white ml-2"><?php echo $datosRecibidos[
                                        'nombre'
                                    ]; ?></span>
                            </div>
                            <div>
                                <span class="text-gray-text">Email:</span>
                                <span
                                    class="text-white ml-2"><?php echo $datosRecibidos[
                                        'email'
                                    ]; ?></span>
                            </div>
                            <?php if (!empty($datosRecibidos['telefono'])): ?>
                            <div>
                                <span class="text-gray-text">Teléfono:</span>
                                <span
                                    class="text-white ml-2"><?php echo $datosRecibidos[
                                        'telefono'
                                    ]; ?></span>
                            </div>
                            <?php endif; ?>
                            <div>
                                <span class="text-gray-text">Ciudad:</span>
                                <span
                                    class="text-white ml-2"><?php echo ucfirst(
                                        $datosRecibidos['ciudad'],
                                    ); ?></span>
                            </div>
                            <?php if (!empty($datosRecibidos['intereses'])): ?>
                            <div>
                                <span class="text-gray-text">Intereses:</span>
                                <span
                                    class="text-white ml-2"><?php echo implode(
                                        ', ',
                                        $datosRecibidos['intereses'],
                                    ); ?></span>
                            </div>
                            <?php endif; ?>
                            <?php if (!empty($datosRecibidos['comentarios'])): ?>
                            <div>
                                <span class="text-gray-text">Comentarios:</span>
                                <p class="text-white mt-1">
                                    <?php echo nl2br($datosRecibidos['comentarios']); ?></p>
                            </div>
                            <?php endif; ?>
                            <div>
                                <span class="text-gray-text">Fecha de registro:</span>
                                <span
                                    class="text-white ml-2"><?php echo $datosRecibidos[
                                        'fecha'
                                    ]; ?></span>
                            </div>
                        </div>
                    </div>
                    <?php else: ?>
                    <div class="bg-dark-bg p-6 rounded-lg text-center">
                        <p class="text-gray-text">Completa el formulario para ver los datos
                            procesados</p>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <!-- Consigna -->
        <div class="bg-gradient-to-r from-orange-primary to-orange-secondary rounded-2xl p-8 mb-8">
            <h2 class="text-2xl font-semibold text-white mb-6">🎯 Consigna de la Actividad</h2>

            <div class="bg-white/10 backdrop-blur rounded-lg p-6">
                <h3 class="text-xl font-bold text-white mb-4">Sistema de Registro de Cursos Online
                </h3>

                <div class="space-y-4 text-white">
                    <div>
                        <h4 class="font-semibold mb-2">Parte 1: Crear Formulario de Inscripción</h4>
                        <div class="grid md:grid-cols-2 gap-3 text-sm">
                            <div class="bg-white/10 p-3 rounded">
                                <strong>Datos Personales:</strong>
                                <p class="opacity-90">• Nombre completo (requerido)</p>
                                <p class="opacity-90">• Email (requerido, validar formato)</p>
                                <p class="opacity-90">• Teléfono (opcional, validar 10 dígitos)</p>
                                <p class="opacity-90">• Fecha de nacimiento (requerido)</p>
                            </div>
                            <div class="bg-white/10 p-3 rounded">
                                <strong>Información Académica:</strong>
                                <p class="opacity-90">• Nivel de estudios (select)</p>
                                <p class="opacity-90">• Experiencia previa (radio buttons)</p>
                                <p class="opacity-90">• Cursos de interés (checkboxes múltiples)</p>
                                <p class="opacity-90">• Motivación (textarea)</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h4 class="font-semibold mb-2">Parte 2: Validaciones Requeridas</h4>
                        <ul class="list-disc list-inside space-y-1 text-sm opacity-90">
                            <li><strong>Servidor:</strong> Verificar campos requeridos, validar
                                email y teléfono</li>
                            <li><strong>Seguridad:</strong> Usar htmlspecialchars() para prevenir
                                XSS</li>
                            <li><strong>Edad:</strong> Calcular edad y verificar que sea mayor de 16
                                años</li>
                            <li><strong>Cursos:</strong> Mínimo 1 curso seleccionado, máximo 3</li>
                        </ul>
                    </div>

                    <div>
                        <h4 class="font-semibold mb-2">Parte 3: Procesamiento y Respuesta</h4>
                        <ul class="list-disc list-inside space-y-1 text-sm opacity-90">
                            <li>Mostrar mensaje de éxito o errores específicos</li>
                            <li>Calcular costo total basado en cursos seleccionados</li>
                            <li>Generar número de estudiante único</li>
                            <li>Mostrar resumen completo de la inscripción</li>
                            <li>Persistir datos en el formulario si hay errores</li>
                        </ul>
                    </div>

                    <div>
                        <h4 class="font-semibold mb-2">Parte 4: Características Adicionales</h4>
                        <ul class="list-disc list-inside space-y-1 text-sm opacity-90">
                            <li>Aplicar descuento del 15% si es estudiante</li>
                            <li>Validar que el email no se repita (simular con array)</li>
                            <li>Generar email de confirmación (solo mostrar contenido)</li>
                            <li>Estadísticas: total de inscripciones, curso más popular</li>
                        </ul>
                    </div>
                </div>

                <div class="mt-6 p-4 bg-white/10 rounded-lg">
                    <p class="text-white font-medium">📋 Entrega: Crear un sistema completo con
                        formulario funcional, validaciones robustas y respuestas informativas. Usar
                        el mismo archivo PHP para mostrar formulario y procesar datos.</p>
                </div>
            </div>
        </div>

        <!-- Navegación -->
        <div class="flex justify-between items-center">
            <a href="actividad4.php"
                class="inline-flex items-center px-6 py-3 bg-gray-600 text-white rounded-lg hover:bg-gray-500 transition-colors">
                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                        d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                        clip-rule="evenodd" />
                </svg>
                Actividad Anterior
            </a>

            <a href="actividad6.php"
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