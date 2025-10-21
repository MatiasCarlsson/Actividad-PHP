<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 6 - Sesiones y Cookies</title>
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
                        <li><a href="../index.php" class="text-white hover:text-orange-primary transition-colors duration-300 font-medium">Inicio</a></li>
                        <li><a href="index.php" class="text-orange-secondary hover:text-orange-primary transition-colors duration-300 font-medium">Actividades</a></li>
                        <li><a href="../pages/about.php" class="text-white hover:text-orange-primary transition-colors duration-300 font-medium">Acerca de</a></li>
                        <li><a href="../pages/contact.php" class="text-white hover:text-orange-primary transition-colors duration-300 font-medium">Contacto</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container mx-auto px-6 py-12">
        <div class="mb-8">
            <a href="index.php" class="inline-flex items-center text-orange-primary hover:text-orange-secondary transition-colors">
                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd"/>
                </svg>
                Volver a Actividades
            </a>
        </div>

        <div class="text-center mb-12">
            <span class="px-4 py-2 bg-red-500 text-white text-sm rounded-full font-medium mb-4 inline-block">Actividad #6 - Avanzado</span>
            <h1 class="text-4xl font-bold text-white mb-4">Sesiones y Cookies</h1>
            <p class="text-xl text-gray-text max-w-2xl mx-auto">Aprende a manejar sesiones de usuario y cookies para crear experiencias personalizadas</p>
        </div>

        <!-- Explicación -->
        <div class="bg-dark-surface rounded-2xl p-8 border border-gray-700 mb-8">
            <h2 class="text-2xl font-semibold text-orange-primary mb-6">📚 Explicación</h2>
            
            <div class="grid lg:grid-cols-2 gap-8">
                <div>
                    <h3 class="text-xl font-semibold text-white mb-4">¿Qué son las Sesiones?</h3>
                    <p class="text-gray-text mb-4">Las sesiones permiten almacenar información del usuario en el servidor durante su visita. Son ideales para datos sensibles como autenticación.</p>
                    
                    <div class="bg-dark-bg p-4 rounded-lg mb-4">
                        <pre class="text-sm">
<span class="text-purple-400">&lt;?php</span>
<span class="text-gray-500">// Iniciar sesión</span>
<span class="text-yellow-400">session_start</span>();

<span class="text-gray-500">// Guardar datos</span>
<span class="text-red-400">$_SESSION</span>[<span class="text-green-400">'usuario'</span>] = <span class="text-green-400">'juan123'</span>;
<span class="text-red-400">$_SESSION</span>[<span class="text-green-400">'rol'</span>] = <span class="text-green-400">'admin'</span>;

<span class="text-gray-500">// Leer datos</span>
<span class="text-blue-400">echo</span> <span class="text-red-400">$_SESSION</span>[<span class="text-green-400">'usuario'</span>];

<span class="text-gray-500">// Destruir sesión</span>
<span class="text-yellow-400">session_destroy</span>();
<span class="text-purple-400">?></span>
                        </pre>
                    </div>

                    <h3 class="text-xl font-semibold text-white mb-4">Características de Sesiones</h3>
                    <ul class="text-gray-text space-y-2">
                        <li>✅ <strong>Seguras:</strong> Datos almacenados en servidor</li>
                        <li>✅ <strong>Temporales:</strong> Se eliminan al cerrar navegador</li>
                        <li>✅ <strong>Únicas:</strong> Cada usuario tiene su propia sesión</li>
                        <li>⚠️ <strong>Limitadas:</strong> Expiran después de un tiempo</li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-xl font-semibold text-white mb-4">¿Qué son las Cookies?</h3>
                    <p class="text-gray-text mb-4">Las cookies son pequeños archivos que se almacenan en el navegador del usuario para recordar información entre visitas.</p>
                    
                    <div class="bg-dark-bg p-4 rounded-lg mb-4">
                        <pre class="text-sm">
<span class="text-purple-400">&lt;?php</span>
<span class="text-gray-500">// Crear cookie (expira en 30 días)</span>
<span class="text-yellow-400">setcookie</span>(<span class="text-green-400">'preferencia'</span>, <span class="text-green-400">'modo_oscuro'</span>, <span class="text-yellow-400">time</span>() + (30 * 24 * 60 * 60));

