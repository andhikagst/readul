<div class="fixed top-0 left-0 bottom-0 z-50 flex flex-col gap-8 p-6 bg-gradient-to-b from-[#076191] to-[#11A3F2] text-[#FFF9F9]">
    <div class="flex text-4xl font-bold">Readul</div>
    <div class="h-full flex flex-col justify-between">
        <div class="flex flex-col list-none gap-4 text-lg">
            <li>
                <a href="/admin/dashboard">Dashboard</a>
            </li>
            <li>
                <a href="">Category</a>
            </li>
            <li>
                <a href="">Collection</a>
            </li>
            <li>
                <a href="{{ route('admin.create') }}">Add post</a>
            </li>
        </div>
    
        <div class="flex items-center gap-2 text-xl">
            <!-- Logout Form with CSRF -->
            <form method="POST" action="{{ route('admin.logout') }}" class="w-full">
                @csrf
                <button type="submit" 
                class="text-[#FFF9F9] hover:text-gray-200 transition-colors duration-200 text-xl hover:cursor-pointer flex gap-1 items-center"
                onclick="event.preventDefault(); this.closest('form').submit();">
                <i class='bx bx-arrow-to-right text-3xl' style='color:#FFF7F7'></i> 
                    Logout
                </button>
            </form>
        </div>
    </div>
</div>