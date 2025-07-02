@extends('layouts.app')

@section('title', $product['name'])

@section('content')

<div class="min-h-screen bg-gradient-to-br from-gray-900 via-black to-gray-900 pt-16 relative overflow-hidden">
    <!-- Efectos de fondo -->
    <div class="absolute inset-0 bg-gradient-to-r from-red-500/5 via-transparent to-red-500/5"></div>
    <div class="absolute top-0 left-1/4 w-96 h-96 bg-red-500/10 rounded-full blur-3xl"></div>
    <div class="absolute bottom-0 right-1/4 w-96 h-96 bg-red-500/5 rounded-full blur-3xl"></div>

    <!-- Botón de retroceso mejorado -->
    <a href="{{ route('products.index') }}"
       class="fixed left-6 top-20 z-50 group bg-black/40 backdrop-blur-lg hover:bg-red-500/20 border border-red-500/20 p-3 rounded-xl transition-all duration-300 hover:scale-110 hover:shadow-lg hover:shadow-red-500/20">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white group-hover:text-red-400 transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
        </svg>
    </a>

    <div class="max-w-7xl mx-auto px-6 py-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
            <!-- Product Images - Mejorado -->
            <div class="relative space-y-6">
                <!-- Imagen principal con overlay gradient -->
                <div class="relative group">
                    <div class="aspect-square rounded-3xl overflow-hidden bg-gradient-to-br from-gray-800 to-gray-900 shadow-2xl">
                        <div id="imageContainer" class="flex transition-all duration-700 ease-out h-full">
                            @foreach($product['images'] as $image)
                                <div class="relative w-full h-full flex-shrink-0">
                                    <img src="{{ asset($image) }}" alt="{{ $product['name'] }}"
                                         class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                                    <div class="absolute inset-0 bg-gradient-to-t from-black/20 via-transparent to-transparent"></div>
                                </div>
                            @endforeach
                        </div>

                        <!-- Controles de navegación de imágenes -->
                        <button id="prevImage"
                                class="absolute left-4 top-1/2 -translate-y-1/2 bg-black/50 backdrop-blur-sm hover:bg-red-500/30 text-white p-3 rounded-full opacity-0 group-hover:opacity-100 transition-all duration-300 hover:scale-110">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                            </svg>
                        </button>
                        <button id="nextImage"
                                class="absolute right-4 top-1/2 -translate-y-1/2 bg-black/50 backdrop-blur-sm hover:bg-red-500/30 text-white p-3 rounded-full opacity-0 group-hover:opacity-100 transition-all duration-300 hover:scale-110">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </button>

                        <!-- Indicadores de imagen -->
                        <div class="absolute bottom-4 left-1/2 -translate-x-1/2 flex space-x-2">
                            @foreach($product['images'] as $index => $image)
                                <button class="image-indicator w-3 h-3 rounded-full bg-white/30 hover:bg-white/60 transition-all duration-300"
                                        data-index="{{ $index }}"></button>
                            @endforeach
                        </div>
                    </div>
                </div>

                <!-- Miniaturas -->
                <div class="flex space-x-3 overflow-x-auto pb-2">
                    @foreach($product['images'] as $index => $image)
                        <button class="thumbnail flex-shrink-0 w-20 h-20 rounded-xl overflow-hidden border-2 border-transparent hover:border-red-500 transition-all duration-300 opacity-60 hover:opacity-100"
                                data-index="{{ $index }}">
                            <img src="{{ asset($image) }}" alt="Thumbnail" class="w-full h-full object-cover">
                        </button>
                    @endforeach
                </div>
            </div>

            <!-- Product Info - Completamente rediseñado -->
            <div class="space-y-8">
                <!-- Header del producto -->
                <div class="space-y-4">
                    <div class="flex items-center space-x-3 mb-2">
                        <span class="bg-gradient-to-r from-green-500 to-green-600 text-white px-4 py-1.5 rounded-full text-sm font-semibold animate-pulse">
                            En Stock
                        </span>
                        <span class="bg-gradient-to-r from-red-500 to-red-600 text-white px-4 py-1.5 rounded-full text-sm font-semibold">
                            Popular
                        </span>
                    </div>

                    <h1 class="text-5xl font-bold bg-gradient-to-r from-white to-gray-300 bg-clip-text text-transparent leading-tight">
                        {{ $product['name'] }}
                    </h1>

                    <!-- Rating mejorado -->
                    <div class="flex items-center space-x-4">
                        <div class="flex items-center space-x-1">
                            @for ($i = 1; $i <= 5; $i++)
                                <span class="text-xl {{ $i <= floor($product['rating']) ? 'text-yellow-400' : 'text-gray-600' }} transition-colors duration-200 hover:scale-110">
                                    ★
                                </span>
                            @endfor
                        </div>
                        <span class="text-gray-400 font-medium">{{ $product['rating'] }}</span>
                        <span class="text-gray-500">•</span>
                        <span class="text-gray-400 hover:text-red-400 transition-colors cursor-pointer">
                            {{ $product['reviews'] }} reseñas
                        </span>
                    </div>

                    <p class="text-xl text-gray-300 leading-relaxed font-light">
                        {{ $product['description'] }}
                    </p>
                </div>

                <!-- Precio destacado -->
                <div class="space-y-3">
                    <div class="flex items-baseline space-x-3">
                        <span class="text-4xl font-bold text-white">
                            S/{{ number_format($product['price'], 2, '.', ',') }}
                        </span>
                        <span class="text-lg text-gray-400 line-through">
                            S/{{ number_format($product['price'] * 1.25, 2, '.', ',') }}
                        </span>
                    </div>
                    <div class="flex items-center space-x-4 text-sm">
                        <span class="bg-green-500/20 text-green-400 px-3 py-1 rounded-lg border border-green-500/30">
                            Envío gratis
                        </span>
                        <span class="text-gray-400">
                            Precio incluye IVA
                        </span>
                    </div>
                </div>

                <!-- Controles de cantidad y acciones -->
                <div class="space-y-6">
                    <!-- Selector de cantidad mejorado -->
                    <div class="flex items-center space-x-6">
                        <label class="text-white font-semibold text-lg">Cantidad:</label>
                        <div class="flex items-center bg-gray-800/50 rounded-xl border border-gray-700/50 backdrop-blur-sm">
                            <button id="decreaseQty" class="w-12 h-12 hover:bg-red-500/20 text-white rounded-l-xl border-r border-gray-700/50 transition-all duration-200 hover:text-red-400">
                                −
                            </button>
                            <span id="quantity" class="w-16 text-center text-white font-semibold text-lg py-3">1</span>
                            <button id="increaseQty" class="w-12 h-12 hover:bg-red-500/20 text-white rounded-r-xl border-l border-gray-700/50 transition-all duration-200 hover:text-red-400">
                                +
                            </button>
                        </div>
                    </div>

                    <!-- Botones de acción mejorados -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <button class="group relative bg-gradient-to-r from-red-600 to-red-700 hover:from-red-500 hover:to-red-600 text-white py-4 px-8 rounded-xl text-lg font-semibold transition-all duration-300 hover:scale-105 hover:shadow-xl hover:shadow-red-500/25 overflow-hidden">
                            <span class="relative z-10 flex items-center justify-center space-x-2">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                                <a href="/checkout/{{ $product['id'] }}"
                                class="relative overflow-hidden bg-gradient-to-r from-red-600 to-black hover:from-red-700 hover:to-gray-900 text-white font-bold py-2.5 px-4 rounded-xl transition-all duration-300 transform hover:scale-105 hover:shadow-lg group/btn text-sm">
                                    <span class="relative z-10">Comprar Ahora</span>
                                </a>
                            </span>
                            <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/20 to-transparent -translate-x-full group-hover:translate-x-full transition-transform duration-1000"></div>
                        </button>

                        <button class="group border-2 border-red-500/50 text-red-400 hover:bg-red-500/10 hover:border-red-400 py-4 px-8 rounded-xl text-lg font-semibold transition-all duration-300 hover:scale-105 flex items-center justify-center space-x-2">
                            <svg class="w-5 h-5 group-hover:animate-bounce" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4m0 0L7 13m0 0l-2.5 5M7 13l2.5 5M17 13v6a2 2 0 01-2 2H9a2 2 0 01-2-2v-6"></path>
                            </svg>
                            <span>Añadir al Carrito</span>
                        </button>
                    </div>

                    <!-- Información adicional -->
                    <div class="grid grid-cols-3 gap-4 pt-4">
                        <div class="text-center p-4 bg-gray-800/30 rounded-xl backdrop-blur-sm border border-gray-700/30">
                            <svg class="w-8 h-8 text-red-400 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <p class="text-sm text-gray-300">Entrega en 24h</p>
                        </div>
                        <div class="text-center p-4 bg-gray-800/30 rounded-xl backdrop-blur-sm border border-gray-700/30">
                            <svg class="w-8 h-8 text-red-400 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <p class="text-sm text-gray-300">Garantía 2 años</p>
                        </div>
                        <div class="text-center p-4 bg-gray-800/30 rounded-xl backdrop-blur-sm border border-gray-700/30">
                            <svg class="w-8 h-8 text-red-400 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>
                            <p class="text-sm text-gray-300">Devoluciones</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Secciones de detalles mejoradas -->
        <div class="mt-20">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <!-- Características -->
                <div class="bg-gradient-to-br from-gray-800/50 to-gray-900/50 border border-red-500/20 rounded-2xl p-8 backdrop-blur-sm">
                    <h3 class="text-3xl font-bold text-white mb-8 flex items-center">
                        <svg class="w-8 h-8 text-red-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                        </svg>
                        Características
                    </h3>
                    <div class="space-y-4">
                        @foreach($product['features'] as $feature)
                            <div class="flex items-start space-x-3 p-4 bg-gray-900/50 rounded-xl border border-gray-700/50 hover:border-red-500/30 transition-all duration-300 group">
                                <div class="w-2 h-2 bg-red-400 rounded-full mt-2 group-hover:scale-125 transition-transform duration-300"></div>
                                <span class="text-gray-300 group-hover:text-white transition-colors duration-300">{{ $feature }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Especificaciones -->
                <div class="bg-gradient-to-br from-gray-800/50 to-gray-900/50 border border-red-500/20 rounded-2xl p-8 backdrop-blur-sm">
                    <h3 class="text-3xl font-bold text-white mb-8 flex items-center">
                        <svg class="w-8 h-8 text-red-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                        </svg>
                        Especificaciones Técnicas
                    </h3>
                    <div class="space-y-3">
                        @foreach($product['specifications'] as $key => $value)
                            <div class="flex justify-between items-center p-4 bg-gray-900/30 rounded-xl border-l-4 border-red-500/50 hover:bg-gray-900/50 transition-all duration-300 group">
                                <span class="text-gray-400 capitalize font-medium group-hover:text-gray-300 transition-colors">
                                    {{ str_replace('_', ' ', $key) }}
                                </span>
                                <span class="text-white font-semibold group-hover:text-red-400 transition-colors">
                                    {{ $value }}
                                </span>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- JavaScript mejorado -->
<script>
    // Variables globales
    let currentImageIndex = 0;
    let quantity = 1;
    const images = @json($product['images']);
    const imageContainer = document.getElementById('imageContainer');
    const indicators = document.querySelectorAll('.image-indicator');
    const thumbnails = document.querySelectorAll('.thumbnail');

    // Función para actualizar la imagen
    function updateImage(index) {
        currentImageIndex = index;
        imageContainer.style.transform = `translateX(-${currentImageIndex * 100}%)`;

        // Actualizar indicadores
        indicators.forEach((indicator, i) => {
            indicator.classList.toggle('bg-white', i === currentImageIndex);
            indicator.classList.toggle('bg-white/30', i !== currentImageIndex);
        });

        // Actualizar miniaturas
        thumbnails.forEach((thumb, i) => {
            thumb.classList.toggle('opacity-100', i === currentImageIndex);
            thumb.classList.toggle('opacity-60', i !== currentImageIndex);
            thumb.classList.toggle('border-red-500', i === currentImageIndex);
            thumb.classList.toggle('border-transparent', i !== currentImageIndex);
        });
    }

    // Cambio automático de imágenes
    function autoChangeImage() {
        const nextIndex = (currentImageIndex + 1) % images.length;
        updateImage(nextIndex);
    }

    // Intervalo para cambio automático (pausado al hacer hover)
    let autoSlideInterval = setInterval(autoChangeImage, 4000);

    const imageSection = document.querySelector('.group');
    imageSection.addEventListener('mouseenter', () => clearInterval(autoSlideInterval));
    imageSection.addEventListener('mouseleave', () => {
        autoSlideInterval = setInterval(autoChangeImage, 4000);
    });

    // Event listeners para navegación de imágenes
    document.getElementById('prevImage').addEventListener('click', () => {
        const prevIndex = (currentImageIndex - 1 + images.length) % images.length;
        updateImage(prevIndex);
    });

    document.getElementById('nextImage').addEventListener('click', () => {
        const nextIndex = (currentImageIndex + 1) % images.length;
        updateImage(nextIndex);
    });

    // Event listeners para indicadores
    indicators.forEach((indicator, index) => {
        indicator.addEventListener('click', () => updateImage(index));
    });

    // Event listeners para miniaturas
    thumbnails.forEach((thumb, index) => {
        thumb.addEventListener('click', () => updateImage(index));
    });

    // Controles de cantidad
    document.getElementById('decreaseQty').addEventListener('click', () => {
        if (quantity > 1) {
            quantity--;
            document.getElementById('quantity').textContent = quantity;
        }
    });

    document.getElementById('increaseQty').addEventListener('click', () => {
        quantity++;
        document.getElementById('quantity').textContent = quantity;
    });

    // Inicializar primera imagen e indicadores
    updateImage(0);
</script>

<style>
    .tab-content {
        display: none;
        animation: fadeIn 0.3s ease-in-out;
    }

    .tab-content.active {
        display: block;
    }

    .tab-btn.active {
        background: linear-gradient(to right, #dc2626, #b91c1c);
        color: white;
    }

    .tab-btn:not(.active) {
        color: #9ca3af;
    }

    .tab-btn:not(.active):hover {
        color: white;
        background: rgba(55, 65, 81, 0.5);
    }

    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(10px); }
        to { opacity: 1; transform: translateY(0); }
    }

    /* Animación de hover para las cards */
    .group:hover .bg-gray-900\/50 {
        background: rgba(17, 24, 39, 0.8);
    }

    /* Efectos de glassmorphism */
    .backdrop-blur-sm {
        backdrop-filter: blur(8px);
    }

    .backdrop-blur-lg {
        backdrop-filter: blur(16px);
    }
</style>

@endsection
