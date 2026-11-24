@props(['name'])

<svg {{ $attributes }}>
    <use href="#{{ $name }}"></use>
</svg>