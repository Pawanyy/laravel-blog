<x-dropdown>
    <x-slot name="trigger">
        <button class="text-left flex w-full md:w-32 lg:w-32 py-2 px-5 pr-8 font-bold">
            {{ isset($currentCategory) ? ucwords($currentCategory->name) : 'All' }}
            <x-icon name="down-arrow" class="h-6 w-6 reset absolute right-2 text-xs" />
        </button>
    </x-slot>

    <x-dropdown-item href="/">All</x-dropdown-item>
    @foreach ($categories as $category)
    <x-dropdown-item href="/?category={{ $category->slug }}" :active="request()->is('category=' . $category->slug)">
        {{ ucwords($category->name) }}
    </x-dropdown-item>
    @endforeach
</x-dropdown>