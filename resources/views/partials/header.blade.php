<header id="main-header" class="fixed top-0 left-0 w-full z-50 transition-transform duration-500">
    <div class="container mx-auto px-4 py-4 flex items-center justify-between">
        <a href="{{ url('/') }}" class="flex items-center z-10 relative">
            <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-10">
        </a>

        <nav class="space-x-6 hidden md:block text-white z-10 relative">
            <a href="{{ url('/') }}"
               class="hover:text-blue-400 transition-colors duration-300 cursor-pointer relative px-2 py-1 rounded-md hover:bg-white/10">
               Inicio
            </a>
            <a href="{{ url('/products/products') }}"
               class="hover:text-blue-400 transition-colors duration-300 cursor-pointer relative px-2 py-1 rounded-md hover:bg-white/10">
               Productos
            </a>
            <a href="{{ url('/cart') }}"
               class="hover:text-blue-400 transition-colors duration-300 cursor-pointer relative px-2 py-1 rounded-md hover:bg-white/10">
               Carrito
            </a>
            <a href="{{ url('/checkout') }}"
               class="hover:text-blue-400 transition-colors duration-300 cursor-pointer relative px-2 py-1 rounded-md hover:bg-white/10">
               Comprar
            </a>
        </nav>

        <div class="relative text-white text-xl z-10">
            <a href="{{ url('/cart') }}"
               class="hover:text-blue-400 transition-colors duration-300 cursor-pointer relative inline-block p-2 rounded-md hover:bg-white/10">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M7 4V2C7 1.45 7.45 1 8 1H16C16.55 1 17 1.45 17 2V4H20C20.55 4 21 4.45 21 5S20.55 6 20 6H19V19C19 20.1 18.1 21 17 21H7C5.9 21 5 20.1 5 19V6H4C3.45 6 3 5.55 3 5S3.45 4 4 4H7ZM9 3V4H15V3H9ZM7 6V19H17V6H7Z"/>
                    <path d="M9 8V17H11V8H9ZM13 8V17H15V8H13Z"/>
                </svg>
                <span class="absolute -top-1 -right-1 bg-red-600 text-white text-xs rounded-full px-1.5 py-0.5 min-w-[20px] text-center">3</span>
            </a>
        </div>

        <button class="md:hidden text-white z-10 relative p-2" id="mobile-menu-toggle">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </button>
    </div>

    <nav class="md:hidden bg-black/90 backdrop-blur-sm hidden" id="mobile-menu">
        <div class="container mx-auto px-4 py-4 space-y-4">
            <a href="{{ url('/') }}"
               class="block text-white hover:text-blue-400 transition-colors duration-300 cursor-pointer py-2 px-4 rounded-md hover:bg-white/10">
               Inicio
            </a>
            <a href="{{ url('/products') }}"
               class="block text-white hover:text-blue-400 transition-colors duration-300 cursor-pointer py-2 px-4 rounded-md hover:bg-white/10">
               Productos
            </a>
            <a href="{{ url('/cart') }}"
               class="block text-white hover:text-blue-400 transition-colors duration-300 cursor-pointer py-2 px-4 rounded-md hover:bg-white/10">
               Carrito
            </a>
            <a href="{{ url('/checkout') }}"
               class="block text-white hover:text-blue-400 transition-colors duration-300 cursor-pointer py-2 px-4 rounded-md hover:bg-white/10">
               Comprar
            </a>
        </div>
    </nav>
</header>

<script>

document.addEventListener('DOMContentLoaded', function() {
    const mobileMenuToggle = document.getElementById('mobile-menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');

    if (mobileMenuToggle && mobileMenu) {
        mobileMenuToggle.addEventListener('click', function() {
            mobileMenu.classList.toggle('hidden');
        });
    }

    const allLinks = document.querySelectorAll('#main-header a');
    allLinks.forEach(link => {
        link.style.pointerEvents = 'auto';
        link.style.cursor = 'pointer';
    });
});
</script>
