<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>
        @vite('resources/css/app.css')
        @vite('resources/js/app.js')

        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="https://cdn.jsdelivr.net/npm/pikaday/pikaday.js"></script>
        
    </head>
    <body>
        @include ('livewire.accounting.accounting-navigation')
        {{ $slot }}

        <script src="{{ asset('resources/js/app.js') }}"></script>  
        @stack('scripts')
    </body>

    <script>
        function confirmAddPayable() {
            return confirm('Are you sure you want to add this payable?\nThis action cannot be undone. This will permanently add the payable and its data in our records.');
        }

        function confirmDeletePayable() {
            return confirm('Are you sure you want to delete this payable?\nThis action cannot be undone. This will permanently delete the payable and its data in our records.');
        }

        function confirmSavePayable() {
            return confirm('Are you sure you want to save this payable changes?\nThis action cannot be undone. This will permanently edit the payable and replace the data in our records.');
        }

        function confirmAddTrack() {
            return confirm('Are you sure you want to add this tracking log?\nThis action cannot be undone. This will permanently add the tracking log and its data in our records.');
        }

        function confirmDeleteTrack() {
            return confirm('Are you sure you want to delete this tracking log?\nThis action cannot be undone. This will permanently delete the payable track and remove the data from our records.');
        }

        function confirmSaveTrack() {
            return confirm('Are you sure you want to update this tracking log?\nThis action cannot be undone. This will permanently edit the tracking log and replace the data in our records.');
        }

        function confirmDeleteFIle() {
            return confirm('Are you sure you want to delete this file?\nThis action cannot be undone. This will permanently delete the file and remove the data from our records.');
        }

        function confirmDeleteFolder() {
            return confirm('Are you sure you want to delete this folder?\nThis action cannot be undone. This will permanently delete the folder and remove the data from our records.');
        }


    </script>
</html>
