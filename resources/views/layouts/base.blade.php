<x-layouts.app>

    <x-header />

    <main>
        {{ $slot }}
    </main>

    <x-sidebar />
    @if ($sidebar)
        {{ $sidebar }}
    @endif

    <x-footer />

</x-layouts.app>