<x-app>
    <x-slot name="header">
        <x-dashboard.header />
    </x-slot>

    <x-slot name="sidebar">
        <x-dashboard.sidebar />
    </x-slot>

    <x-slot name="footer">
        <x-dashboard.footer />
    </x-slot>

    <livewire:product-detail :product="$product" />
</x-app>
