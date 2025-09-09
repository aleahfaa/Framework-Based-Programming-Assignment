<div {{ $attributes->merge(['class' => $cardClasses()]) }}>
    @if($image)
        <div class="aspect-w-16 aspect-h-9">
            <img src="{{ $image }}" alt="{{ $title ?? 'Card image' }}" class="w-full h-full object-cover">
        </div>
    @endif
    <div class="p-6">
        @if($title)
            <h3 class="text-lg font-semibold text-n-gray-900 mb-2">{{ $title }}</h3>
        @endif
        @if($subtitle)
            <p class="text-n-gray-600 text-sm mb-4">{{ $subtitle }}</p>
        @endif
        {{ $slot }}
        @isset($actions)
            <div class="mt-4 flex items-center justify-between">
                {{ $actions }}
            </div>
        @endisset
    </div>
</div>