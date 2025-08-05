@extends('layouts.app')

@section('title', $student['nama'])

@section('content')
<div class="max-w-lg mx-auto bg-white shadow-lg rounded-2xl p-6">
    <div class="flex flex-col items-center">
        <img src="{{ $student['foto'] }}" 
             alt="{{ $student['nama'] }}" 
             class="w-32 h-32 rounded-full border-4 border-indigo-400 mb-4">
        
        <p class="text-gray-500 text-sm mb-1">{{ '@'.$student['username'] }}</p>
        <h1 class="text-2xl font-bold">{{ $student['nama'] }}</h1>
        <p class="text-gray-600">{{ $student['kelas'] }} | {{ $student['hobi'] }}</p>
        
        <p class="mt-3 text-gray-700 text-center">{{ $student['deskripsi'] }}</p>

        <div class="flex gap-4 mt-5">
            <a href="{{ url('/students') }}" 
               class="bg-gray-400 hover:bg-gray-500 text-white font-semibold py-2 px-4 rounded-lg shadow">
               ← Back
            </a>
            <a href="#" 
               class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-lg shadow">
               Edit Profile
            </a>
            <a href="#" 
               class="bg-red-500 hover:bg-red-600 text-white font-semibold py-2 px-4 rounded-lg shadow">
               Delete Account
            </a>
        </div>
    </div>
</div>
@endsection