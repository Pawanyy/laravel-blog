<article
    class="transition-colors duration-300 hover:bg-gray-100 rounded-xl border border-black border-opacity-0 hover:border-opacity-5">
    <div class="py-6 px-5 lg:flex">
        <div class="flex-1">
            <img class="rounded-xl" src="/images/illustration-1.png" alt="Big Blog">
        </div>
        <div class="flex-1 flex flex-col justify-between ml-4">
            <header>
                <div class="mt-3 lg:mt-0 space-x-2">
                    <a class="px-2 py-1 border border-blue-300 text-blue-300 uppercase rounded-full text-xs font-semibold"
                        href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
                </div>
                <div class="mt-4">
                    <h1 class="text-3xl">{{ $post->title }}</h1>
                    <span class="block mt-2 text-gray-400 text-xs">
                        Published <time>{{ $post->created_at->diffForHumans() }}</time>
                    </span>
                </div>
            </header>
            <div class="mt-6 text-sm">
                {{ $post->excerpt }}
            </div>
            <footer class="flex mt-4 justify-between items-center">
                <div class="flex items-center text-sm">
                    <img src="/images/lary-avatar.svg" class="mr-2" alt="" srcset="">
                    <div>
                        <h5 class="font-bold">{{ $post->author->username }}</h5>
                        <h6>Mascot at Laracasts</h6>
                    </div>
                </div>
                <div class="hidden md:block">
                    <a href="/post/{{ $post->slug }}"
                        class="font-semibold text-xs rounded-full bg-gray-200 py-2 px-5">Read More</a>
                </div>
            </footer>
        </div>

    </div>
</article>
