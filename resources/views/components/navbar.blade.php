<div class="fixed top-0 left-0 right-0 z-50 flex pl-[5%] pr-[5%] gap-8 pb-4 pt-4 justify-between items-center bg-gradient-to-r from-[#076191] to-[#11A3F2] text-[#FFF9F9]">
    <a href="{{ route('user.home') }}">
        <div class="flex text-4xl font-bold">Readul</div>
    </a>
    <x-search-bar></x-search-bar>
    <div class="flex list-none gap-6 text-[1rem] items-center">
        <li>
            <a href="/books">Books</a>
        </li>
        <li>
            <a href="">Wishlist</a>
        </li>
        <li>
            <a href="">Category</a>
        </li>
        <li>
            <a href="{{ route('user.home') }}">Home</a>
        </li>
        <li class="flex items-center gap-1">
            <!-- Cek jika user sudah login -->
            @if(Auth::guard('user')->check())
            <li x-data="{ open: false }" class="relative flex items-center gap-1 cursor-pointer">
                <div @click="open = !open" class="flex items-center gap-2">
                    <i class='bx bx-user-circle text-4xl' style='color:#FFF9F9'></i>
                    <span>{{ Auth::guard('user')->user()->name }}</span>
                </div>

                <!-- Popup -->
                <div x-show="open" @click.away="open = false" 
                    x-transition 
                    class="absolute right-0 mt-40 w-48 bg-white rounded-md shadow-lg p-4 text-black z-50">
                    <p class="font-semibold mb-2">{{ Auth::guard('user')->user()->name }}</p>
                    <a href="/profile" class="block hover:text-blue-500">View Profile</a>
                    <form method="POST" action="{{ route('user.logout') }}">
                        @csrf
                        <button type="submit" class="mt-2 text-red-500 hover:underline">Logout</button>
                    </form>
                </div>
            </li>
            @else
                <i class='bx bx-user-circle text-4xl' style='color:#FFF9F9'></i>
                <a href="{{ route('user.login') }}">Login</a>
            @endif
        </li>
    </div>
</div>