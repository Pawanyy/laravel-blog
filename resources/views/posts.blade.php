<x-layout>
    <x-slot name="content">
        @include('_post-header')
        <main class="max-w-6xl mt-10 mx-auto space-y-6">

            <x-post-featured-card />

            <div class="lg:grid lg:grid-cols-2">
                <x-post-card />
                <x-post-card />
            </div>

            <div class="lg:grid lg:grid-cols-3">
                <x-post-card />
                <x-post-card />
                <x-post-card />
            </div>
        </main>

        @foreach ($posts as $post)
            <article>
                <a href="/post/{{ $post->slug }}">
                    <h1>
                        {!! $post->title !!}
                    </h1>
                </a>

                <p>
                    Written By <a href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a>
                    in <a href="categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
                </p>

                <div>
                    {{ $post->excerpt }}
                </div>
            </article>
        @endforeach
    </x-slot>
</x-layout>
