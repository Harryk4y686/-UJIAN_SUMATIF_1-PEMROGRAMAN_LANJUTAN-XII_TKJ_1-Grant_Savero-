@extends('layouts.app')

@section('title', 'Daftar Siswa')

@section('content')
    <h1 class="text-2xl font-bold mb-6">Daftar Siswa</h1>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
        @foreach($students as $student)
            <div class="bg-white shadow-md rounded-xl p-4 hover:shadow-lg transition">
                <img src="{{ $student['foto'] }}" 
                     class="w-20 h-20 rounded-full mx-auto mb-3 border-2 border-indigo-300">
                <h2 class="text-lg font-bold text-center">{{ $student['nama'] }}</h2>
                <p class="text-sm text-gray-600 text-center">{{ '@'.$student['username'] }}</p>
                <p class="text-xs text-gray-500 mt-2 text-center">
                    {{ \Illuminate\Support\Str::limit($student['deskripsi'], 50) }}
                </p>
            </div>
        @endforeach
    </div>
@endsection