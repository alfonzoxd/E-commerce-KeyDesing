<section class="text-center mt-16 relative overflow-hidden">
    <div class="bg-gradient-to-r from-red-950/50 to-black/50 border border-red-900/30 rounded-2xl p-8 max-w-4xl mx-auto">
        <div class="relative z-10">
            <div class="flex items-center justify-center mb-6">
                <div class="bg-red-600/20 rounded-full p-3 mr-4">
                    <svg class="w-7 h-7 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                    </svg>
                </div>
                <h3 class="text-3xl font-bold text-white mb-4">
                    ¿No estás seguro cuál es para ti?
                </h3>
            </div>

            <p class="text-gray-300 mb-6">
                Nuestro equipo de expertos puede ayudarte a encontrar el teclado perfecto según tus necesidades específicas
            </p>

            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="https://wa.me/+51983864192?text=Hola,%20estoy%20interesado%20en%20más%20información%20sobre%20el%20producto%20específico.%20¿Podrías%20darme%20más%20detalles?" target="_blank" class="inline-flex items-center justify-center rounded-lg font-medium transition-all duration-200 transform hover:scale-105 active:scale-95 px-8 py-3 text-lg border-2 bg-transparent border-red-500 text-red-400 hover:bg-red-950/50 group">
                    Asesoría Personalizada
                </a>

                <a href="{{ route('products.index') }}" class="inline-flex items-center justify-center rounded-lg font-medium transition-all duration-200 transform hover:scale-105 active:scale-95 px-8 py-3 text-lg border-0 text-white shadow-lg hover:shadow-xl bg-gradient-to-r from-red-600 to-red-700 hover:from-red-700 hover:to-red-800 group relative overflow-hidden">
                    Ver Todos los Productos
                </a>
            </div>
        </div>
    </div>
</section>

<style>
    @keyframes shimmer {
        0% { transform: translateX(-100%); }
        100% { transform: translateX(100%); }
    }

    .animate-shimmer {
        animation: shimmer 2s infinite;
    }

    @keyframes float {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-10px); }
    }

    .animate-float {
        animation: float 3s ease-in-out infinite;
    }
</style>
