@props(['category'])
<a class="px-2 py-1 border border-blue-300 text-blue-300 uppercase rounded-full text-xs font-semibold"
    href="/categories/{{ $category->slug }}">{{ $category->name }}</a>
