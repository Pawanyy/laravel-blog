@props(['post'])
<article
    {{ $attributes->merge(['class' => 'transition-colors duration-300 hover:bg-gray-100 rounded-xl border border-black border-opacity-0 hover:border-opacity-5']) }}>
    <div class="py-6 px-5">
        <div class="">
            <img class="rounded-xl" src="/images/illustration-5.png" alt="Big Blog">
        </div>
        <div class="mt-4 flex flex-col justify-between ml-4">
            <header>
                <div class=" space-x-2">
                    <x-category-button :category="$post->category" />
                </div>
                <div class="mt-4">
                    <h1 class="text-3xl">{{ $post->title }}</h1>
                    <span class="block mt-2 text-gray-400 text-xs">
                        Published <time>{{ $post->created_at->diffForHumans() }}</time>
                    </span>
                </div>
            </header>
            <div class="mt-6 text-sm space-y-4">
                {!! $post->excerpt !!}
            </div>
            <footer class="flex mt-4 justify-between items-center">
                <div class="flex items-center text-sm">
                    <img src="/images/lary-avatar.svg" class="mr-2" alt="" srcset="">
                    <div>
                        <a href="/authors/{{ $post->author->username }}" class="font-bold">{{ $post->author->name }}</a>
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
