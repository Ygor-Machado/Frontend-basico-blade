<a href="{{ $url }}"
   {{ $attributes->class(
    ['border-indigo-500 text-gray-900 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium' => !$active,
        'border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium' => $active
    ]) }}>
   {{ $name }}
</a>
