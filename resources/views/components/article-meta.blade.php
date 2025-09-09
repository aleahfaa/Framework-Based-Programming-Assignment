<div {{ $attributes->merge(['class' => $compact ? 'flex items-center space-x-4 text-xs text-n-gray-500' : 'flex flex-wrap items-center gap-4 text-sm text-n-gray-500']) }}>
    @if($author && !$compact)
        <div class="flex items-center space-x-2">
            <div class="w-6 h-6 bg-n-gray-900 rounded-full flex items-center justify-center">
                <span class="text-white text-xs">{{ substr($author, 0, 1) }}</span>
            </div>
            <span>{{ $author }}</span>
        </div>
    @endif
    @if($date)
        <div class="flex items-center space-x-1">
            <x-icon name="calendar" :size="$compact ? 'w-3 h-3' : 'w-4 h-4'" />
            <span>{{ $formattedDate() }}</span>
        </div>
    @endif
    @if($readTime)
        <div class="flex items-center space-x-1">
            <x-icon name="clock" :size="$compact ? 'w-3 h-3' : 'w-4 h-4'" />
            <span>{{ $readTime }}</span>
        </div>
    @endif
    @if(!empty($tags))
        <div class="flex items-center space-x-2">
            @foreach($tags as $tag)
                <span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-blue-100 text-blue-800">
                    {{ $tag }}
                </span>
            @endforeach
        </div>
    @endif
    {{ $slot }}
</div>