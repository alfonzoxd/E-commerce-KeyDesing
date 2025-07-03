<section class="relative w-full min-h-screen overflow-hidden hero-gradient flex items-center justify-center">
    <video
        autoplay
        muted
        loop
        playsinline
        class="absolute top-0 left-0 w-full h-full object-cover z-0">
        <source src="{{ asset('videos/banner.mp4') }}" type="video/mp4">
        Tu navegador no soporta el video.
    </video>

    <div class="absolute inset-0 opacity-10 z-10">
        <div class="absolute inset-0"
            style="background-image: radial-gradient(circle at 25px 25px, rgba(255,0,0,0.2) 2px, transparent 0),
                   radial-gradient(circle at 75px 75px, rgba(255,0,0,0.1) 2px, transparent 0);
                   background-size: 100px 100px;">
        </div>
    </div>

    <!-- Contenido del banner -->
    <div class="relative z-20 text-center px-6 max-w-6xl mx-auto pt-16">
        <h1 class="text-6xl md:text-8xl font-bold mb-6 text-white">
            <span class="text-white">Key</span>
            <span class="bg-clip-text text-transparent bg-gradient-to-r from-red-600 to-red-400">Design</span>
        </h1>

        <p class="text-xl md:text-2xl text-gray-300 mb-8 max-w-3xl mx-auto leading-relaxed">
            Descubre la experiencia definitiva en teclados premium.
            Diseñados para gamers, profesionales y entusiastas que buscan la perfección.
        </p>

        <div class="flex flex-col sm:flex-row gap-4 justify-center items-center mb-12">
            <a href="{{ route ('products.index') }}" class="inline-flex items-center justify-center">
                <button class="bg-gradient-to-r from-red-600 to-red-700 hover:from-red-700 hover:to-red-800 text-white px-8 py-4 text-lg font-semibold transition-all duration-300 transform hover:scale-105 rounded-lg">
                    Explorar Productos
                </button>
            </a>

            <button
                onclick="document.getElementById('about-section')?.scrollIntoView({ behavior: 'smooth' })"
                class="border border-red-500 text-red-400 hover:bg-red-950/50 px-8 py-4 text-lg transition-all duration-300 rounded-lg"
            >
                Conocer Más
            </button>
        </div>

        <!-- Sección de características -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-16">
            <div class="text-center">
                <div class="w-16 h-16 bg-black-600/20 rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-black-400 text-2xl font-bold">⚡</span>
                </div>
                <h3 class="text-xl font-semibold text-white mb-2">Alto Rendimiento</h3>
                <p class="text-gray-400">Switches premium para máxima precisión</p>
            </div>

            <div class="text-center">
                <div class="w-16 h-16 bg-black-600/20 rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-black-400 text-2xl font-bold">🎨</span>
                </div>
                <h3 class="text-xl font-semibold text-white mb-2">Diseño Personalizable</h3>
                <p class="text-gray-400">RGB y keycaps intercambiables</p>
            </div>

            <div class="text-center">
                <div class="w-16 h-16 bg-black-600/20 rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-black-400 text-2xl font-bold">🛡️</span>
                </div>
                <h3 class="text-xl font-semibold text-white mb-2">Calidad Premium</h3>
                <p class="text-gray-400">Garantía extendida y soporte técnico</p>
            </div>
        </div>
    </div>

    <!-- Indicador de scroll -->
    <button
        onclick="document.getElementById('about-section')?.scrollIntoView({ behavior: 'smooth' })"
        class="absolute bottom-8 left-1/2 transform -translate-x-1/2 text-white/70 hover:text-red-400 transition-colors animate-bounce z-20"
        aria-label="Scroll to next section"
    >
        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
        </svg>
    </button>
</section>
