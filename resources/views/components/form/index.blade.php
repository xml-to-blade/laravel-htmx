<div>
    <form style="max-width: 480px">
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12 dark:border-white/10">
                <h2 class="text-base/7 font-semibold text-gray-900 dark:text-white">{{ $title }}</h2>
                <p class="mt-1 text-sm/6 text-gray-600 dark:text-gray-400">{{ $description }}</p>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    @foreach($fields as $field)
                        {!! $field !!}
                    @endforeach
                </div>
            </div>
        </div>
    </form>
</div>
