@extends('layouts.app')

@section('title', 'KeyDesign - Público Objetivo')

@section('content')

    <div class="w-full bg-black pt-24 pb-8 flex justify-center px-4">
        <div class="w-full max-w-6xl overflow-hidden rounded-xl shadow-xl relative group">

            <div class="absolute left-0 top-0 h-full w-6 bg-gradient-to-r from-black/80 to-transparent z-10 pointer-events-none rounded-l-xl"></div>
            <div class="absolute right-0 top-0 h-full w-6 bg-gradient-to-l from-black/80 to-transparent z-10 pointer-events-none rounded-r-xl"></div>

            <div id="videoSlider" class="flex transition-transform duration-700 ease-in-out" style="transform: translateX(0%)">
                <video
                    autoplay
                    muted
                    loop
                    playsinline
                    class="w-full h-[400px] object-cover flex-shrink-0"
                >
                    <source src="{{ asset('videos/banner1.mp4') }}" type="video/mp4">
                </video>
                <video
                    autoplay
                    muted
                    loop
                    playsinline
                    class="w-full h-[400px] object-cover flex-shrink-0"
                >
                    <source src="{{ asset('videos/banner2.mp4') }}" type="video/mp4">
                </video>
                <video
                    autoplay
                    muted
                    loop
                    playsinline
                    class="w-full h-[400px] object-cover flex-shrink-0"
                >
                    <source src="{{ asset('videos/banner3.mp4') }}" type="video/mp4">
                </video>
                <video
                    autoplay
                    muted
                    loop
                    playsinline
                    class="w-full h-[400px] object-cover flex-shrink-0"
                >
                    <source src="{{ asset('videos/banner5.mp4') }}" type="video/mp4">
                </video>
            </div>
            <button id="prevBtn"
                class="absolute left-2 top-1/2 -translate-y-1/2 bg-black/30 hover:bg-black/60 text-white text-sm px-2 py-1 rounded-full opacity-0 group-hover:opacity-80 transition z-20">
                &#10094;
            </button>

            <button id="nextBtn"
                class="absolute right-2 top-1/2 -translate-y-1/2 bg-black/30 hover:bg-black/60 text-white text-sm px-2 py-1 rounded-full opacity-0 group-hover:opacity-80 transition z-20">
                &#10095;
            </button>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const slider = document.getElementById('videoSlider');
            const totalSlides = 4
            let currentIndex = 0;

            const updateSlide = () => {
                slider.style.transform = `translateX(-${currentIndex * 100}%)`;
            };

            let interval = setInterval(() => {
                currentIndex = (currentIndex + 1) % totalSlides;
                updateSlide();
            }, 4000);

            document.getElementById('prevBtn').addEventListener('click', () => {
                currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
                updateSlide();
                resetInterval();
            });

            document.getElementById('nextBtn').addEventListener('click', () => {
                currentIndex = (currentIndex + 1) % totalSlides;
                updateSlide();
                resetInterval();
            });

            function resetInterval() {
                clearInterval(interval);
                interval = setInterval(() => {
                    currentIndex = (currentIndex + 1) % totalSlides;
                    updateSlide();
                }, 4000);
            }
        });
    </script>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 bg-black min-h-screen">
        <!-- Título con diseño moderno -->
        <div class="text-center mb-16">
            <h2 class="text-5xl font-black text-transparent bg-clip-text bg-gradient-to-r from-red-600 red-400 to-red-600 mb-4">
                Nuestros Teclados
            </h2>
            <div class="w-24 h-1 bg-gradient-to-r from-red-500 to-black mx-auto rounded-full"></div>
            <p class="text-gray-600 mt-4 text-lg">Descubre nuestra colección premium de teclados mecánicos</p>
        </div>

        <!-- Filtros -->
        <div class="bg-gradient-to-br from-black to-gray-900 rounded-2xl p-6 mb-8 border border-red-500/20 shadow-xl">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-4">
                <!-- Búsqueda -->
                <div class="relative">
                    <svg class="absolute left-3 top-3 h-4 w-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                    </svg>
                    <input
                        id="searchInput"
                        type="text"
                        placeholder="Buscar productos..."
                        class="w-full pl-10 pr-4 py-2 bg-gray-800 border border-red-500/30 rounded-lg text-white placeholder-gray-400 focus:border-red-500 focus:ring-2 focus:ring-red-500/20 transition-all duration-200"
                    />
                </div>

                <!-- Categoría -->
                <select id="categoryFilter" class="bg-gray-800 border border-red-500/30 rounded-lg px-3 py-2 text-white focus:border-red-500 focus:ring-2 focus:ring-red-500/20 transition-all duration-200">
                    <option value="">Todas las Categorías</option>
                    <option value="ergonomicos">Ergonómicos (5)</option>
                    <option value="gaming">Gaming (5)</option>
                    <option value="oficinas">Oficinas (5)</option>
                    <option value="mecanicos">Mecánicos (5)</option>
                    <option value="de-membrana">De membrana (5)</option>
                    <option value="para-daltonicos">Para Daltónicos (5)</option>
                    <option value="para-baja-vision">Para Baja Visión (5)</option>
                    <option value="para-braille">Para Braille (5)</option>
                </select>

                <!-- Subcategoría -->
                <select id="subcategoryFilter" class="bg-gray-800 border border-red-500/30 rounded-lg px-3 py-2 text-white focus:border-red-500 focus:ring-2 focus:ring-red-500/20 transition-all duration-200">
                    <option value="">Todas las Subcategorías</option>
                    <option value="inalambricos-bluetooth">Inalámbricos / Bluetooth (9)</option>
                    <option value="teclados-compactos">Teclados compactos (60%, 75%) (8)</option>
                    <option value="teclados-silenciosos">Teclados silenciosos (7)</option>
                    <option value="teclados-retroiluminados-personalizados">Teclados retroiluminados personalizados (10)</option>
                    <option value="teclados-para-movilidad-reducida">Teclados para movilidad reducida (12)</option>
                </select>

                <!-- Stock -->
                <select id="stockFilter" class="bg-gray-800 border border-red-500/30 rounded-lg px-3 py-2 text-white focus:border-red-500 focus:ring-2 focus:ring-red-500/20 transition-all duration-200">
                    <option value="">Todos los Productos</option>
                    <option value="inStock">En Stock</option>
                    <option value="outOfStock">Sin Stock</option>
                </select>

                <!-- Rango de Precios -->
                <select id="priceFilter" class="bg-gray-800 border border-red-500/30 rounded-lg px-3 py-2 text-white focus:border-red-500 focus:ring-2 focus:ring-red-500/20 transition-all duration-200">
                    <option value="">Todos los Precios</option>
                    <option value="under200">Menos de S/200</option>
                    <option value="200-500">S/200 - S/500</option>
                    <option value="500-1000">S/500 - S/1000</option>
                    <option value="over1000">Más de S/1000</option>
                </select>
            </div>

            <!-- Segunda fila de filtros -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-4">
                <!-- Ordenar -->
                <select id="sortFilter" class="bg-gray-800 border border-red-500/30 rounded-lg px-3 py-2 text-white focus:border-red-500 focus:ring-2 focus:ring-red-500/20 transition-all duration-200">
                    <option value="name">Ordenar por Nombre</option>
                    <option value="price-low">Precio: Menor a Mayor</option>
                    <option value="price-high">Precio: Mayor a Menor</option>
                    <option value="rating">Mejor Calificados</option>
                    <option value="newest">Más Nuevos</option>
                </select>

                <!-- Botón limpiar filtros -->
                <button id="clearFilters" class="bg-gradient-to-r from-red-600 to-red-700 hover:from-red-700 hover:to-red-800 text-white font-medium px-4 py-2 rounded-lg transition-all duration-200 transform hover:scale-105">
                    Limpiar Filtros
                </button>

                <!-- Contador de resultados -->
                <div class="flex items-center justify-center">
                    <span id="resultsCount" class="text-gray-300 text-sm font-medium">
                        Mostrando todos los productos
                    </span>
                </div>
            </div>
        </div>

        <!-- Grid de productos mejorado -->
        <div id="productsGrid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 auto-rows-fr">
            {{-- Itera sobre cada producto para crear una tarjeta --}}
            @foreach ($products as $product)
                <div class="product-card group relative bg-white rounded-2xl shadow-lg overflow-hidden border-0 hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 hover:scale-[1.02] flex flex-col h-full"
                     data-name="{{ strtolower($product['name']) }}"
                     data-price="{{ $product['price'] }}"
                     data-rating="{{ $product['rating'] }}"
                     data-category="{{ strtolower(implode(' ', $product['category'] ?? [])) }}"
                     data-stock="{{ $product['inStock'] ? 'true' : 'false' }}"
                     data-id="{{ $product['id'] }}">

                    <!-- Efecto de brillo en hover -->
                    <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/10 to-transparent -translate-x-full group-hover:translate-x-full transition-transform duration-700 ease-in-out"></div>

                    <!-- Imagen del producto con overlay y cambio de imagen en hover -->
                    <div class="relative overflow-hidden rounded-t-2xl flex-shrink-0 product-image-container">
                        <!-- Imagen principal -->
                        <img src="{{ asset($product['images'][0]) }}"
                             alt="{{ $product['name'] }}"
                             class="product-image-main w-full h-48 object-cover transition-all duration-500 ease-in-out opacity-100">

                        <!-- Segunda imagen (aparece en hover) -->
                        @if(isset($product['images'][1]))
                            <img src="{{ asset($product['images'][1]) }}"
                                 alt="{{ $product['name'] }} - Vista 2"
                                 class="product-image-hover absolute inset-0 w-full h-48 object-cover transition-all duration-500 ease-in-out opacity-0 scale-110">
                        @endif

                        <!-- Overlay gradient -->
                        <div class="absolute inset-0 bg-gradient-to-t from-black/20 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>

                        <!-- Badges de stock y categoría -->
                        <div class="absolute top-3 left-3 right-3 flex justify-between items-start gap-2 z-10">
                            @if (!empty($product['category']))
                                <span class="bg-gradient-to-r from-red-600 to-black text-white text-xs font-bold px-3 py-1.5 rounded-full shadow-lg backdrop-blur-sm">
                                    {{ implode(', ', array_slice($product['category'], 0, 1)) }}
                                </span>
                            @endif

                            @if ($product['inStock'])
                                <span class="bg-gradient-to-r from-green-500 to-emerald-600 text-white text-xs font-bold px-3 py-1.5 rounded-full shadow-lg backdrop-blur-sm animate-pulse">
                                    ✓ En Stock
                                </span>
                            @else
                                <span class="bg-gradient-to-r from-gray-500 to-gray-600 text-white text-xs font-bold px-3 py-1.5 rounded-full shadow-lg backdrop-blur-sm">
                                    Sin Stock
                                </span>
                            @endif
                        </div>

                    </div>

                    <!-- Contenido de la tarjeta -->
                    <div class="p-5 flex flex-col flex-grow">

                        <!-- Nombre del producto -->
                        <h3 class="text-lg font-bold text-gray-900 mb-3 group-hover:text-red-600 transition-colors duration-300 line-clamp-2 min-h-[3.5rem]">
                            {{ $product['name'] }}
                        </h3>

                        <!-- Descripción -->
                        <p class="text-gray-600 text-sm mb-4 line-clamp-2 flex-grow-0 min-h-[2.5rem]">
                            {{ $product['description'] }}
                        </p>

                        <!-- Calificación con estrellas mejoradas -->
                        <div class="flex items-center mb-4 flex-shrink-0">
                            <div class="flex items-center mr-2">
                                @for ($i = 1; $i <= 5; $i++)
                                    @if ($i <= floor($product['rating']))
                                        <svg class="w-4 h-4 text-yellow-400 fill-current transition-colors duration-200 hover:text-yellow-500" viewBox="0 0 24 24">
                                            <path d="M12 .587l3.692 7.568 8.308 1.206-6.001 5.852 1.416 8.281L12 18.896l-7.415 3.908 1.416-8.281-6.001-5.852 8.308-1.206z"/>
                                        </svg>
                                    @else
                                        <svg class="w-4 h-4 text-gray-300 fill-current" viewBox="0 0 24 24">
                                            <path d="M12 .587l3.692 7.568 8.308 1.206-6.001 5.852 1.416 8.281L12 18.896l-7.415 3.908 1.416-8.281-6.001-5.852 8.308-1.206z"/>
                                        </svg>
                                    @endif
                                @endfor
                            </div>
                            <span class="text-gray-700 text-sm font-medium">
                                {{ number_format($product['rating'], 1) }}
                                <span class="text-gray-500">({{ $product['reviews'] }})</span>
                            </span>
                        </div>

                        <!-- Características principales con iconos -->
                        <div class="mb-4 flex-grow min-h-[4rem]">
                            <ul class="space-y-2">
                                @if (!empty($product['features'][0]))
                                    <li class="flex items-start text-gray-700 text-sm">
                                        <svg class="w-4 h-4 text-red-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                        </svg>
                                        <span>{{ $product['features'][0] }}</span>
                                    </li>
                                @endif
                                @if (!empty($product['features'][1]))
                                    <li class="flex items-start text-gray-700 text-sm">
                                        <svg class="w-4 h-4 text-red-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                        </svg>
                                        <span>{{ $product['features'][1] }}</span>
                                    </li>
                                @endif
                            </ul>
                        </div>

                        <!-- Precio y botón en la parte inferior -->
                        <div class="mt-auto border-t border-gray-100 pt-4 flex-shrink-0">
                            <div class="flex items-center justify-between">
                                <div class="flex flex-col">
                                    <span class="text-2xl font-black text-transparent bg-clip-text bg-gradient-to-r from-red-600 to-black">
                                        S/{{ number_format($product['price'], 2, '.', ',') }}
                                    </span>
                                    <span class="text-xs text-gray-500">Precio incluye IGV</span>
                                </div>

                                <a href="/productos/{{ $product['id'] }}"
                                   class="relative overflow-hidden bg-gradient-to-r from-red-600 to-black hover:from-red-700 hover:to-gray-900 text-white font-bold py-2.5 px-4 rounded-xl transition-all duration-300 transform hover:scale-105 hover:shadow-lg group/btn text-sm">
                                    <span class="relative z-10">Ver Detalles</span>
                                    <div class="absolute inset-0 bg-gradient-to-r from-black to-red-600 opacity-0 group-hover/btn:opacity-100 transition-opacity duration-300"></div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Mensaje cuando no hay productos visibles -->
        <div id="noResults" class="text-center py-16 hidden">
            <div class="w-24 h-24 bg-gradient-to-br from-red-100 to-black/10 rounded-full flex items-center justify-center mx-auto mb-4">
                <svg class="w-12 h-12 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 12h6m-6-4h6m2 5.172a4 4 0 015.656 0M15 12h.01M15 8h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
            </div>
            <h3 class="text-xl font-semibold text-gray-700 mb-2">No se encontraron productos</h3>
            <p class="text-gray-500">Intenta cambiar los filtros para ver más productos.</p>
        </div>

        <!-- Mensaje cuando no hay productos -->
        @if(empty($products) || count($products) == 0)
            <div class="text-center py-16">
                <div class="w-24 h-24 bg-gradient-to-br from-red-100 to-black/10 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-12 h-12 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"/>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-700 mb-2">No hay productos disponibles</h3>
                <p class="text-gray-500">Próximamente agregaremos más productos a nuestra colección.</p>
            </div>
        @endif
    </div>

    <!-- Estilos CSS adicionales para el efecto de hover en imágenes -->
    <style>
        .product-image-container:hover .product-image-main {
            opacity: 0;
            transform: scale(110%);
        }

        .product-image-container:hover .product-image-hover {
            opacity: 1;
            transform: scale(100%);
        }

        .product-image-main,
        .product-image-hover {
            transition: all 0.5s ease-in-out;
        }
        .product-card {
            box-shadow: 0 0 0 2px #ff0d00; /* Aquí puedes poner el color de borde rojo que prefieras */
        }
    </style>

    <!-- JavaScript para los filtros -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Elementos del DOM
            const searchInput = document.getElementById('searchInput');
            const categoryFilter = document.getElementById('categoryFilter');
            const subcategoryFilter = document.getElementById('subcategoryFilter');
            const stockFilter = document.getElementById('stockFilter');
            const priceFilter = document.getElementById('priceFilter');
            const sortFilter = document.getElementById('sortFilter');
            const clearFiltersBtn = document.getElementById('clearFilters');
            const resultsCount = document.getElementById('resultsCount');
            const productsGrid = document.getElementById('productsGrid');
            const noResults = document.getElementById('noResults');
            const productCards = Array.from(document.querySelectorAll('.product-card'));

            // Variables para almacenar los productos originales
            let originalProducts = [...productCards];
            let currentProducts = [...productCards];

            // Función para filtrar productos
            function filterProducts() {
                const searchTerm = searchInput.value.toLowerCase().trim();
                const selectedCategory = categoryFilter.value.toLowerCase();
                const selectedSubcategory = subcategoryFilter.value.toLowerCase();
                const selectedStock = stockFilter.value;
                const selectedPrice = priceFilter.value;

                currentProducts = originalProducts.filter(card => {
                    const name = card.dataset.name;
                    const price = parseFloat(card.dataset.price);
                    const category = card.dataset.category;
                    const inStock = card.dataset.stock === 'true';

                    // Filtro de búsqueda
                    const matchesSearch = !searchTerm || name.includes(searchTerm);

                    // Filtro de categoría
                    const matchesCategory = !selectedCategory || category.includes(selectedCategory);

                    // Filtro de subcategoría (puedes implementar la lógica según tus datos)
                    const matchesSubcategory = !selectedSubcategory || category.includes(selectedSubcategory);

                    // Filtro de stock
                    let matchesStock = true;
                    if (selectedStock === 'inStock') {
                        matchesStock = inStock;
                    } else if (selectedStock === 'outOfStock') {
                        matchesStock = !inStock;
                    }

                    // Filtro de precio
                    let matchesPrice = true;
                    if (selectedPrice === 'under200') {
                        matchesPrice = price < 200;
                    } else if (selectedPrice === '200-500') {
                        matchesPrice = price >= 200 && price <= 500;
                    } else if (selectedPrice === '500-1000') {
                        matchesPrice = price >= 500 && price <= 1000;
                    } else if (selectedPrice === 'over1000') {
                        matchesPrice = price > 1000;
                    }

                    return matchesSearch && matchesCategory && matchesSubcategory && matchesStock && matchesPrice;
                });

                displayProducts();
            }

            // Función para ordenar productos
            function sortProducts() {
                const sortBy = sortFilter.value;

                currentProducts.sort((a, b) => {
                    switch (sortBy) {
                        case 'name':
                            return a.dataset.name.localeCompare(b.dataset.name);
                        case 'price-low':
                            return parseFloat(a.dataset.price) - parseFloat(b.dataset.price);
                        case 'price-high':
                            return parseFloat(b.dataset.price) - parseFloat(a.dataset.price);
                        case 'rating':
                            return parseFloat(b.dataset.rating) - parseFloat(a.dataset.rating);
                        case 'newest':
                            return parseInt(b.dataset.id) - parseInt(a.dataset.id);
                        default:
                            return 0;
                    }
                });

                displayProducts();
            }

            // Función para mostrar productos
            function displayProducts() {
                // Ocultar todos los productos
                originalProducts.forEach(card => {
                    card.style.display = 'none';
                    card.style.opacity = '0';
                    card.style.transform = 'translateY(20px)';
                });

                // Mostrar productos filtrados
                if (currentProducts.length > 0) {
                    noResults.classList.add('hidden');
                    productsGrid.classList.remove('hidden');

                    currentProducts.forEach((card, index) => {
                        // Reordenar en el DOM
                        productsGrid.appendChild(card);

                        // Mostrar con animación
                        setTimeout(() => {
                            card.style.display = 'flex';
                            setTimeout(() => {
                                card.style.opacity = '1';
                                card.style.transform = 'translateY(0)';
                            }, 50);
                        }, index * 50);
                    });
                } else {
                    noResults.classList.remove('hidden');
                }

                // Actualizar contador
                updateResultsCount();
            }

            // Función para actualizar el contador de resultados
            function updateResultsCount() {
                const count = currentProducts.length;
                const total = originalProducts.length;

                if (count === total) {
                    resultsCount.textContent = `Mostrando todos los productos (${total})`;
                } else {
                    resultsCount.textContent = `Mostrando ${count} de ${total} productos`;
                }
            }

            // Función para limpiar filtros
            function clearAllFilters() {
                searchInput.value = '';
                categoryFilter.value = '';
                subcategoryFilter.value = '';
                stockFilter.value = '';
                priceFilter.value = '';
                sortFilter.value = 'name';

                currentProducts = [...originalProducts];
                sortProducts();
            }

            // Event listeners
            searchInput.addEventListener('input', () => {
                filterProducts();
                sortProducts();
            });

            categoryFilter.addEventListener('change', () => {
                filterProducts();
                sortProducts();
            });

            subcategoryFilter.addEventListener('change', () => {
                filterProducts();
                sortProducts();
            });

            stockFilter.addEventListener('change', () => {
                filterProducts();
                sortProducts();
            });

            priceFilter.addEventListener('change', () => {
                filterProducts();
                sortProducts();
            });

            sortFilter.addEventListener('change', sortProducts);

            clearFiltersBtn.addEventListener('click', clearAllFilters);

            // Inicializar
            updateResultsCount();

            // Añadir transiciones CSS a las tarjetas
            originalProducts.forEach(card => {
                card.style.transition = 'opacity 0.3s ease, transform 0.3s ease';
            });
        });
    </script>

@endsection