<span class="text-gray-500">// Leer cookie</span>
<span class="text-blue-400">if</span> (<span class="text-yellow-400">isset</span>(<span class="text-red-400">$_COOKIE</span>[<span class="text-green-400">'preferencia'</span>])) {
    <span class="text-blue-400">echo</span> <span class="text-red-400">$_COOKIE</span>[<span class="text-green-400">'preferencia'</span>];
}

<span class="text-gray-500">// Eliminar cookie</span>
<span class="text-yellow-400">setcookie</span>(<span class="text-green-400">'preferencia'</span>, <span class="text-green-400">''</span>, <span class="text-yellow-400">time</span>() - 3600);
<span class="text-purple-400">?></span>
                        </pre>
                    </div>

                    <h3 class="text-xl font-semibold text-white mb-4">Comparación</h3>
                    <div class="overflow-x-auto">
                        <table class="w-full text-sm">
                            <thead>
                                <tr class="border-b border-gray-600">
                                    <th class="text-left text-orange-secondary p-2">Aspecto</th>
                                    <th class="text-left text-green-400 p-2">Sesiones</th>
                                    <th class="text-left text-blue-400 p-2">Cookies</th>
                                </tr>
                            </thead>
                            <tbody class="text-gray-text">
                                <tr class="border-b border-gray-700">
                                    <td class="p-2 font-medium">Almacenamiento</td>
                                    <td class="p-2">Servidor</td>
                                    <td class="p-2">Navegador</td>
                                </tr>
                                <tr class="border-b border-gray-700">
                                    <td class="p-2 font-medium">Seguridad</td>
                                    <td class="p-2">Alta</td>
                                    <td class="p-2">Media</td>
                                </tr>
                                <tr class="border-b border-gray-700">
                                    <td class="p-2 font-medium">Persistencia</td>
                                    <td class="p-2">Hasta cierre</td>
                                    <td class="p-2">Configurable</td>
                                </tr>
                                <tr>
                                    <td class="p-2 font-medium">Tamaño</td>
                                    <td class="p-2">Ilimitado</td>
                                    <td class="p-2">4KB max</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Ejemplo Práctico -->
        <div class="bg-dark-surface rounded-2xl p-8 border border-gray-700 mb-8">
            <h2 class="text-2xl font-semibold text-orange-primary mb-6">💻 Ejemplo Práctico</h2>
            
            <?php
            session_start();
            
            // Manejar cookies de preferencias
            if (isset($_POST['guardar_preferencias'])) {
                $tema = $_POST['tema'] ?? 'claro';
                $idioma = $_POST['idioma'] ?? 'es';
                
                setcookie('tema_preferido', $tema, time() + (30 * 24 * 60 * 60));
                setcookie('idioma_preferido', $idioma, time() + (30 * 24 * 60 * 60));
                
                $_SESSION['mensaje'] = "Preferencias guardadas correctamente";
            }
            
            // Manejar login simulado
            if (isset($_POST['login'])) {
                $usuario = $_POST['usuario'] ?? '';
                $password = $_POST['password'] ?? '';
                
                // Simulación de usuarios válidos
                $usuariosValidos = [
                    'admin' => 'admin123',
                    'usuario1' => 'password1',
                    'juan' => 'juan123'
                ];
                
                if (isset($usuariosValidos[$usuario]) && $usuariosValidos[$usuario] === $password) {
                    $_SESSION['usuario_logueado'] = $usuario;
                    $_SESSION['rol'] = $usuario === 'admin' ? 'administrador' : 'usuario';
                    $_SESSION['login_time'] = time();
                    $_SESSION['visitas'] = ($_SESSION['visitas'] ?? 0) + 1;
                    
                    // Cookie para recordar usuario
                    if (isset($_POST['recordar'])) {
                        setcookie('usuario_recordado', $usuario, time() + (7 * 24 * 60 * 60));
                    }
                    
                    $_SESSION['mensaje'] = "¡Bienvenido, $usuario!";
                } else {
                    $_SESSION['error'] = "Credenciales incorrectas";
                }
            }
            
            // Manejar logout
            if (isset($_POST['logout'])) {
                session_destroy();
                setcookie('usuario_recordado', '', time() - 3600);
                session_start();
                $_SESSION['mensaje'] = "Sesión cerrada correctamente";
            }
            
            // Obtener preferencias de cookies
            $temaActual = $_COOKIE['tema_preferido'] ?? 'oscuro';
            $idiomaActual = $_COOKIE['idioma_preferido'] ?? 'es';
            $usuarioRecordado = $_COOKIE['usuario_recordado'] ?? '';
            ?>
            
            <div class="grid lg:grid-cols-2 gap-8">
                <!-- Panel de Usuario -->
                <div>
                    <h3 class="text-xl font-semibold text-white mb-4">Panel de Usuario</h3>
                    
                    <?php if (isset($_SESSION['mensaje'])): ?>
                    <div class="p-4 bg-green-900 text-green-200 rounded-lg mb-4">
                        <?php echo $_SESSION['mensaje']; unset($_SESSION['mensaje']); ?>
                    </div>
                    <?php endif; ?>
                    
                    <?php if (isset($_SESSION['error'])): ?>
                    <div class="p-4 bg-red-900 text-red-200 rounded-lg mb-4">
                        <?php echo $_SESSION['error']; unset($_SESSION['error']); ?>
                    </div>
                    <?php endif; ?>
                    
                    <?php if (isset($_SESSION['usuario_logueado'])): ?>
                    <!-- Usuario logueado -->
                    <div class="bg-dark-bg p-6 rounded-lg mb-4">
                        <div class="flex items-center justify-between mb-4">
                            <h4 class="text-lg font-semibold text-orange-primary">Sesión Activa</h4>
                            <span class="px-3 py-1 bg-green-600 text-white text-sm rounded-full">Conectado</span>
                        </div>
                        
                        <div class="space-y-3 text-sm">
                            <div>
                                <span class="text-gray-text">Usuario:</span>
                                <span class="text-white ml-2 font-medium"><?php echo $_SESSION['usuario_logueado']; ?></span>
                            </div>
                            <div>
                                <span class="text-gray-text">Rol:</span>
                                <span class="text-orange-secondary ml-2 font-medium"><?php echo ucfirst($_SESSION['rol']); ?></span>
                            </div>
                            <div>
                                <span class="text-gray-text">Conectado desde:</span>
                                <span class="text-white ml-2"><?php echo date('H:i:s', $_SESSION['login_time']); ?></span>
                            </div>
                            <div>
                                <span class="text-gray-text">Visitas en esta sesión:</span>
                                <span class="text-blue-400 ml-2 font-bold"><?php echo $_SESSION['visitas']; ?></span>
                            </div>
                            <div>
                                <span class="text-gray-text">ID de sesión:</span>
                                <span class="text-gray-400 ml-2 text-xs font-mono"><?php echo session_id(); ?></span>
                            </div>
                        </div>
                        
                        <form method="POST" class="mt-4">
                            <button type="submit" name="logout" class="w-full bg-red-600 text-white py-2 rounded-lg hover:bg-red-700 transition-colors">
                                Cerrar Sesión
                            </button>
                        </form>
                    </div>
                    <?php else: ?>
                    <!-- Formulario de login -->
                    <form method="POST" class="space-y-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-text mb-2">Usuario</label>
                            <input type="text" name="usuario" value="<?php echo htmlspecialchars($usuarioRecordado); ?>"
                                   class="w-full px-4 py-3 bg-dark-bg border border-gray-700 rounded-lg text-white focus:border-orange-primary focus:outline-none"
                                   placeholder="Prueba: admin, usuario1, juan">
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-gray-text mb-2">Contraseña</label>
                            <input type="password" name="password"
                                   class="w-full px-4 py-3 bg-dark-bg border border-gray-700 rounded-lg text-white focus:border-orange-primary focus:outline-none"
                                   placeholder="admin123, password1, juan123">
                        </div>
                        
                        <label class="flex items-center">
                            <input type="checkbox" name="recordar" class="mr-2 text-orange-primary">
                            <span class="text-gray-text text-sm">Recordar usuario (cookie por 7 días)</span>
                        </label>
                        
                        <button type="submit" name="login" class="w-full bg-orange-primary text-white py-3 rounded-lg font-semibold hover:bg-orange-secondary transition-colors">
                            Iniciar Sesión
                        </button>
                    </form>
                    
                    <div class="mt-4 p-3 bg-blue-900/20 rounded-lg text-sm text-blue-300">
                        <strong>Usuarios de prueba:</strong><br>
                        • admin / admin123<br>
                        • usuario1 / password1<br>
                        • juan / juan123
                    </div>
                    <?php endif; ?>
                </div>

                <!-- Panel de Preferencias -->
                <div>
                    <h3 class="text-xl font-semibold text-white mb-4">Preferencias del Usuario</h3>
                    
                    <div class="bg-dark-bg p-6 rounded-lg mb-4">
                        <h4 class="text-lg font-semibold text-orange-primary mb-4">Configuración (Cookies)</h4>
                        
                        <div class="mb-4 p-3 bg-gray-800 rounded">
                            <p class="text-sm text-gray-text mb-2">Configuración actual:</p>
                            <div class="space-y-1 text-sm">
                                <div><span class="text-orange-secondary">Tema:</span> <span class="text-white"><?php echo ucfirst($temaActual); ?></span></div>
                                <div><span class="text-orange-secondary">Idioma:</span> <span class="text-white"><?php echo strtoupper($idiomaActual); ?></span></div>
                                <?php if ($usuarioRecordado): ?>
                                <div><span class="text-orange-secondary">Usuario recordado:</span> <span class="text-white"><?php echo $usuarioRecordado; ?></span></div>
                                <?php endif; ?>
                            </div>
                        </div>
                        
                        <form method="POST" class="space-y-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-text mb-2">Tema preferido</label>
                                <select name="tema" class="w-full px-4 py-3 bg-dark-surface border border-gray-700 rounded-lg text-white focus:border-orange-primary focus:outline-none">
                                    <option value="oscuro" <?php echo $temaActual == 'oscuro' ? 'selected' : ''; ?>>Tema Oscuro</option>
                                    <option value="claro" <?php echo $temaActual == 'claro' ? 'selected' : ''; ?>>Tema Claro</option>
                                    <option value="automatico" <?php echo $temaActual == 'automatico' ? 'selected' : ''; ?>>Automático</option>
                                </select>
                            </div>
                            
                            <div>
                                <label class="block text-sm font-medium text-gray-text mb-2">Idioma</label>
                                <select name="idioma" class="w-full px-4 py-3 bg-dark-surface border border-gray-700 rounded-lg text-white focus:border-orange-primary focus:outline-none">
                                    <option value="es" <?php echo $idiomaActual == 'es' ? 'selected' : ''; ?>>Español</option>
                                    <option value="en" <?php echo $idiomaActual == 'en' ? 'selected' : ''; ?>>English</option>
                                    <option value="fr" <?php echo $idiomaActual == 'fr' ? 'selected' : ''; ?>>Français</option>
                                </select>
                            </div>
                            
                            <button type="submit" name="guardar_preferencias" class="w-full bg-blue-600 text-white py-3 rounded-lg font-semibold hover:bg-blue-700 transition-colors">
                                Guardar Preferencias
                            </button>
                        </form>
                    </div>
                    
                    <!-- Información técnica -->
                    <div class="bg-dark-bg p-4 rounded-lg text-xs">
                        <h5 class="text-orange-secondary font-semibold mb-2">Información Técnica</h5>
                        <div class="space-y-1 text-gray-400 font-mono">
                            <div>Session ID: <?php echo session_id(); ?></div>
                            <div>Cookies activas: <?php echo count($_COOKIE); ?></div>
                            <div>Variables de sesión: <?php echo count($_SESSION); ?></div>
                            <div>Tiempo servidor: <?php echo date('Y-m-d H:i:s'); ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Consigna -->
        <div class="bg-gradient-to-r from-orange-primary to-orange-secondary rounded-2xl p-8 mb-8">
            <h2 class="text-2xl font-semibold text-white mb-6">🎯 Consigna de la Actividad</h2>
            
            <div class="bg-white/10 backdrop-blur rounded-lg p-6">
                <h3 class="text-xl font-bold text-white mb-4">Carrito de Compras con Sesiones y Preferencias</h3>
                
                <div class="space-y-4 text-white">
                    <div>
                        <h4 class="font-semibold mb-2">Parte 1: Sistema de Autenticación</h4>
                        <ul class="list-disc list-inside space-y-1 text-sm opacity-90">
                            <li>Login con usuario y contraseña (crear 3 usuarios diferentes)</li>
                            <li>Guardar en sesión: usuario, rol (cliente/admin), tiempo de login</li>
                            <li>Cookie "recordar usuario" que persista 7 días</li>
                            <li>Logout que destruya sesión y cookies de recordar</li>
                            <li>Redirección automática si no está logueado</li>
                        </ul>
                    </div>
                    
                    <div>
                        <h4 class="font-semibold mb-2">Parte 2: Carrito de Compras (Sesiones)</h4>
                        <ul class="list-disc list-inside space-y-1 text-sm opacity-90">
                            <li>Array de productos con: id, nombre, precio, stock</li>
                            <li>Funciones: agregar, quitar, vaciar carrito</li>
                            <li>Mostrar total y cantidad de productos</li>
                            <li>Validar stock disponible antes de agregar</li>
                            <li>Persistir carrito durante toda la sesión</li>
                        </ul>
                    </div>
                    
                    <div>
                        <h4 class="font-semibold mb-2">Parte 3: Preferencias del Usuario (Cookies)</h4>
                        <ul class="list-disc list-inside space-y-1 text-sm opacity-90">
                            <li>Moneda preferida (EUR, USD, MXN) - duración 30 días</li>
                            <li>Productos por página (10, 20, 50) - duración 30 días</li>
                            <li>Última categoría visitada - duración 1 día</li>
                            <li>Historial de productos vistos (últimos 5) - duración 7 días</li>
                        </ul>
                    </div>
                    
                    <div>
                        <h4 class="font-semibold mb-2">Parte 4: Panel de Administración</h4>
                        <ul class="list-disc list-inside space-y-1 text-sm opacity-90">
                            <li>Solo accesible para usuarios con rol "admin"</li>
                            <li>Ver todas las sesiones activas simuladas</li>
                            <li>Estadísticas: productos más añadidos, usuarios conectados</li>
                            <li>Resetear preferencias de un usuario específico</li>
                        </ul>
                    </div>
                </div>
                
                <div class="mt-6 p-4 bg-white/10 rounded-lg">
                    <p class="text-white font-medium">📋 Bonus: Implementar sistema de "productos recientemente vistos" y "sugerencias basadas en el carrito" usando tanto sesiones como cookies de manera inteligente.</p>
                </div>
            </div>
        </div>

        <!-- Navegación -->
        <div class="flex justify-between items-center">
            <a href="actividad5.php" class="inline-flex items-center px-6 py-3 bg-gray-600 text-white rounded-lg hover:bg-gray-500 transition-colors">
                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"/>
                </svg>
                Actividad Anterior
            </a>
            
            <a href="index.php" class="inline-flex items-center px-6 py-3 bg-green-600 text-white rounded-lg hover:bg-green-700 transition-colors">
                🎉 ¡Actividades Completadas!
                <svg class="w-5 h-5 ml-2" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"/>
                </svg>
            </a>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-dark-surface border-t-2 border-orange-primary mt-12">
        <div class="container mx-auto px-6 py-8">
            <div class="text-center">
                <p class="text-gray-text">&copy; 2025 Actividad PHP. Todos los derechos reservados.</p>
                <p class="text-sm text-gray-500 mt-2">Desarrollado con PHP y Tailwind CSS</p>
            </div>
        </div>
    </footer>

</body>

</html>