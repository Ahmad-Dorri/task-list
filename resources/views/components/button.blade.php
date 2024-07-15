@props(['isAnchor' => true])

@php
    $defaultClasses = 'btn btn-primary mt-2'
@endphp

@if($isAnchor)
    <a {{ $attributes->merge(['class' => $defaultClasses]) }} >
        {{ $slot }}
    </a>
@else
    <button {{ $attributes->merge(['class' => $defaultClasses]) }} >
        {{ $slot }}
    </button>
@endif
