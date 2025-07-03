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
            <a href="{{ url('/products') }}"
               class="hover:text-blue-400 transition-colors duration-300 cursor-pointer relative px-2 py-1 rounded-md hover:bg-white/10">
               Productos
            </a>
        </nav>
        
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
