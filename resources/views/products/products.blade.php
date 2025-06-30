@extends('layouts.app')

@section('title', 'KeyDesign - Público Objetivo')

@section('content')

    <!-- Banner de Videos -->
    <div class="w-full bg-black pt-24 pb-8 flex justify-center px-4">
        <div class="w-full max-w-6xl overflow-hidden rounded-xl shadow-xl relative group">

            <!-- 🎨 Bordes de contraste -->
            <div class="absolute left-0 top-0 h-full w-6 bg-gradient-to-r from-black/80 to-transparent z-10 pointer-events-none rounded-l-xl"></div>
            <div class="absolute right-0 top-0 h-full w-6 bg-gradient-to-l from-black/80 to-transparent z-10 pointer-events-none rounded-r-xl"></div>

            <!-- 🎞️ Carrusel de videos -->
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
            </div>

            <!-- ⬅️ Botón Izquierda -->
            <button id="prevBtn"
                class="absolute left-2 top-1/2 -translate-y-1/2 bg-black/30 hover:bg-black/60 text-white text-sm px-2 py-1 rounded-full opacity-0 group-hover:opacity-80 transition z-20">
                &#10094;
            </button>

            <!-- ➡️ Botón Derecha -->
            <button id="nextBtn"
                class="absolute right-2 top-1/2 -translate-y-1/2 bg-black/30 hover:bg-black/60 text-white text-sm px-2 py-1 rounded-full opacity-0 group-hover:opacity-80 transition z-20">
                &#10095;
            </button>
        </div>
    </div>

    <!-- Sección de Productos -->
    <div class="bg-black min-h-screen py-8">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex gap-6">

                <!-- Sidebar de Filtros -->
                <div class="w-1/4 bg-black border border-gray-700 rounded-lg shadow-lg p-6 h-fit sticky top-8">
                    <h3 class="text-xl font-bold text-white mb-6">Filtros</h3>

                    <!-- Filtro por Uso -->
                    <div class="mb-6">
                        <h4 class="font-semibold text-gray-300 mb-3 cursor-pointer flex items-center" onclick="toggleFilter('uso')">
                            <span id="uso-arrow" class="mr-2 transition-transform">▼</span>
                            Por uso
                        </h4>
                        <div id="uso-options" class="space-y-2 ml-4">
                            <div class="mb-3">
                                <h5 class="font-medium text-gray-400 mb-2">Ergonómicos</h5>
                                <div class="space-y-1 ml-3">
                                    <label class="flex items-center">
                                        <input type="checkbox" class="filter-checkbox" data-filter="uso" data-value="ergonomico-dividido" class="mr-2">
                                        <span class="text-sm text-gray-400">Diseños divididos</span>
                                    </label>
                                    <label class="flex items-center">
                                        <input type="checkbox" class="filter-checkbox" data-filter="uso" data-value="ergonomico-reposamunecas" class="mr-2">
                                        <span class="text-sm text-gray-400">Con reposamuñecas integrado</span>
                                    </label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <h5 class="font-medium text-gray-400 mb-2">Gaming</h5>
                                <div class="space-y-1 ml-3">
                                    <label class="flex items-center">
                                        <input type="checkbox" class="filter-checkbox" data-filter="uso" data-value="gaming-rgb" class="mr-2">
                                        <span class="text-sm text-gray-400">Iluminación RGB</span>
                                    </label>
                                    <label class="flex items-center">
                                        <input type="checkbox" class="filter-checkbox" data-filter="uso" data-value="gaming-macro" class="mr-2">
                                        <span class="text-sm text-gray-400">Teclas macro programables</span>
                                    </label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <h5 class="font-medium text-gray-400 mb-2">Laborales / Oficinas</h5>
                                <div class="space-y-1 ml-3">
                                    <label class="flex items-center">
                                        <input type="checkbox" class="filter-checkbox" data-filter="uso" data-value="oficina-lowprofile" class="mr-2">
                                        <span class="text-sm text-gray-400">Perfil bajo (low-profile)</span>
                                    </label>
                                    <label class="flex items-center">
                                        <input type="checkbox" class="filter-checkbox" data-filter="uso" data-value="oficina-silencioso" class="mr-2">
                                        <span class="text-sm text-gray-400">Con teclas silenciosas</span>
                                    </label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <h5 class="font-medium text-gray-400 mb-2">Portátiles</h5>
                                <div class="space-y-1 ml-3">
                                    <label class="flex items-center">
                                        <input type="checkbox" class="filter-checkbox" data-filter="uso" data-value="portatil-plegable" class="mr-2">
                                        <span class="text-sm text-gray-400">Plegables / desarmables</span>
                                    </label>
                                    <label class="flex items-center">
                                        <input type="checkbox" class="filter-checkbox" data-filter="uso" data-value="portatil-bluetooth" class="mr-2">
                                        <span class="text-sm text-gray-400">Conectividad Bluetooth</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Filtro por Tecnología -->
                    <div class="mb-6">
                        <h4 class="font-semibold text-gray-300 mb-3 cursor-pointer flex items-center" onclick="toggleFilter('tecnologia')">
                            <span id="tecnologia-arrow" class="mr-2 transition-transform">▼</span>
                            Por tecnología
                        </h4>
                        <div id="tecnologia-options" class="space-y-2 ml-4">
                            <div class="mb-3">
                                <h5 class="font-medium text-gray-400 mb-2">Mecánicos</h5>
                                <div class="space-y-1 ml-3">
                                    <label class="flex items-center">
                                        <input type="checkbox" class="filter-checkbox" data-filter="tecnologia" data-value="mecanico-lineal" class="mr-2">
                                        <span class="text-sm text-gray-400">Switches lineales</span>
                                    </label>
                                    <label class="flex items-center">
                                        <input type="checkbox" class="filter-checkbox" data-filter="tecnologia" data-value="mecanico-tactil" class="mr-2">
                                        <span class="text-sm text-gray-400">Switches táctiles</span>
                                    </label>
                                    <label class="flex items-center">
                                        <input type="checkbox" class="filter-checkbox" data-filter="tecnologia" data-value="mecanico-clicky" class="mr-2">
                                        <span class="text-sm text-gray-400">Switches clicky</span>
                                    </label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <h5 class="font-medium text-gray-400 mb-2">De membrana</h5>
                                <div class="space-y-1 ml-3">
                                    <label class="flex items-center">
                                        <input type="checkbox" class="filter-checkbox" data-filter="tecnologia" data-value="membrana-cupula" class="mr-2">
                                        <span class="text-sm text-gray-400">Tipo cúpula de goma</span>
                                    </label>
                                    <label class="flex items-center">
                                        <input type="checkbox" class="filter-checkbox" data-filter="tecnologia" data-value="membrana-scissor" class="mr-2">
                                        <span class="text-sm text-gray-400">Tipo scissor (tijera)</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Filtro por Accesibilidad -->
                    <div class="mb-6">
                        <h4 class="font-semibold text-gray-300 mb-3 cursor-pointer flex items-center" onclick="toggleFilter('accesibilidad')">
                            <span id="accesibilidad-arrow" class="mr-2 transition-transform">▼</span>
                            Por accesibilidad
                        </h4>
                        <div id="accesibilidad-options" class="space-y-2 ml-4">
                            <div class="mb-3">
                                <h5 class="font-medium text-gray-400 mb-2">Para daltónicos</h5>
                                <div class="space-y-1 ml-3">
                                    <label class="flex items-center">
                                        <input type="checkbox" class="filter-checkbox" data-filter="accesibilidad" data-value="daltonico-colores" class="mr-2">
                                        <span class="text-sm text-gray-400">Teclas con esquemas de color especiales</span>
                                    </label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <h5 class="font-medium text-gray-400 mb-2">Para baja visión</h5>
                                <div class="space-y-1 ml-3">
                                    <label class="flex items-center">
                                        <input type="checkbox" class="filter-checkbox" data-filter="accesibilidad" data-value="baja-vision-contraste" class="mr-2">
                                        <span class="text-sm text-gray-400">Teclas de gran contraste</span>
                                    </label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <h5 class="font-medium text-gray-400 mb-2">Para Braille</h5>
                                <div class="space-y-1 ml-3">
                                    <label class="flex items-center">
                                        <input type="checkbox" class="filter-checkbox" data-filter="accesibilidad" data-value="braille-relieve" class="mr-2">
                                        <span class="text-sm text-gray-400">Teclas con relieve braille integrado</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Filtro por Precio -->
                    <div class="mb-6">
                        <h4 class="font-semibold text-gray-300 mb-3">Rango de Precio</h4>
                        <div class="space-y-2">
                            <label class="flex items-center">
                                <input type="checkbox" class="filter-checkbox" data-filter="precio" data-value="0-50" class="mr-2">
                                <span class="text-sm text-gray-400">$0 - $50</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="filter-checkbox" data-filter="precio" data-value="50-100" class="mr-2">
                                <span class="text-sm text-gray-400">$50 - $100</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="filter-checkbox" data-filter="precio" data-value="100-200" class="mr-2">
                                <span class="text-sm text-gray-400">$100 - $200</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="filter-checkbox" data-filter="precio" data-value="200+" class="mr-2">
                                <span class="text-sm text-gray-400">$200+</span>
                            </label>
                        </div>
                    </div>

                    <!-- Filtro por Disponibilidad -->
                    <div class="mb-6">
                        <h4 class="font-semibold text-gray-300 mb-3">Disponibilidad</h4>
                        <div class="space-y-2">
                            <label class="flex items-center">
                                <input type="checkbox" class="filter-checkbox" data-filter="disponibilidad" data-value="disponible" class="mr-2">
                                <span class="text-sm text-gray-400">En Stock</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="filter-checkbox" data-filter="disponibilidad" data-value="agotado" class="mr-2">
                                <span class="text-sm text-gray-400">Agotado</span>
                            </label>
                        </div>
                    </div>

                    <!-- Botón Limpiar Filtros -->
                    <button id="clearFilters" class="w-full bg-red-500 hover:bg-red-600 text-white py-2 px-4 rounded-lg transition duration-300">
                        Limpiar Filtros
                    </button>
                </div>

                <!-- Grid de Productos -->
                <div class="flex-1">
                    <div class="flex justify-between items-center mb-6">
                        <h2 class="text-2xl font-bold text-white">Productos</h2>
                        <div class="flex items-center gap-4">
                            <span class="text-sm text-gray-400" id="productCount">12 productos encontrados</span>
                            <select id="sortSelect" class="border border-gray-600 bg-black text-white rounded-lg px-3 py-2 text-sm">
                                <option value="default">Ordenar por</option>
                                <option value="price-asc">Precio: Menor a Mayor</option>
                                <option value="price-desc">Precio: Mayor a Menor</option>
                                <option value="name-asc">Nombre: A-Z</option>
                                <option value="name-desc">Nombre: Z-A</option>
                            </select>
                        </div>
                    </div>

                    <div id="productsGrid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

                        <!-- Producto 1 -->
                        <div class="product-card bg-black border border-gray-700 rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300"
                             data-categoria="teclados" data-marca="logitech" data-precio="75" data-disponibilidad="disponible">
                            <div class="relative">
                                <img src="https://images.unsplash.com/photo-1587829741301-dc798b83add3?w=300&h=200&fit=crop"
                                     alt="Teclado Gaming" class="w-full h-48 object-cover">
                                <span class="absolute top-2 right-2 bg-green-500 text-white text-xs px-2 py-1 rounded">En Stock</span>
                            </div>
                            <div class="p-4">
                                <h3 class="font-semibold text-white mb-2">Teclado Gaming Logitech G915</h3>
                                <p class="text-gray-400 text-sm mb-3">Teclado mecánico inalámbrico RGB</p>
                                <div class="flex justify-between items-center">
                                    <span class="text-xl font-bold text-blue-400">$75.99</span>
                                    <button class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg text-sm transition">
                                        Agregar
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Producto 2 -->
                        <div class="product-card bg-black border border-gray-700 rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300"
                             data-categoria="mouse" data-marca="razer" data-precio="45" data-disponibilidad="disponible">
                            <div class="relative">
                                <img src="https://images.unsplash.com/photo-1527864550417-7fd91fc51a46?w=300&h=200&fit=crop"
                                     alt="Mouse Gaming" class="w-full h-48 object-cover">
                                <span class="absolute top-2 right-2 bg-green-500 text-white text-xs px-2 py-1 rounded">En Stock</span>
                            </div>
                            <div class="p-4">
                                <h3 class="font-semibold text-white mb-2">Mouse Gaming Razer DeathAdder</h3>
                                <p class="text-gray-400 text-sm mb-3">Mouse ergonómico para gaming profesional</p>
                                <div class="flex justify-between items-center">
                                    <span class="text-xl font-bold text-blue-400">$45.99</span>
                                    <button class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg text-sm transition">
                                        Agregar
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Producto 3 -->
                        <div class="product-card bg-black border border-gray-700 rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300"
                             data-categoria="monitores" data-marca="corsair" data-precio="250" data-disponibilidad="disponible">
                            <div class="relative">
                                <img src="https://images.unsplash.com/photo-1527443224154-c4a3942d3acf?w=300&h=200&fit=crop"
                                     alt="Monitor Gaming" class="w-full h-48 object-cover">
                                <span class="absolute top-2 right-2 bg-green-500 text-white text-xs px-2 py-1 rounded">En Stock</span>
                            </div>
                            <div class="p-4">
                                <h3 class="font-semibold text-white mb-2">Monitor Gaming Corsair 27"</h3>
                                <p class="text-gray-400 text-sm mb-3">Monitor 4K 144Hz HDR para gaming</p>
                                <div class="flex justify-between items-center">
                                    <span class="text-xl font-bold text-blue-400">$249.99</span>
                                    <button class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg text-sm transition">
                                        Agregar
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Producto 4 -->
                        <div class="product-card bg-black border border-gray-700 rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300"
                             data-categoria="auriculares" data-marca="steelseries" data-precio="85" data-disponibilidad="agotado">
                            <div class="relative">
                                <img src="https://images.unsplash.com/photo-1583394838336-acd977736f90?w=300&h=200&fit=crop"
                                     alt="Auriculares Gaming" class="w-full h-48 object-cover">
                                <span class="absolute top-2 right-2 bg-red-500 text-white text-xs px-2 py-1 rounded">Agotado</span>
                            </div>
                            <div class="p-4">
                                <h3 class="font-semibold text-white mb-2">Auriculares SteelSeries Arctis 7</h3>
                                <p class="text-gray-400 text-sm mb-3">Auriculares inalámbricos con sonido 7.1</p>
                                <div class="flex justify-between items-center">
                                    <span class="text-xl font-bold text-blue-400">$84.99</span>
                                    <button class="bg-gray-400 text-white px-4 py-2 rounded-lg text-sm cursor-not-allowed" disabled>
                                        No Disponible
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Producto 5 -->
                        <div class="product-card bg-black border border-gray-700 rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300"
                             data-categoria="teclados" data-marca="corsair" data-precio="120" data-disponibilidad="disponible">
                            <div class="relative">
                                <img src="https://images.unsplash.com/photo-1541140532154-b024d705b90a?w=300&h=200&fit=crop"
                                     alt="Teclado Mecánico" class="w-full h-48 object-cover">
                                <span class="absolute top-2 right-2 bg-green-500 text-white text-xs px-2 py-1 rounded">En Stock</span>
                            </div>
                            <div class="p-4">
                                <h3 class="font-semibold text-white mb-2">Teclado Corsair K70 RGB</h3>
                                <p class="text-gray-400 text-sm mb-3">Teclado mecánico con switches Cherry MX</p>
                                <div class="flex justify-between items-center">
                                    <span class="text-xl font-bold text-blue-400">$119.99</span>
                                    <button class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg text-sm transition">
                                        Agregar
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Producto 6 -->
                        <div class="product-card bg-black border border-gray-700 rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300"
                             data-categoria="mouse" data-marca="logitech" data-precio="35" data-disponibilidad="disponible">
                            <div class="relative">
                                <img src="https://images.unsplash.com/photo-1615663245857-ac93bb7c39e7?w=300&h=200&fit=crop"
                                     alt="Mouse Wireless" class="w-full h-48 object-cover">
                                <span class="absolute top-2 right-2 bg-green-500 text-white text-xs px-2 py-1 rounded">En Stock</span>
                            </div>
                            <div class="p-4">
                                <h3 class="font-semibold text-white mb-2">Mouse Logitech MX Master 3</h3>
                                <p class="text-gray-400 text-sm mb-3">Mouse inalámbrico para productividad</p>
                                <div class="flex justify-between items-center">
                                    <span class="text-xl font-bold text-blue-400">$34.99</span>
                                    <button class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg text-sm transition">
                                        Agregar
                                    </button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Código del carrusel de videos
            const slider = document.getElementById('videoSlider');
            const totalSlides = 2;
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

            // Código del filtrado de productos
            const productCards = document.querySelectorAll('.product-card');
            const filterCheckboxes = document.querySelectorAll('.filter-checkbox');
            const clearFiltersBtn = document.getElementById('clearFilters');
            const productCount = document.getElementById('productCount');
            const sortSelect = document.getElementById('sortSelect');

            let activeFilters = {
                categoria: [],
                marca: [],
                precio: [],
                disponibilidad: []
            };

            function updateProductDisplay() {
                let visibleCount = 0;

                productCards.forEach(card => {
                    let shouldShow = true;

                    // Verificar cada filtro activo
                    Object.keys(activeFilters).forEach(filterType => {
                        if (activeFilters[filterType].length > 0) {
                            const cardValue = card.getAttribute(`data-${filterType}`);

                            if (filterType === 'precio') {
                                const cardPrice = parseInt(cardValue);
                                let priceMatch = false;

                                activeFilters[filterType].forEach(range => {
                                    if (range === '0-50' && cardPrice >= 0 && cardPrice <= 50) priceMatch = true;
                                    if (range === '50-100' && cardPrice > 50 && cardPrice <= 100) priceMatch = true;
                                    if (range === '100-200' && cardPrice > 100 && cardPrice <= 200) priceMatch = true;
                                    if (range === '200+' && cardPrice > 200) priceMatch = true;
                                });

                                if (!priceMatch) shouldShow = false;
                            } else {
                                if (!activeFilters[filterType].includes(cardValue)) {
                                    shouldShow = false;
                                }
                            }
                        }
                    });

                    if (shouldShow) {
                        card.style.display = 'block';
                        visibleCount++;
                    } else {
                        card.style.display = 'none';
                    }
                });

                productCount.textContent = `${visibleCount} productos encontrados`;
            }

            // Event listeners para checkboxes
            filterCheckboxes.forEach(checkbox => {
                checkbox.addEventListener('change', function() {
                    const filterType = this.getAttribute('data-filter');
                    const filterValue = this.getAttribute('data-value');

                    if (this.checked) {
                        if (!activeFilters[filterType].includes(filterValue)) {
                            activeFilters[filterType].push(filterValue);
                        }
                    } else {
                        const index = activeFilters[filterType].indexOf(filterValue);
                        if (index > -1) {
                            activeFilters[filterType].splice(index, 1);
                        }
                    }

                    updateProductDisplay();
                });
            });

            // Limpiar filtros
            clearFiltersBtn.addEventListener('click', function() {
                filterCheckboxes.forEach(checkbox => {
                    checkbox.checked = false;
                });

                activeFilters = {
                    categoria: [],
                    marca: [],
                    precio: [],
                    disponibilidad: []
                };

                updateProductDisplay();
            });

            // Ordenamiento
            sortSelect.addEventListener('change', function() {
                const sortValue = this.value;
                const productsGrid = document.getElementById('productsGrid');
                const cardsArray = Array.from(productCards);

                cardsArray.sort((a, b) => {
                    switch(sortValue) {
                        case 'price-asc':
                            return parseInt(a.getAttribute('data-precio')) - parseInt(b.getAttribute('data-precio'));
                        case 'price-desc':
                            return parseInt(b.getAttribute('data-precio')) - parseInt(a.getAttribute('data-precio'));
                        case 'name-asc':
                            return a.querySelector('h3').textContent.localeCompare(b.querySelector('h3').textContent);
                        case 'name-desc':
                            return b.querySelector('h3').textContent.localeCompare(a.querySelector('h3').textContent);
                        default:
                            return 0;
                    }
                });

                cardsArray.forEach(card => {
                    productsGrid.appendChild(card);
                });
            });

            // Inicializar contador
            updateProductDisplay();
        });
    </script>

@endsection
