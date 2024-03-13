<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Livewire Playground' }}</title>
        
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="bg-slate-800">
        <div class="flex min-h-screen">
            <div class="w-72 flex-col px-4 py-2">
                <ul>
                    <li><a class="text-slate-400 hover:text-white {{request()->routeIs('default') ? 'font-semibold text-white' : ''}}" href="/" wire:navigate>Home</a></li>
                    <li><a class="text-slate-400 hover:text-white {{request()->routeIs('users') ? 'font-semibold text-white' : ''}}" href="/users" wire:navigate>Users</a></li>
                </ul>
            </div>
            <div class="bg-white flex-1 p-4">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
