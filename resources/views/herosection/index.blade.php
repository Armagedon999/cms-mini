<x-app-layout>
<div class="max-w-6xl mx-auto py-8 px-4">
    {{-- Header & Tambah Hero --}}
    <div class="flex justify-between items-center mb-6">
        <div>
            <h1 class="text-3xl font-bold text-gray-800">Kelola Hero Section</h1>
            <p class="text-gray-500 text-sm">Atur tampilan hero untuk website Anda.</p>
        </div>
        <a href="{{ route('herosections.create') }}" 
           class="bg-blue-600 text-white px-4 py-2 rounded-lg shadow hover:bg-blue-700 transition">
            + Tambah Hero
        </a>
    </div>

    {{-- Filter & Pencarian --}}
    <div class="flex justify-between items-center mb-6">
        <form method="GET" action="{{ route('herosections.index') }}" class="flex gap-2">
            <input type="text" name="search" value="{{ request('search') }}" 
                   class="border rounded px-3 py-1 text-sm" 
                   placeholder="Cari judul hero...">
            <button class="bg-gray-100 border rounded px-3 py-1 hover:bg-gray-200 text-sm">
                Cari
            </button>
        </form>

        {{-- Opsional: Tampilkan Client jika Admin --}}
        @if(auth()->user()->is_admin ?? false)
            <span class="text-sm text-gray-600">Client: <strong>{{ $currentClient->name ?? '-' }}</strong></span>
        @endif
    </div>

    {{-- Grid Hero Section --}}
    @if($herosections->count())
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($herosections as $hero)
            <div class="bg-white rounded-xl shadow hover:shadow-lg transition flex flex-col overflow-hidden">
                {{-- Gambar Hero --}}
                <div class="relative">
                    <img src="{{ $hero->image ? asset('storage/'.$hero->image) : 'https://source.unsplash.com/600x200/?nature,water' }}" 
                         class="h-48 w-full object-cover">
                    <span class="absolute bottom-2 left-2 bg-blue-600 text-white text-xs px-2 py-0.5 rounded">
                        {{ $hero->updated_at->format('d M Y') }}
                    </span>
                </div>

                {{-- Konten --}}
                <div class="p-4 flex-1 flex flex-col">
                    <h2 class="font-semibold text-lg mb-1 text-gray-800 line-clamp-1">{{ $hero->title }}</h2>
                    <p class="text-gray-600 text-sm flex-1 line-clamp-2">{{ $hero->subtitle }}</p>

                    <div class="mt-4 flex gap-2">
                        <a href="{{ route('herosections.edit', $hero) }}" 
                           class="flex-1 text-center px-3 py-1 bg-yellow-400 text-white rounded hover:bg-yellow-500 text-sm">
                            Edit
                        </a>
                        <form action="{{ route('herosections.destroy', $hero) }}" method="POST" 
                              onsubmit="return confirm('Yakin ingin menghapus Hero ini?')" class="flex-1">
                            @csrf
                            @method('DELETE')
                            <button class="w-full px-3 py-1 bg-red-500 text-white rounded hover:bg-red-600 text-sm">
                                Hapus
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    {{-- Pagination --}}
    <div class="mt-6">
        {{ $herosections->links() }}
    </div>

    @else
        <div class="text-center py-10 text-gray-500">
            <p>Belum ada Hero Section. Tambahkan sekarang.</p>
        </div>
    @endif
</div>
</x-app-layout>
