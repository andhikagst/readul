<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="//unpkg.com/alpinejs" defer></script>
    @vite('resources/js/app.js')
    @vite('resources/css/app.css')
</head>
<body class="font-poppins">
    <div class="flex flex-col gap-6">
        <x-navbar />
        
        <main class="pt-22">
            {{ $slot }}
        </main>
    </div>
</body>
</html>