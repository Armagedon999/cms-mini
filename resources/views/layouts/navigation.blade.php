<nav class="bg-white shadow sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16 items-center">
            <div class="flex gap-4 items-center">
                <a href="/dashboard" class="font-bold text-blue-700 text-lg">CMS Client</a>
                <a href="#hero-section" class="hover:text-blue-600 transition">Hero</a>
                <a href="#about-section" class="hover:text-blue-600 transition">Tentang Kami</a>
                <a href="#product-section" class="hover:text-blue-600 transition">Produk</a>
                <a href="#testimonial-section" class="hover:text-blue-600 transition">Testimoni</a>
                <a href="#gallery-section" class="hover:text-blue-600 transition">Galeri</a>
                <a href="#contact-section" class="hover:text-blue-600 transition">Kontak</a>
                <a href="#footer-section" class="hover:text-blue-600 transition">Footer</a>
            </div>
            <div>
                <!-- User dropdown, logout, dsb -->
                @auth
                    <span class="text-gray-600 mr-4">{{ auth()->user()->name }}</span>
                    <form action="{{ route('logout') }}" method="POST" class="inline">
                        @csrf
                        <button class="text-red-500 hover:underline">Logout</button>
                    </form>
                @endauth
            </div>
        </div>
    </div>
</nav>
