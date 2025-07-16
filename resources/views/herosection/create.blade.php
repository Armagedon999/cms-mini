<x-app-layout>
    <div class="max-w-lg mx-auto py-8">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold">Tambah Hero Section</h1>
            <a href="{{ route('herosections.index') }}" class="text-gray-600 hover:underline">Kembali</a>
        </div>

        <form action="{{ route('herosections.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4 bg-white p-6 rounded shadow">
            @csrf

            <div>
                <label class="block font-semibold mb-1" for="title">Judul</label>
                <input type="text" name="title" id="title" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-300" required>
            </div>

            <div>
                <label class="block font-semibold mb-1" for="subtitle">Subjudul</label>
                <input type="text" name="subtitle" id="subtitle" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-300">
            </div>

            <div>
                <label class="block font-semibold mb-1" for="image">Gambar</label>
                <input type="file" name="image" id="image" class="w-full border border-gray-300 rounded px-3 py-2">
            </div>

            <div class="flex items-center gap-4 pt-4">
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded shadow hover:bg-blue-700 transition">Simpan</button>
                <a href="{{ route('herosections.index') }}" class="text-gray-600 hover:underline">Batal</a>
            </div>
        </form>
    </div>
</x-app-layout>
