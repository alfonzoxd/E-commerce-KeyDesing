<section
  class="h-screen text-white flex flex-col justify-center px-6 bg-cover bg-center bg-no-repeat relative"
  id="testimonios"
  style="background-image: url('{{ asset('images/banner_comentarios.jpg') }}')"
>
  <div class="absolute inset-0 bg-black/80 z-0"></div>

  <div class="relative z-10 opacity-0 translate-y-10 transition-all duration-1000" id="testimonios-content">
    <div class="max-w-7xl mx-auto text-center mb-16">
      <h2 class="text-5xl font-bold mb-4 font-tech">Testimonios de Nuestros Clientes</h2>
      <p class="text-gray-300 max-w-2xl mx-auto text-lg">
        Lo que nuestros clientes dicen sobre KeyDesign.
      </p>
    </div>

    <div class="max-w-6xl mx-auto grid gap-12 md:grid-cols-3">
      <div class="bg-black/60 rounded-xl shadow-lg p-8 flex flex-col items-center">
        <img src="{{ asset('images/persona1.jpg') }}" alt="Juan P." class="w-24 h-24 rounded-full mb-6 object-cover shadow-md">
        <h3 class="text-2xl font-semibold mb-2">Juan P.</h3>
        <p class="text-gray-300 italic text-center text-lg leading-relaxed">
          "¡El mejor teclado que he tenido! La calidad es increíble y la experiencia de escritura es inigualable."
        </p>
      </div>

      <div class="bg-black/60 rounded-xl shadow-lg p-8 flex flex-col items-center">
        <img src="{{ asset('images/persona2.jpg') }}" alt="María G." class="w-24 h-24 rounded-full mb-6 object-cover shadow-md">
        <h3 class="text-2xl font-semibold mb-2">María G.</h3>
        <p class="text-gray-300 italic text-center text-lg leading-relaxed">
          "El servicio al cliente es excelente. Me ayudaron a elegir el teclado perfecto para mis necesidades de trabajo."
        </p>
      </div>

      <div class="bg-black/60 rounded-xl shadow-lg p-8 flex flex-col items-center">
        <img src="{{ asset('images/persona3.jpg') }}" alt="Carlos S." class="w-24 h-24 rounded-full mb-6 object-cover shadow-md">
        <h3 class="text-2xl font-semibold mb-2">Carlos S.</h3>
        <p class="text-gray-300 italic text-center text-lg leading-relaxed">
          "¡Envío rápido y seguro! Recibí mi teclado antes de lo esperado. ¡Definitivamente compraré de nuevo en KeyDesign!"
        </p>
      </div>
    </div>
  </div>
</section>
