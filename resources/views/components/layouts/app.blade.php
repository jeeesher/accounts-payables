<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>
        @vite('resources/css/app.css')

        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="https://cdn.jsdelivr.net/npm/pikaday/pikaday.js"></script>

        
    </head>
    <body>
        @include ('livewire.accounting.accounting-navigation')
        {{ $slot }}

    </body>

    <script>
        function confirmAddPayable() {
            return confirm('Are you sure you want to add this payable?\nThis action cannot be undone. This will permanently add the payable and its data in our records.');
        }

        function confirmDeletePayable() {
            return confirm('Are you sure you want to delete this payable?\nThis action cannot be undone. This will permanently delete the payable and its data in our records.');
        }
    </script>
</html>
