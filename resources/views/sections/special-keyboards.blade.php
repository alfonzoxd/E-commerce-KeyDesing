@php
$accessibilityOptions = [
    [
        'title' => 'Visión de Colores',
        'subtitle' => 'Para Daltónicos',
        'description' => 'Teclados inteligentes que se adaptan automáticamente a diferentes tipos de daltonismo con tecnología de reconocimiento visual',
        'features' => [
            'IA de detección automática',
            '15 esquemas de color adaptativos',
            'Iluminación RGB inteligente',
            'Personalización por perfil'
        ],
        'icon' => 'eye',
        'gradient' => 'from-purple-500 via-blue-500 to-cyan-500',
        'bgGradient' => 'from-purple-900/20 to-blue-900/20',
        'delay' => '0ms'
    ],
    [
        'title' => 'Visión Ampliada',
        'subtitle' => 'Para Baja Visión',
        'description' => 'Diseño revolucionario con teclas magnificadas, alto contraste dinámico y retroiluminación adaptativa que se ajusta al ambiente',
        'features' => [
            'Teclas 300% más grandes',
            'Contraste dinámico automático',
            'Sensor de luz ambiental',
            'Vibración táctil inteligente'
        ],
        'icon' => 'eye-off',
        'gradient' => 'from-orange-500 via-yellow-500 to-amber-500',
        'bgGradient' => 'from-orange-900/20 to-yellow-900/20',
        'delay' => '200ms'
    ],
    [
        'title' => 'Escritura Táctil',
        'subtitle' => 'Para Braille',
        'description' => 'Tecnología háptica avanzada con células Braille dinámicas que se adaptan en tiempo real mientras escribes',
        'features' => [
            'Células Braille dinámicas',
            'Feedback háptico 4D',
            'Reconocimiento de patrones',
            'Síntesis de voz integrada'
        ],
        'icon' => 'users',
        'gradient' => 'from-green-500 via-emerald-500 to-teal-500',
        'bgGradient' => 'from-green-900/20 to-emerald-900/20',
        'delay' => '400ms'
    ]
];
@endphp

<section class="py-8 px-6 bg-gradient-to-b from-black via-gray-950 to-black relative overflow-hidden">
    <div class="absolute inset-0">
        <div class="absolute top-20 left-10 w-72 h-72 bg-red-500/10 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute bottom-20 right-10 w-96 h-96 bg-blue-500/10 rounded-full blur-3xl animate-pulse" style="animation-delay: 1s;"></div>
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-64 h-64 bg-purple-500/5 rounded-full blur-3xl animate-pulse" style="animation-delay: 2s;"></div>
    </div>

    <div class="max-w-7xl mx-auto relative z-10">
        <div class="text-center mb-20">
            <h2 class="text-6xl font-bold mb-8">
                <span class="text-white">Tecnología que </span>
                <span class="text-gradient bg-gradient-to-r from-red-400 via-red-500 to-red-600 bg-clip-text text-transparent">
                    Incluye
                </span>
            </h2>

            <p class="text-xl text-gray-300 max-w-4xl mx-auto leading-relaxed">
                Rompemos barreras digitales con teclados que se adaptan a cada persona.
                Porque la tecnología debe ser para todos, sin excepciones.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-20">
            @foreach($accessibilityOptions as $index => $option)
                <div class="bg-gradient-to-br {{ $option['bgGradient'] }} backdrop-blur-sm border border-gray-800/50 rounded-lg p-8 card-hover group relative overflow-hidden transition-all duration-500 hover:transform hover:scale-105"
                     style="animation-delay: {{ $option['delay'] }}; animation: fade-in 0.8s ease-out {{ $option['delay'] }} both;">

                    <div class="absolute inset-0 bg-gradient-to-br {{ $option['gradient'] }} opacity-0 group-hover:opacity-10 transition-opacity duration-500"></div>

                    <div class="relative z-10 text-center mb-8">
                        <div class="w-24 h-24 bg-gradient-to-br {{ $option['gradient'] }} rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-all duration-500 shadow-2xl">
                            @if($option['icon'] === 'eye')
                                <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                </svg>
                            @elseif($option['icon'] === 'eye-off')
                                <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.878 9.878L3 3m6.878 6.878L21 21"/>
                                </svg>
                            @elseif($option['icon'] === 'users')
                                <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"/>
                                </svg>
                            @endif
                        </div>

                        <div class="space-y-2">
                            <h3 class="text-2xl font-bold text-white group-hover:text-red-300 transition-colors duration-300">
                                {{ $option['title'] }}
                            </h3>
                            <p class="text-sm font-medium bg-gradient-to-r {{ $option['gradient'] }} bg-clip-text text-transparent">
                                {{ $option['subtitle'] }}
                            </p>
                        </div>
                    </div>

                    <p class="text-gray-300 text-center mb-8 leading-relaxed relative z-10">
                        {{ $option['description'] }}
                    </p>

                    <div class="space-y-4 mb-8 relative z-10">
                        @foreach($option['features'] as $feature)
                            <div class="flex items-center space-x-3 group/feature">
                                <div class="w-3 h-3 bg-gradient-to-r {{ $option['gradient'] }} rounded-full flex-shrink-0 group-hover/feature:scale-125 transition-transform duration-300"></div>
                                <span class="text-gray-300 text-sm group-hover/feature:text-white transition-colors duration-300">
                                    {{ $feature }}
                                </span>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<style>
@keyframes fade-in {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.card-hover {
    transition: all 0.3s ease;
}

.card-hover:hover {
    transform: translateY(-5px);
    box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5);
}

.text-gradient {
    background-size: 200% 200%;
    animation: gradient-shift 3s ease infinite;
}

@keyframes gradient-shift {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
}
</style>
