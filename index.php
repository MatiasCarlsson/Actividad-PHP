<?php
$pageTitle = 'Actividad PHP - Inicio';
$basePath = '';
include 'components/header.php';
?>

    <!-- Main Content -->
    <main class="container mx-auto px-6 py-12">
        <div class="text-center mb-12">
            <h1 class="text-5xl font-bold text-white mb-4">Bienvenido a la Actividad PHP</h1>
            <p class="text-xl text-gray-text max-w-2xl mx-auto">Explora nuestras actividades de
                desarrollo web con PHP y descubre el poder de la programación del lado del servidor.
            </p>
        </div>

        <!-- Dynamic Content Section -->
        <div class="bg-dark-surface rounded-2xl p-8 mb-8 border border-gray-700">
            <h2 class="text-2xl font-semibold text-orange-primary mb-6 flex items-center">
                <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z" />
                </svg>
                Contenido Dinámico PHP
            </h2>
            <div class="grid gap-4">
                <?php // Generar tres párrafos con PHP

// Generar tres párrafos con PHP
                for ($i = 1; $i <= 3; $i++) {
                    echo "<div class='bg-dark-bg p-6 rounded-lg border-l-4 border-orange-primary'>";
                    echo "<p class='text-gray-text text-lg'>Este es el párrafo número <span class='text-orange-secondary font-semibold'>$i</span> generado dinámicamente con PHP.</p>";
                    echo '</div>';
                } ?>
            </div>
        </div>

        <!-- Quick Actions -->
        <div class="grid md:grid-cols-3 gap-6">
            <div
                class="bg-dark-surface p-6 rounded-xl border border-gray-700 hover:border-orange-primary transition-colors duration-300">
                <h3 class="text-xl font-semibold text-orange-primary mb-3">Actividades</h3>
                <p class="text-gray-text mb-4">Explora nuestras actividades de programación PHP.</p>
                <a href="actividades/index.php"
                    class="inline-block bg-orange-primary text-white px-4 py-2 rounded-lg hover:bg-orange-secondary transition-colors duration-300">Ver
                    Actividades</a>
            </div>

            <div
                class="bg-dark-surface p-6 rounded-xl border border-gray-700 hover:border-orange-primary transition-colors duration-300">
                <h3 class="text-xl font-semibold text-orange-primary mb-3">Acerca de</h3>
                <p class="text-gray-text mb-4">Conoce más sobre este proyecto y sus objetivos.</p>
                <a href="pages/about.php"
                    class="inline-block bg-gray-700 text-white px-4 py-2 rounded-lg hover:bg-gray-600 transition-colors duration-300">Leer
                    más</a>
            </div>

        </div>
    </main>

<?php include 'components/footer.php'; ?>
