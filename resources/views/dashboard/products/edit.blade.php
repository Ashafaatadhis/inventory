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

    <livewire:product-form :product="$product" />

</x-app>
