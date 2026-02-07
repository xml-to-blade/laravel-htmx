@props([
    'label' => 'Item',
    'icon' => null,
    'shortcut' => null,
    'variant' => 'soft'
])
<li>
    <a {{ $attributes }}>
        @if($icon)
            <x-ui.icon :name="$icon" variant="mini" class="fill-current"/>
        @endif
        {{ $label }}
    </a>
</li>
