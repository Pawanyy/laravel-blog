<x-layout>
    <x-slot name="content">
        @include('_post-header')
        <main class="max-w-6xl mt-10 mx-auto space-y-6">

            <x-posts-grid :posts="$posts"/>
        </main>

    </x-slot>
</x-layout>
