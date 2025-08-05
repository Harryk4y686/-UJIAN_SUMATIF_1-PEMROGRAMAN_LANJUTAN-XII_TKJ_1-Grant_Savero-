@extends('layouts.app')

@section('title', 'Daftar Siswa')

@section('content')
<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
    @foreach($students as $student)
        <a href="{{ url('/students/'.$student['id']) }}"
           class="block bg-white shadow-md rounded-xl p-6 hover:shadow-xl transition">
            <img src="{{ $student['foto'] }}" 
                 class="w-24 h-24 rounded-full mx-auto mb-3 border-4 border-indigo-300">
            <h2 class="text-xl font-bold text-center">{{ $student['nama'] }}</h2>
            <p class="text-sm text-gray-600 text-center">{{ '@'.$student['username'] }}</p>
            <p class="text-xs text-gray-500 mt-2 text-center">
                {{ \Illuminate\Support\Str::limit($student['deskripsi'], 50) }}
            </p>
        </a>
    @endforeach
</div>
@endsection