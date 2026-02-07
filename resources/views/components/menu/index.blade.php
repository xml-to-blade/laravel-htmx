<ul class="menu bg-base-200 rounded-box w-56">
    @foreach($items as $item)
        <x-htmx::menu.item
            :label="$item->getLabel()"
            :icon="$item->getIcon()" />
    @endforeach
  <li>
    <details open>
      <summary>Parent</summary>
      <ul>
        <li><a>Submenu 1</a></li>
        <li><a>Submenu 2</a></li>
        <li>
          <details open>
            <summary>Parent</summary>
            <ul>
              <li><a>Submenu 1</a></li>
              <li><a>Submenu 2</a></li>
            </ul>
          </details>
        </li>
      </ul>
    </details>
  </li>
</ul>
