<section class="h-screen text-white px-6 flex flex-col justify-center relative overflow-hidden" id="segmentos">
  <video autoplay muted loop playsinline class="absolute inset-0 w-full h-full object-cover z-0">
    <source src="{{ asset('videos/segmentos.mp4') }}" type="video/mp4">
    Tu navegador no soporta videos HTML5.
  </video>

  <div class="absolute inset-0 bg-black/80 z-0"></div>

  <div class="max-w-7xl mx-auto text-center mb-16 relative z-10 opacity-0 translate-y-10 transition-all duration-1000" id="segmentos-content">
    <h2 class="text-5xl font-bold mb-6 font-tech">Nuestros principales públicos</h2>

    <p class="text-gray-400 text-lg mb-12">Conectamos con diferentes públicos gracias a la versatilidad de nuestros productos.</p>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
      <div class="bg-gray-800 bg-opacity-80 rounded-xl p-6 text-center shadow-lg hover:scale-105 transition-transform duration-300">
        <div class="text-5xl mb-4">👩‍🎓</div>
        <h3 class="text-2xl font-semibold mb-2">Estudiantes y profesionales</h3>
      </div>

      <div class="bg-gray-800 bg-opacity-80 rounded-xl p-6 text-center shadow-lg hover:scale-105 transition-transform duration-300">
        <div class="text-5xl mb-4">🎮</div>
        <h3 class="text-2xl font-semibold mb-2">Gamers exigentes</h3>
      </div>

      <div class="bg-gray-800 bg-opacity-80 rounded-xl p-6 text-center shadow-lg hover:scale-105 transition-transform duration-300">
        <div class="text-5xl mb-4">🧑‍🦯</div>
        <h3 class="text-2xl font-semibold mb-2">Personas con discapacidad</h3>
      </div>

      <div class="bg-gray-800 bg-opacity-80 rounded-xl p-6 text-center shadow-lg hover:scale-105 transition-transform duration-300">
        <div class="text-5xl mb-4">👨‍💻</div>
        <h3 class="text-2xl font-semibold mb-2">Jóvenes de 18 a 35 años</h3>
      </div>
    </div>
  </div>
</section>
