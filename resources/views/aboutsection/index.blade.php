@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto py-8">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">Tentang Kami</h1>
        <a href="{{ route('aboutsections.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded shadow hover:bg-blue-700 transition">Tambah</a>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        @foreach($aboutsections as $about)
        <div class="bg-white rounded shadow p-4 flex flex-col">
            <img src="{{ $about->photo ? asset('storage/'.$about->photo) : 'https://source.unsplash.com/600x200/?office,team' }}" class="rounded mb-2 h-40 object-cover">
            <p class="text-gray-700 mb-2">{{ $about->description }}</p>
            <div class="mt-4 flex gap-2">
                <a href="{{ route('aboutsections.edit', $about) }}" class="px-3 py-1 bg-yellow-400 text-white rounded hover:bg-yellow-500">Edit</a>
                <form action="{{ route('aboutsections.destroy', $about) }}" method="POST" onsubmit="return confirm('Yakin hapus?')">
                    @csrf
                    @method('DELETE')
                    <button class="px-3 py-1 bg-red-500 text-white rounded hover:bg-red-600">Hapus</button>
                </form>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection 