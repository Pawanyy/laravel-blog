<header class="max-w-4xl mx-auto mt-20 text-center">
    <div class="max-w-xl mx-auto">
        <h1 class="text-4xl">
            Latest <span class="text-blue-500">Laravel From Scratch</span> News
        </h1>

        <div class="tw-flex tw-justify-center space-y-2 md:space-y-0 md:space-x-4 mt-4">
            <div class="relative md:inline-flex bg-gray-100 rounded-xl">
                <x-category-dropdown />
            </div>
            <span class="relative flex md:inline-flex bg-gray-100 rounded-xl px-3 py-2">
                <form action="" method="get">
                    @if(request('category'))
                    <input type="hidden" name="category" value="{{request('category')}}">
                    @endif
                    <input type="text" name="searchTerm" class="bg-transparent placeholder-black font-bold"
                        placeholder="Search" value="{{request('searchTerm')}}">
                </form>
            </span>
        </div>
    </div>
</header>