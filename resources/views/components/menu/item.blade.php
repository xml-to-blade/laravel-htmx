@props([
    'label' => 'Item',
    'icon' => null,
    'shortcut' => null,
'variant' => 'soft',
'items' => []
])
<li>

    @if (empty($items))
        <a {{ $attributes }}>
            @if($icon)
                <x-ui.icon :name="$icon" variant="mini" class="fill-current"/>
            @endif
            {{ $label }}
        </a>
@else
    <details>
      <summary>{{ $label }}</summary>
      <ul>
        @foreach($items as $item)
            <x-htmx::menu.item
                :label="$item->getLabel()"
                :icon="$item->getIcon()"
                :items="$item->getItems()" />
        @endforeach
      </ul>
    </details>
@endif
</li>
