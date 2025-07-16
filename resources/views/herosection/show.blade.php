<x-app-layout>
    <div class="max-w-lg mx-auto py-8">
        <div class="bg-white rounded shadow p-6">
            <img src="{{ $herosection->image ? asset('storage/' . $herosection->image) : 'https://source.unsplash.com/600x200/?nature,water' }}" 
                 class="rounded mb-4 h-48 object-cover w-full">
            
            <h1 class="text-2xl font-bold mb-2">{{ $herosection->title }}</h1>
            <p class="text-gray-600 mb-4">{{ $herosection->subtitle }}</p>

            <a href="{{ route('herosections.index') }}" 
               class="text-blue-600 hover:underline inline-block mt-2">← Kembali ke daftar</a>
        </div>
    </div>
</x-app-layout>
