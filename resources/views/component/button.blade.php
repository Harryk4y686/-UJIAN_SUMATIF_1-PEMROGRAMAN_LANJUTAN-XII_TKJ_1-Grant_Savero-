@props(['color' => 'indigo'])

<button 
    {{ $attributes->merge([
        'class' => "px-4 py-2 rounded-lg font-semibold text-white bg-$color-500 hover:bg-$color-600 transition"
    ]) }}>
    {{ $slot }}
</button>