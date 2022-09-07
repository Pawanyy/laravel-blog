<x-layout>
    <main class="max-w-6xl mt-10 mx-auto space-y-6">
        <article class="max-w-4xl md:grid md:grid-cols-12 md:gap-x-10">
            <div class="col-span-4 md:text-center mb-10">
                <img src="/images/illustration-1.png" class="rounded-xl" alt="">
                <span class="block mt-3 text-gray-400 text-xs">
                    Published <time>{{ $post->created_at->diffForHumans() }}</time>
                </span>
                <div class="mt-3 flex md:justify-center items-center text-sm text-left">
                    <img src="/images/lary-avatar.svg" class="mr-2" alt="" srcset="">
                    <div>
                        <h5 class="font-bold">{{ $post->author->username }}</h5>
                        <h6>Mascot at Laracasts</h6>
                    </div>
                </div>
            </div>
            <div class="col-span-8">
                <div class="flex justify-between mb-4">
                    <a href="/" class="inline-flex items-center hover:text-blue-400 transition-colors duration-300">
                        <svg class="rotate-180" xmlns="http://www.w3.org/2000/svg" width="24" height="24">
                            <path
                                d="M7.293 4.707 14.586 12l-7.293 7.293 1.414 1.414L17.414 12 8.707 3.293 7.293 4.707z" />
                        </svg>
                        Back to Home
                    </a>
                    <div class="space-x-2">
                        <x-category-button :category="$post->category" />
                    </div>
                </div>
                <h1 class="text-4xl font-bold mb-4">{{ $post->title }}</h1>
                <div class="space-y-6">
                    {!! $post->body !!}
                </div>
            </div>
        </article>
    </main>
</x-layout>