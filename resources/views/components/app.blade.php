<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title ?? 'Dashboard' }}</title>

    @vite('resources/css/app.css')
    @vite('resources/js/app.js')

    <livewire:styles />
</head>

<body data-theme="light" class="bg-base-200 min-h-screen">
    <div class="bg-base-200 flex min-h-screen flex-col">
        {{ $header ?? '' }}
        {{ $sidebar ?? '' }}
        <div class="flex grow flex-col lg:ps-75">
            <main class="mx-auto w-full max-w-7xl flex-1 p-6">
                {{ $slot }}
            </main>
            {{ $footer ?? '' }}
        </div>
    </div>



    @stack('modals')
    <livewire:scripts />
    @stack('scripts')
</body>

</html>
