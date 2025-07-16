<x-app-layout>
    <div class="bg-base-200 min-h-screen">
        <div class="max-w-6xl mx-auto">

            <!-- Hero Section -->
            <section data-aos="fade-up" class="relative h-screen rounded-2xl overflow-hidden shadow-xl mb-12 bg-gradient-to-br from-blue-700 to-blue-400">
                <img src="{{ $heroSection && $heroSection->image ? asset('storage/'.$heroSection->image) : 'https://source.unsplash.com/1600x800/?nature' }}" class="w-full h-full object-cover opacity-60">
                <div class="absolute inset-0 flex flex-col items-center justify-center text-center p-8">
                    <h1 class="text-5xl md:text-6xl font-extrabold text-white mb-4 drop-shadow">{{ $heroSection->title ?? 'Judul Utama Anda' }}</h1>
                    <p class="text-2xl text-blue-100 mb-8">{{ $heroSection->subtitle ?? 'Subjudul akan tampil di sini...' }}</p>
                    <a href="{{ $heroSection ? route('herosections.edit', $heroSection) : route('herosections.create') }}" class="btn btn-primary btn-lg shadow-lg">
                        <i class="fas fa-pen mr-2"></i> {{ $heroSection ? 'Edit Hero' : 'Tambah Hero' }}
                    </a>
                </div>
            </section>

            <!-- Tentang Kami -->
            <section data-aos="fade-right" class="h-screen flex flex-col md:flex-row items-center justify-center gap-8 card bg-gradient-to-br from-green-700 to-green-400 shadow-xl p-8 mb-12 rounded-2xl">
                <div class="flex-1">
                    <h2 class="text-4xl font-bold text-white mb-4">Tentang Kami</h2>
                    <p class="text-lg text-green-100 mb-8">Edit deskripsi & foto yang menjelaskan profil perusahaan Anda.</p>
                    <a href="{{ route('aboutsections.index') }}" class="btn btn-success btn-lg shadow">
                        <i class="fas fa-edit mr-2"></i> Kelola Tentang Kami
                    </a>
                </div>
                <div class="flex-1 flex justify-center">
                    <img src="https://source.unsplash.com/600x400/?office,team" class="rounded-2xl shadow-2xl h-64 object-cover border-4 border-green-200">
                </div>
            </section>

            <!-- Produk / Layanan -->
            <section data-aos="fade-left" class="h-screen flex flex-col md:flex-row-reverse items-center justify-center gap-8 card bg-gradient-to-br from-purple-700 to-purple-400 shadow-xl p-8 mb-12 rounded-2xl">
                <div class="flex-1">
                    <h2 class="text-4xl font-bold text-white mb-4">Produk / Layanan</h2>
                    <p class="text-lg text-purple-100 mb-8">Tambah atau ubah daftar produk atau layanan yang ditawarkan.</p>
                    <a href="{{ route('products.index') }}" class="btn btn-secondary btn-lg shadow">
                        <i class="fas fa-box-open mr-2"></i> Kelola Produk & Layanan
                    </a>
                </div>
                <div class="flex-1 flex justify-center">
                    <img src="https://source.unsplash.com/600x400/?product,service" class="rounded-2xl shadow-2xl h-64 object-cover border-4 border-purple-200">
                </div>
            </section>

            <!-- Testimoni -->
            <section data-aos="zoom-in" class="h-screen flex flex-col md:flex-row items-center justify-center gap-8 card bg-gradient-to-br from-yellow-500 to-yellow-300 shadow-xl p-8 mb-12 rounded-2xl">
                <div class="flex-1">
                    <h2 class="text-4xl font-bold text-yellow-900 mb-4">Testimoni Pelanggan</h2>
                    <p class="text-lg text-yellow-800 mb-8">Kelola review pelanggan yang akan muncul di halaman testimoni.</p>
                    <a href="{{ route('testimonials.index') }}" class="btn btn-warning btn-lg shadow">
                        <i class="fas fa-comments mr-2"></i> Kelola Testimoni
                    </a>
                </div>
                <div class="flex-1 flex justify-center">
                    <img src="https://source.unsplash.com/600x400/?testimonial,people" class="rounded-2xl shadow-2xl h-64 object-cover border-4 border-yellow-200">
                </div>
            </section>

            <!-- Galeri -->
            <section data-aos="fade-up" class="h-screen flex flex-col md:flex-row-reverse items-center justify-center gap-8 card bg-gradient-to-br from-pink-700 to-pink-400 shadow-xl p-8 mb-12 rounded-2xl">
                <div class="flex-1">
                    <h2 class="text-4xl font-bold text-white mb-4">Galeri Foto</h2>
                    <p class="text-lg text-pink-100 mb-8">Upload foto-foto produk, kegiatan, atau showcase perusahaan.</p>
                    <a href="{{ route('galleries.index') }}" class="btn btn-info btn-lg shadow">
                        <i class="fas fa-images mr-2"></i> Kelola Galeri
                    </a>
                </div>
                <div class="flex-1 flex justify-center">
                    <img src="https://source.unsplash.com/600x400/?gallery,showcase" class="rounded-2xl shadow-2xl h-64 object-cover border-4 border-pink-200">
                </div>
            </section>

            <!-- Kontak -->
            <section data-aos="flip-left" class="h-screen flex flex-col md:flex-row items-center justify-center gap-8 card bg-gradient-to-br from-indigo-700 to-indigo-400 shadow-xl p-8 mb-12 rounded-2xl">
                <div class="flex-1">
                    <h2 class="text-4xl font-bold text-white mb-4">Kontak</h2>
                    <p class="text-lg text-indigo-100 mb-8">Atur informasi telepon, email, dan Google Maps lokasi perusahaan.</p>
                    <a href="{{ route('contacts.index') }}" class="btn btn-accent btn-lg shadow">
                        <i class="fas fa-phone mr-2"></i> Kelola Kontak
                    </a>
                </div>
                <div class="flex-1 flex justify-center">
                    <img src="https://source.unsplash.com/600x400/?contact,location" class="rounded-2xl shadow-2xl h-64 object-cover border-4 border-indigo-200">
                </div>
            </section>

            <!-- Footer -->
            <section data-aos="fade-up" class="h-screen flex flex-col md:flex-row-reverse items-center justify-center gap-8 card bg-gradient-to-br from-gray-800 to-gray-600 shadow-xl p-8 rounded-2xl">
                <div class="flex-1">
                    <h2 class="text-4xl font-bold text-white mb-4">Footer Website</h2>
                    <p class="text-lg text-gray-300 mb-8">Kelola sosial media, copyright, dan link tambahan yang ada di footer.</p>
                    <a href="{{ route('footers.index') }}" class="btn btn-error btn-lg shadow">
                        <i class="fas fa-link mr-2"></i> Kelola Footer
                    </a>
                </div>
                <div class="flex-1 flex justify-center">
                    <img src="https://source.unsplash.com/600x400/?footer,website" class="rounded-2xl shadow-2xl h-64 object-cover border-4 border-gray-400">
                </div>
            </section>
        </div>
    </div>
</x-app-layout>
