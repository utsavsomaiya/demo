<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hey there!</title>

    @livewireStyles
    @vite('resources/js/app.js')
</head>

<body x-data>
    <nav class="bg-gray-800 p-4">
        <ul class="flex space-x-4">
            <li>
                <a wire:navigate href="{{ route('demo1') }}" class="text-white hover:text-gray-300">Home</a>
            </li>
            <li>
                <a wire:navigate href="{{ route('demo2') }}" class="text-white hover:text-gray-300">About</a>
            </li>
            <li>
                <a wire:navigate href="{{ route('demo3') }}" class="text-white hover:text-gray-300">Contact</a>
            </li>
        </ul>
    </nav>

    {{ $slot }}

    @livewireScriptConfig
</body>
</html>
