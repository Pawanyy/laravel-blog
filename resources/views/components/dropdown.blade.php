<div x-data="{ show: false }" @click.away="show = false">
    {{-- Trigger --}}
    <div @click="show = !show">
        {{ $trigger }}
    </div>

    {{-- Links --}}
    <div x-show="show" class="absolute mt-4 py-2 bg-gray-100 text-sm w-full rounded-xl z-50" style="display: none">
        {{ $slot }}
    </div>
</div>
