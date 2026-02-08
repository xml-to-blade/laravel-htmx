<div class="w-full col-span-full">
    <div class="flex justify-between">
        <label for="email" class="block text-sm/6 font-medium text-gray-900 dark:text-white">{{ $label }}</label>
        @if($help)
            <span id="email-optional" class="text-sm/6 text-gray-500 dark:text-gray-400">{{ $help }}</span>
        @endif
    </div>
    <div class="mt-2">
        {{ $slot }}
    </div>
    <p id="email-description" class="mt-2 text-sm text-gray-500 dark:text-gray-400">{{ $description }}</p>
</div>

