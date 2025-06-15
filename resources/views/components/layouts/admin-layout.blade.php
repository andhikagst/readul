<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/js/app.js')
    @vite('resources/css/app.css')
</head>
<body class="font-poppins w-full">
    <div class="flex gap-6">
        <x-sidebar></x-sidebar>
        
        <div class="relative flex flex-col gap-6 pl-[13%] pr-[2%] w-full">
            <main class="pt-22 pb-11 w-full">
                {{ $slot }}
            </main>
        </div>
    </div>
</body>
</html>