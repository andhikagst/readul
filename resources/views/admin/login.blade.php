<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/js/app.js')
    @vite('resources/css/app.css')
</head>
<body>
    <div class="relative h-screen flex w-full"
    style="background-image: url('{{ asset('images/bg.jpg') }}')">
    <div class="absolute inset-0 bg-black/50 flex justify-center items-center">
        <div class=" flex flex-col border-1 p-4 gap-4 items-center bg-white rounded-2xl">
            <div class="text-xl font-semibold">
                Admin Login
            </div>
            <form id="loginForm" data-redirect="{{ route('admin.dashboard') }}" action="{{ route('admin.login.submit') }}" method="POST" class="flex flex-col gap-6 text-lg">
                @csrf
                <div class="flex flex-col gap-2">
                    <x-form.input-text
                    type="email"
                    id="email"
                    label="email"
                    name="email"
                    ph="example@email.com"
                    ></x-form.input-text>
                    <x-form.input-text
                    id="password"
                    type="password"
                    label="password"
                    name="password"
                    ></x-form.input-text>                  
                    <div id="loginError" class="text-red-500 text-sm hidden"></div>
                </div>
                <x-form.submit-btn>Login</x-form.submit-btn>
            </form>
        </div>
    </div>
    </div>
</body>
</html>