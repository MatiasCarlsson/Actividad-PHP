<?php
$pageTitle = 'Acerca de - Actividad PHP';
$basePath = '../';
include '../components/header.php';
?>

    <!-- Main Content -->
    <main class="container mx-auto px-6 py-12">
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold text-white mb-4">Acerca del Proyecto</h1>
            <p class="text-xl text-gray-text max-w-2xl mx-auto">Conoce más sobre este proyecto
                educativo de PHP</p>
        </div>

        <div class="grid lg:grid-cols-2 gap-8 mb-8">
            <!-- Información Principal -->
            <div class="bg-dark-surface rounded-2xl p-8 border border-gray-700">
                <h2 class="text-2xl font-semibold text-orange-primary mb-6 flex items-center">
                    <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    Objetivo del Proyecto
                </h2>
                <p class="text-gray-text leading-relaxed mb-4">
                    Este proyecto educativo está diseñado para enseñar los fundamentos de PHP de
                    manera práctica e interactiva.
                    A través de actividades graduales, los estudiantes pueden aprender desde
                    conceptos básicos hasta técnicas avanzadas.
                </p>
                <p class="text-gray-text leading-relaxed">
                    Cada actividad está cuidadosamente estructurada para proporcionar una
                    experiencia de aprendizaje completa,
                    combinando teoría con ejercicios prácticos.
                </p>
            </div>

            <!-- Características -->
            <div class="bg-dark-surface rounded-2xl p-8 border border-gray-700">
                <h2 class="text-2xl font-semibold text-orange-primary mb-6 flex items-center">
                    <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>
                    Características
                </h2>
                <ul class="space-y-3">
                    <li class="flex items-center text-gray-text">
                        <span class="w-2 h-2 bg-orange-primary rounded-full mr-3"></span>
                        Actividades interactivas graduales
                    </li>
                    <li class="flex items-center text-gray-text">
                        <span class="w-2 h-2 bg-orange-primary rounded-full mr-3"></span>
                        Ejemplos prácticos y funcionales
                    </li>
                    <li class="flex items-center text-gray-text">
                        <span class="w-2 h-2 bg-orange-primary rounded-full mr-3"></span>
                        Diseño responsive y moderno
                    </li>
                    <li class="flex items-center text-gray-text">
                        <span class="w-2 h-2 bg-orange-primary rounded-full mr-3"></span>
                        Código comentado y explicado
                    </li>
                    <li class="flex items-center text-gray-text">
                        <span class="w-2 h-2 bg-orange-primary rounded-full mr-3"></span>
                        Progresión de dificultad lógica
                    </li>
                </ul>
            </div>
        </div>

        <!-- Tecnologías -->
        <div class="bg-dark-surface rounded-2xl p-8 border border-gray-700">
            <h2 class="text-2xl font-semibold text-orange-primary mb-6 text-center">Tecnologías
                Utilizadas</h2>
            <div class="grid md:grid-cols-3 gap-6">
                <div class="text-center p-4 bg-dark-bg rounded-lg">
                    <div class="text-4xl mb-3">🐘</div>
                    <h3 class="text-lg font-semibold text-white mb-2">PHP</h3>
                    <p class="text-gray-text text-sm">Lenguaje de programación del lado del servidor
                    </p>
                </div>
                <div class="text-center p-4 bg-dark-bg rounded-lg">
                    <div class="text-4xl mb-3">🎨</div>
                    <h3 class="text-lg font-semibold text-white mb-2">Tailwind CSS</h3>
                    <p class="text-gray-text text-sm">Framework CSS para diseño rápido y responsivo
                    </p>
                </div>
                <div class="text-center p-4 bg-dark-bg rounded-lg">
                    <div class="text-4xl mb-3">🌐</div>
                    <h3 class="text-lg font-semibold text-white mb-2">HTML5</h3>
                    <p class="text-gray-text text-sm">Estructura semántica y accesible</p>
                </div>
            </div>
        </div>
    </main>

<?php include '../components/footer.php'; ?>
