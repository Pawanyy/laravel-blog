<x-layout>
    <x-slot name="content">
        @include('posts._header')
        <main class="max-w-6xl mt-10 mx-auto space-y-6">
            @if ($posts->count())
            <x-posts-grid :posts="$posts" />

            {{$posts->links()}}
            @else
            <p>No Posts</p>
            @endif
        </main>

    </x-slot>
</x-layout>