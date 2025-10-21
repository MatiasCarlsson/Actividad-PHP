<?php
$pageTitle = 'Contacto - Actividad PHP';
$basePath = '../';
include '../components/header.php';
?>

    <!-- Main Content -->
    <main class="container mx-auto px-6 py-12">
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold text-white mb-4">Contacto</h1>
            <p class="text-xl text-gray-text max-w-2xl mx-auto">¿Tienes preguntas sobre las
                actividades? Contáctanos</p>
        </div>

        <div class="grid lg:grid-cols-2 gap-8 max-w-6xl mx-auto">
            <!-- Información de Contacto -->
            <div class="bg-dark-surface rounded-2xl p-8 border border-gray-700">
                <h2 class="text-2xl font-semibold text-orange-primary mb-6 flex items-center">
                    <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                        <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                    </svg>
                    Información de Contacto
                </h2>

                <div class="space-y-6">
                    <div class="flex items-start space-x-4">
                        <div class="bg-orange-primary p-3 rounded-lg">
                            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-white">Email</h3>
                            <p class="text-orange-secondary">contacto@actividadphp.com</p>
                            <p class="text-gray-text text-sm mt-1">Respuesta en 24 horas</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <div class="bg-orange-primary p-3 rounded-lg">
                            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-white">Teléfono</h3>
                            <p class="text-orange-secondary">+1 (555) 123-4567</p>
                            <p class="text-gray-text text-sm mt-1">Lun-Vie 9:00 AM - 6:00 PM</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <div class="bg-orange-primary p-3 rounded-lg">
                            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-white">Ubicación</h3>
                            <p class="text-orange-secondary">Ciudad, País</p>
                            <p class="text-gray-text text-sm mt-1">Disponible remotamente</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Formulario de Contacto -->
            <div class="bg-dark-surface rounded-2xl p-8 border border-gray-700">
                <h2 class="text-2xl font-semibold text-orange-primary mb-6 flex items-center">
                    <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M18 10c0 3.866-3.582 7-8 7a8.841 8.841 0 01-4.083-.98L2 17l1.338-3.123C2.493 12.767 2 11.434 2 10c0-3.866 3.582-7 8-7s8 3.134 8 7zM7 9H5v2h2V9zm8 0h-2v2h2V9zM9 9h2v2H9V9z" />
                    </svg>
                    Envía un Mensaje
                </h2>

                <form class="space-y-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-text mb-2">Nombre</label>
                        <input type="text"
                            class="w-full px-4 py-3 bg-dark-bg border border-gray-700 rounded-lg text-white focus:border-orange-primary focus:outline-none transition-colors"
                            placeholder="Tu nombre completo">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-text mb-2">Email</label>
                        <input type="email"
                            class="w-full px-4 py-3 bg-dark-bg border border-gray-700 rounded-lg text-white focus:border-orange-primary focus:outline-none transition-colors"
                            placeholder="tu@email.com">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-text mb-2">Asunto</label>
                        <select
                            class="w-full px-4 py-3 bg-dark-bg border border-gray-700 rounded-lg text-white focus:border-orange-primary focus:outline-none transition-colors">
                            <option>Pregunta sobre actividades</option>
                            <option>Reporte de error</option>
                            <option>Sugerencia</option>
                            <option>Otro</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-text mb-2">Mensaje</label>
                        <textarea rows="4"
                            class="w-full px-4 py-3 bg-dark-bg border border-gray-700 rounded-lg text-white focus:border-orange-primary focus:outline-none transition-colors"
                            placeholder="Describe tu pregunta o comentario..."></textarea>
                    </div>

                    <button type="submit"
                        class="w-full bg-orange-primary text-white py-3 rounded-lg font-semibold hover:bg-orange-secondary transition-colors duration-300">
                        Enviar Mensaje
                    </button>
                </form>
            </div>
        </div>
    </main>

<?php include '../components/footer.php'; ?>
