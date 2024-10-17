@props(['active', 'icon'])

@php
$classes = ($active ?? false)
            ? 'flex items-center gap-2 text-sm bg-blue-300/30 dark:bg-zinc-700 p-1.5 rounded transition-colors duration-200'
            : 'flex items-center gap-2 text-sm hover:bg-blue-300/30 dark:hover:bg-zinc-700 p-1.5 rounded transition-colors duration-200';
@endphp

<a {{ $attributes->merge(['class' => $classes])}}>
    <div>
        {{ $icon }}
    </div>
    <span class="group-hover:font-semibold"> {{ $slot }} </span>
</a>
