<header class="max-w-4xl mx-auto mt-20 text-center">
    <div class="max-w-xl mx-auto">
        <h1 class="text-4xl">
            Latest <span class="text-blue-500">Laravel From Scratch</span> News
        </h1>

        <div class="tw-flex tw-justify-center space-y-2 md:space-y-0 md:space-x-4 mt-4">
            <div class="relative md:inline-flex bg-gray-100 rounded-xl">
                <x-dropdown>
                    <x-slot name="trigger">
                        <button class="text-left flex w-full md:w-32 lg:w-32 py-2 px-5 pr-8 font-bold">
                            {{ isset($currentCategory) ? ucwords($currentCategory->name) : 'All' }}
                            <x-icon name="down-arrow" class="h-6 w-6 reset absolute right-2 text-xs" />
                        </button>
                    </x-slot>

                    <x-dropdown-item href="/">All</x-dropdown-item>
                    @foreach ($categories as $category)
                        <x-dropdown-item href="/?category={{ $category->slug }}" :active="request()->is('categories/' . $category->slug)">
                            {{ ucwords($category->name) }}
                        </x-dropdown-item>
                    @endforeach
                </x-dropdown>
            </div>
            <span class="relative flex md:inline-flex bg-gray-100 rounded-xl items-center">
                <select class="reset flex-1 appearance-none py-2 px-5 pr-8 bg-transparent font-bold">
                    <option selected> Other Filters</option>
                    <option>Style</option>
                </select>
                <x-icon name="down-arrow" class="h-6 w-6 reset absolute right-2 text-xs" />
            </span>
            <span class="relative flex md:inline-flex bg-gray-100 rounded-xl px-3 py-2">
                <form action="" method="get">
                    <input type="text" name="searchTerm" class="bg-transparent placeholder-black font-bold"
                        placeholder="Search">
                </form>
            </span>
        </div>
    </div>
</header>
