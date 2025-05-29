<header id="main-header" class="fixed top-0 left-0 w-full z-20 transition-transform duration-500">
    <div class="container mx-auto px-4 py-4 flex items-center justify-between">
        <a href="{{ url('/') }}" class="flex items-center">
            <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-10">
        </a>
        <nav class="space-x-6 hidden md:block text-white">
            <a href="{{ url('/') }}" class="hover:text-gray-300 transition">Inicio</a>
            <a href="{{ url('/products') }}" class="hover:text-gray-300 transition">Productos</a>
            <a href="{{ url('/cart') }}" class="hover:text-gray-300 transition">Carrito</a>
            <a href="{{ url('/checkout') }}" class="hover:text-gray-300 transition">Comprar</a>
        </nav>
        <div class="relative text-white text-xl">
            <a href="{{ url('/cart') }}" class="hover:text-gray-300">🛒</a>
            <span class="absolute -top-2 -right-2 bg-red-600 text-white text-xs rounded-full px-2">3</span>
        </div>
    </div>
</header>
