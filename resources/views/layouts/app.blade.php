<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
         <link rel="preconnect" href="https://fonts.googleapis.com">
         <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
         <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="flex items-start text-zinc-500 dark:text-zinc-400 min-h-screen bg-zinc-100 dark:bg-zinc-900">
            <aside class="sticky top-0 h-dvh w-[280px] text-zinc-300 bg-blue-950 dark:bg-blue-950/10  border-r dark:border-zinc-700">
                <div class="sticky top-0 h-16 px-3  bg-blue-950  dark:bg-blue-950/10 border-b border-blue-900 dark:border-zinc-700"> Logo</div>
                <div class="px-3 py-4">
                    <nav>
                        <livewire:layout.sidebar />
                    </nav>
                </div>
            </aside>

            <div class="grid w-full">
                <livewire:layout.navigation />
                <!-- Page Heading -->
                @if (isset($header))
                    <header class="bg-white dark:bg-zinc-800 shadow">
                        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                            {{ $header }}
                        </div>
                    </header>
                @endif
                <!-- Page Content -->
                <main>
                    {{ $slot }}
                </main>
            </div>
        </div>

        <x-toaster-hub />
    </body>
</html>
