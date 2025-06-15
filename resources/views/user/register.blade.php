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
  <div class="w-full h-screen" style="background: url({{ asset('images/bg.jpg') }})">
    <div class="bg-black/60 w-full h-screen flex justify-center items-center">
      <div class="flex">
        <div class="relative bg-contain bg-center w-[20rem] h-[30rem]">
          <img src="{{ asset('images/cover.jpg') }}" 
          alt="Background" 
          class="absolute inset-0 w-full h-full object-cover">
            <div class="relative z-10 bg-black/60 h-full w-full flex flex-col justify-center text-white p-6">
              <p class="text-3xl shadow-md">
                Welcome to Readul
              </p>
              <p class="italic shadow-md">
                "The more that you read, the more things you will know. the more that you learn, the more places you'll go."
              </p>
              <p class="italic shadow-md">
                - Dr. Seuss
              </p>
            </div>
        </div>
        <div class="flex flex-col items-center justify-center bg-white p-6">
          <form action="{{ route('user.register.submit') }}" method="POST" class="flex flex-col gap-4">
            @csrf
            <input name="name" placeholder="username" type="text" class="w-full border-1 rounded-md p-2">
            <input name="email" placeholder="you@example.com" type="text" class="w-full border-1 rounded-md p-2">
            <input name="password" placeholder="password" type="password" class="w-full border-1 rounded-md p-2">
            <input name="password_confirmation" placeholder="confirm password" type="password" class="w-full border-1 rounded-md p-2">
            <div>
              <x-form.submit-btn>Sign Up</x-form.submit-btn>
              <p>
                Have an account?
                <a href="{{ route('user.login') }}" class="underline">Sign In</a>
              </p>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
</html>