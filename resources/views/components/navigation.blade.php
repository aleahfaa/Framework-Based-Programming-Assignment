<nav {{ $attributes->merge(['class' => 'flex items-center space-x-1']) }}>
    @foreach($items as $item)
        <a href="{{ $item['url'] }}" 
           class="{{ $isActive($item['route']) 
               ? 'px-3 py-2 text-sm text-n-gray-900 bg-n-gray-100 rounded-md font-medium' 
               : 'px-3 py-2 text-sm text-n-gray-600 hover:text-n-gray-900 hover:bg-n-gray-100 rounded-md transition-all duration-200' }}">
            {{ $item['label'] }}
        </a>
    @endforeach
    {{ $slot }}
</nav>