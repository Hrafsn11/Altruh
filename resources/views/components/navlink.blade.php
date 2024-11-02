@props(['active' => false]) <!-- Atur default value untuk active sebagai false -->
<a {{ $attributes }} class="{{ $active ? 'bg-gray-900 text-white' : 'text-gray-800 hover:bg-gray-700 hover:text-white' }} px-3 py-2 rounded-md text-sm font-medium">
    {{ $slot }}
</a>
