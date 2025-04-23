{{-- Credit: Custom SVG Icon --}}
@props([
    'variant' => 'outline',
])

@php
    if ($variant === 'solid') {
        throw new \Exception('The "solid" variant is not supported in this icon.');
    }

    $classes = Flux::classes('shrink-0')->add(
        match ($variant) {
            'outline' => '[:where(&)]:size-6',
            'mini' => '[:where(&)]:size-5',
            'micro' => '[:where(&)]:size-4',
        },
    );

    $strokeWidth = match ($variant) {
        'outline' => 2,
        'mini' => 2.25,
        'micro' => 2.5,
    };
@endphp

<svg
    {{ $attributes->class($classes) }}
    data-flux-icon
    xmlns="http://www.w3.org/2000/svg"
    viewBox="0 0 24 24"
    fill="none"
    stroke="currentColor"
    stroke-width="{{ $strokeWidth }}"
    stroke-linecap="round"
    stroke-linejoin="round"
    aria-hidden="true"
    data-slot="icon"
>
{!! file_get_contents(resource_path('icons/laptop-employee.svg')) !!}
    {{-- <path d="M16 15a4 4 0 1 0-8 0"/>
    <circle cx="12" cy="9" r="2"/>
    <rect x="2" y="3" width="20" height="14" rx="2"/>
    <path d="M2 17h20"/> --}}
</svg>