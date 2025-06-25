@php
$testimonials = [
    [
        'name' => 'Carlos Mendoza',
        'role' => 'Desarrollador Senior',
        'company' => 'TechCorp',
        'image' => 'images/persona1.jpg',
        'rating' => 5,
        'text' => 'Después de 3 años usando mi KeyDesign Pro, sigue funcionando como el primer día. La calidad es excepcional y mi productividad ha aumentado significativamente.'
    ],
    [
        'name' => 'María González',
        'role' => 'Diseñadora UX/UI',
        'company' => 'Creative Studio',
        'image' => 'images/persona2.jpg',
        'rating' => 5,
        'text' => 'El teclado RGB Gaming de KeyDesign no solo es hermoso, sino que las teclas programables me han simplificado enormemente mi flujo de trabajo creativo.'
    ],
    [
        'name' => 'Alejandro Rivera',
        'role' => 'Gamer Profesional',
        'company' => 'Team Phoenix',
        'image' => 'images/persona3.jpg',
        'rating' => 5,
        'text' => 'En competencias profesionales, cada milisegundo cuenta. Mi teclado KeyDesign me da la ventaja que necesito con su respuesta instantánea.'
    ]
];
@endphp

<section class="py-16 relative overflow-hidden">
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('images/banner6.jpg') }}"
             alt="Background"
             class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-black/70"></div>
    </div>

    <div class="relative z-10 max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-4xl md:text-5xl font-bold mb-6">
                <span class="text-white">Lo Que Dicen</span>
                <span class="text-gradient">Nuestros Clientes</span>
            </h2>
            <p class="text-xl text-gray-200 max-w-3xl mx-auto">
                Miles de profesionales confían en KeyDesign para mejorar su productividad y experiencia de trabajo.
            </p>
            <div class="w-24 h-1 bg-gradient-to-r from-keydesign-red to-keydesign-red-light mx-auto mt-8"></div>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($testimonials as $index => $testimonial)
                <div class="bg-keydesign-dark-gray/90 backdrop-blur-sm rounded-xl p-5 border border-keydesign-red/10 hover:border-keydesign-red/30 transition-all duration-300 hover:transform hover:scale-105 relative group">
                    <svg class="absolute top-3 right-3 h-6 w-6 text-keydesign-red/20 group-hover:text-keydesign-red/40 transition-colors"
                         fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                    </svg>

                    <div class="flex items-center mb-3">
                        <img src="{{ asset($testimonial['image']) }}"
                             alt="{{ $testimonial['name'] }}"
                             class="w-12 h-12 rounded-full object-cover mr-3 border-2 border-keydesign-red/20">
                        <div>
                            <h4 class="text-base font-semibold text-white">{{ $testimonial['name'] }}</h4>
                            <p class="text-keydesign-red font-medium text-sm">{{ $testimonial['role'] }}</p>
                            <p class="text-gray-400 text-xs">{{ $testimonial['company'] }}</p>
                        </div>
                    </div>

                    <div class="flex mb-3">
                        @for($i = 1; $i <= 5; $i++)
                            <svg class="h-3 w-3 {{ $i <= $testimonial['rating'] ? 'text-yellow-400' : 'text-gray-400' }}"
                                 fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                        @endfor
                    </div>

                    <p class="text-gray-300 leading-relaxed italic text-sm">
                        "{{ $testimonial['text'] }}"
                    </p>
                </div>
            @endforeach
        </div>

        <div class="mt-12 text-center">
            <div class="bg-keydesign-dark-gray/90 backdrop-blur-sm rounded-xl p-6 border border-keydesign-red/20">
                <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                    <div>
                        <div class="text-2xl font-bold text-keydesign-red mb-1">4.8/5</div>
                        <div class="text-gray-400 text-sm">Calificación Media</div>
                    </div>
                    <div>
                        <div class="text-2xl font-bold text-keydesign-red mb-1">10,000+</div>
                        <div class="text-gray-400 text-sm">Clientes Satisfechos</div>
                    </div>
                    <div>
                        <div class="text-2xl font-bold text-keydesign-red mb-1">99.8%</div>
                        <div class="text-gray-400 text-sm">Tasa de Satisfacción</div>
                    </div>
                    <div>
                        <div class="text-2xl font-bold text-keydesign-red mb-1">3 Años</div>
                        <div class="text-gray-400 text-sm">Garantía Extendida</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
