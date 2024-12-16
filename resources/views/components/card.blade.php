

@props(['highlight' => false])

<div class="flex gap-5 @class(['text-red-500' => $highlight, 'card'])">
    {{$slot}}
    <a {{ $attributes }}>View details</a>
</div>

