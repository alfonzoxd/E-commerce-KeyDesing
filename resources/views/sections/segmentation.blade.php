<style>
    :root {
        --keydesign-black: #0a0a0a;
        --keydesign-dark-gray: #1a1a1a;
        --keydesign-medium-gray: #2a2a2a;
        --keydesign-red: #dc2626;
        --keydesign-red-light: #ef4444;
        --keydesign-red-dark: #b91c1c;
    }

    .bg-keydesign-black { background-color: var(--keydesign-black); }
    .bg-keydesign-dark-gray { background-color: var(--keydesign-dark-gray); }
    .bg-keydesign-red { background-color: var(--keydesign-red); }
    .border-keydesign-medium-gray { border-color: var(--keydesign-medium-gray); }
    .hover\:bg-keydesign-red-dark:hover { background-color: var(--keydesign-red-dark); }

    .border-keydesign-red\/50 { border-color: rgba(220, 38, 38, 0.5); }
    .hover\:border-keydesign-red\/50:hover { border-color: rgba(220, 38, 38, 0.5); }
    .border-keydesign-red\/20 { border-color: rgba(220, 38, 38, 0.2); }

    .from-keydesign-red { --tw-gradient-from: var(--keydesign-red); }
    .to-keydesign-red-light { --tw-gradient-to: var(--keydesign-red-light); }
    .from-keydesign-red\/10 { --tw-gradient-from: rgba(220, 38, 38, 0.1); }
    .to-keydesign-red-light\/10 { --tw-gradient-to: rgba(239, 68, 68, 0.1); }

    .text-gradient {
        background: linear-gradient(45deg, var(--keydesign-red), var(--keydesign-red-light));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .card-hover {
        transition: all 0.3s ease;
        transform: scale(1);
    }

    .card-hover:hover {
        transform: scale(1.03) !important;
        border-color: rgba(220, 38, 38, 0.5);
    }

    .focus\:border-keydesign-red:focus {
        border-color: var(--keydesign-red);
    }

    .form-success {
        animation: slideIn 0.5s ease-out;
    }

    @keyframes slideIn {
        from { transform: translateY(-20px); opacity: 0; }
        to { transform: translateY(0); opacity: 1; }
    }
</style>

<section class="py-20 relative overflow-hidden" style="background: transparent !important;">
    <!-- Imagen de fondo -->
    <div class="absolute inset-0 z-0">
        <img src="images/banner5.jpg" alt="Background" class="w-full h-full object-cover opacity-30">
    </div>

    <!-- Contenido principal -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <!-- Header -->
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold mb-6">
                <span class="text-white">Diseñado Para</span>
                <span class="text-gradient">Profesionales</span>
            </h2>
            <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                Cada teclado KeyDesign está específicamente diseñado para satisfacer las necesidades
                únicas de diferentes profesionales y entusiastas.
            </p>
            <div class="w-24 h-1 bg-gradient-to-r from-keydesign-red to-keydesign-red-light mx-auto mt-8"></div>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Gamers Profesionales -->
            <div class="bg-keydesign-dark-gray/80 backdrop-blur-sm rounded-2xl p-6 border border-keydesign-medium-gray card-hover">
                <div class="w-16 h-16 bg-gradient-to-br from-red-500 to-pink-500 rounded-xl flex items-center justify-center mb-6">
                    <svg class="h-8 w-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h1m4 0h1m-6 4h8m-9-9h10a2 2 0 012 2v8a2 2 0 01-2 2H7a2 2 0 01-2-2V7a2 2 0 012-2z"/>
                    </svg>
                </div>

                <h3 class="text-xl font-bold text-white mb-4">Gamers Profesionales</h3>
                <p class="text-gray-400 mb-6 leading-relaxed">
                    Teclados con respuesta ultra-rápida, iluminación RGB personalizable y teclas macro programables.
                </p>

                <ul class="space-y-2">
                    <li class="flex items-center text-sm text-gray-300">
                        <div class="w-2 h-2 bg-keydesign-red rounded-full mr-3"></div>
                        Switches Cherry MX Speed
                    </li>
                    <li class="flex items-center text-sm text-gray-300">
                        <div class="w-2 h-2 bg-keydesign-red rounded-full mr-3"></div>
                        Anti-ghosting completo
                    </li>
                    <li class="flex items-center text-sm text-gray-300">
                        <div class="w-2 h-2 bg-keydesign-red rounded-full mr-3"></div>
                        Polling rate de 1000Hz
                    </li>
                </ul>
            </div>

            <!-- Desarrolladores -->
            <div class="bg-keydesign-dark-gray/80 backdrop-blur-sm rounded-2xl p-6 border border-keydesign-medium-gray card-hover">
                <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-cyan-500 rounded-xl flex items-center justify-center mb-6">
                    <svg class="h-8 w-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                    </svg>
                </div>

                <h3 class="text-xl font-bold text-white mb-4">Desarrolladores</h3>
                <p class="text-gray-400 mb-6 leading-relaxed">
                    Diseñados para largas sesiones de código con comodidad y precisión excepcionales.
                </p>

                <ul class="space-y-2">
                    <li class="flex items-center text-sm text-gray-300">
                        <div class="w-2 h-2 bg-keydesign-red rounded-full mr-3"></div>
                        Switches táctiles
                    </li>
                    <li class="flex items-center text-sm text-gray-300">
                        <div class="w-2 h-2 bg-keydesign-red rounded-full mr-3"></div>
                        Layout programable
                    </li>
                    <li class="flex items-center text-sm text-gray-300">
                        <div class="w-2 h-2 bg-keydesign-red rounded-full mr-3"></div>
                        Teclas de función dedicadas
                    </li>
                </ul>
            </div>

            <!-- Diseñadores Creativos -->
            <div class="bg-keydesign-dark-gray/80 backdrop-blur-sm rounded-2xl p-6 border border-keydesign-medium-gray card-hover">
                <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-indigo-500 rounded-xl flex items-center justify-center mb-6">
                    <svg class="h-8 w-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zM21 5a2 2 0 00-2-2h-4a2 2 0 00-2 2v6a2 2 0 002 2h4a2 2 0 002-2V5z"/>
                    </svg>
                </div>

                <h3 class="text-xl font-bold text-white mb-4">Diseñadores Creativos</h3>
                <p class="text-gray-400 mb-6 leading-relaxed">
                    Herramientas perfectas para workflows creativos con shortcuts personalizables.
                </p>

                <ul class="space-y-2">
                    <li class="flex items-center text-sm text-gray-300">
                        <div class="w-2 h-2 bg-keydesign-red rounded-full mr-3"></div>
                        Rueda de volumen
                    </li>
                    <li class="flex items-center text-sm text-gray-300">
                        <div class="w-2 h-2 bg-keydesign-red rounded-full mr-3"></div>
                        Teclas multimedia
                    </li>
                    <li class="flex items-center text-sm text-gray-300">
                        <div class="w-2 h-2 bg-keydesign-red rounded-full mr-3"></div>
                        Perfiles de iluminación
                    </li>
                </ul>
            </div>

            <!-- Profesionales de Oficina -->
            <div class="bg-keydesign-dark-gray/80 backdrop-blur-sm rounded-2xl p-6 border border-keydesign-medium-gray card-hover">
                <div class="w-16 h-16 bg-gradient-to-br from-green-500 to-teal-500 rounded-xl flex items-center justify-center mb-6">
                    <svg class="h-8 w-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2-2v2m8 0V6a2 2 0 012 2v6a2 2 0 01-2 2H6a2 2 0 01-2-2V8a2 2 0 012-2V6"/>
                    </svg>
                </div>

                <h3 class="text-xl font-bold text-white mb-4">Profesionales de Oficina</h3>
                <p class="text-gray-400 mb-6 leading-relaxed">
                    Teclados ergonómicos y silenciosos para entornos profesionales exigentes.
                </p>

                <ul class="space-y-2">
                    <li class="flex items-center text-sm text-gray-300">
                        <div class="w-2 h-2 bg-keydesign-red rounded-full mr-3"></div>
                        Switches silenciosos
                    </li>
                    <li class="flex items-center text-sm text-gray-300">
                        <div class="w-2 h-2 bg-keydesign-red rounded-full mr-3"></div>
                        Diseño ergonómico
                    </li>
                    <li class="flex items-center text-sm text-gray-300">
                        <div class="w-2 h-2 bg-keydesign-red rounded-full mr-3"></div>
                        Conectividad inalámbrica
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('consultationForm');
        const simpleButton = document.getElementById('simpleButton');

        if (form && form.action.endsWith('#')) {
            form.style.display = 'none';
            simpleButton.style.display = 'block';
        }
    });

    function showConsultationAlert() {
        alert('¡Gracias por tu interés! Por favor contacta con nuestro equipo de ventas para una consulta personalizada.');
    }

    document.addEventListener('DOMContentLoaded', function() {
        const cards = document.querySelectorAll('.card-hover');

        cards.forEach((card, index) => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(20px) scale(1)';

            setTimeout(() => {
                card.style.transition = 'opacity 0.6s ease, transform 0.3s ease';
                card.style.opacity = '1';
                card.style.transform = 'translateY(0) scale(1)';
            }, index * 100);
        });
    });

    document.addEventListener('DOMContentLoaded', function() {
        const inputs = document.querySelectorAll('#consultationForm input, #consultationForm textarea');

        inputs.forEach(input => {
            input.addEventListener('blur', function() {
                if (this.value.trim() === '' && this.hasAttribute('required')) {
                    this.style.borderColor = '#ef4444';
                } else {
                    this.style.borderColor = 'var(--keydesign-medium-gray)';
                }
            });

            input.addEventListener('focus', function() {
                this.style.borderColor = 'var(--keydesign-red)';
            });
        });
    });
</script>
