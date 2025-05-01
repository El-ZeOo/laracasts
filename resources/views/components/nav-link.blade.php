@props([
    'active' => false,
    'type' => 'a',
    'color' => 'blue',
])

@if ($type === 'button')
    <button>
        <a {{ $attributes }}
            class="text-white bg-{{ $color }}-700 hover:bg-{{ $color }}-800 focus:ring-4 focus:ring-{{ $color }}-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-{{ $color }}-600 dark:hover:bg-{{ $color }}-700 focus:outline-none dark:focus:ring-{{ $color }}-800">{{ $slot }}</a>
    </button>
@else
    <a class="{{ $active ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} rounded-md px-3 py-2 text-sm font-medium"
        aria-current="{{ $active ? 'page' : 'false' }}" {{ $attributes }}>
        {{ $slot }}
    </a>
@endif
