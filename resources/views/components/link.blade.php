@props(['active' => false])

<a {{$attributes}} class="{{ $active ? 'nav-link active' : ' nav-link' }}">
    {{$slot}}
</a>