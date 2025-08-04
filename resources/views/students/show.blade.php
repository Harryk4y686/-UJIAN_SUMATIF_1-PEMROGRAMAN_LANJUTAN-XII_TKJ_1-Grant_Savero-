@extends('layouts.app')

@section('title', $student['nama'])

@section('content')
<div class="flex flex-col items-center text-center">
    <img src="{{ $student['foto'] }}" class="w-32 h-32 rounded-full mb-4 border-4 border-indigo-300">
    <h2 class="text-2xl font-bold">{{ $student['nama'] }}</h2>
    <p class="text-gray-500 mb-2">{{ '@'.$student['username'] }}</p>
    <p class="text-indigo-600 font-medium">{{ $student['kelas'] }} | Hobi: {{ $student['hobi'] }}</p>
    <p class="mt-4 text-gray-700">{{ $student['deskripsi'] }}</p>

    <div class="flex gap-4 mt-6">
        <x-button color="blue">Edit Profile</x-button>
        <x-button color="red">Delete Account</x-button>
    </div>
</div>
@endsection
