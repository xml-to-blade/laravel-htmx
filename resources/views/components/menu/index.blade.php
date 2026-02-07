<ul class="menu bg-base-200 rounded-box w-56">
    @foreach($items as $item)
        <x-htmx::menu.item
            :label="$item->getLabel()"
            :icon="$item->getIcon()"
            :items="$item->getItems()" />
    @endforeach
</ul>
