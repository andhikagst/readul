<div class="fixed top-0 left-0 right-0 z-49 pl-[13%] pr-[2%] flex gap-8 pb-4 pt-4 justify-between items-center border-1 bg-white">
    <div class="flex flex-nowrap text-4xl font-semibold">{{ $title }}</div>
    <form method="GET" class="w-full">
    <div class="flex justify-center text-black w-full">
        <div class="border-1 w-full h-10 flex items-center gap-2 rounded-l-4xl pl-2 pr-2">
            <i class='bx bx-search' style=''></i> 
            <input type="text" id="search" name="search" placeholder="Search for books" class="outline-0 text-black w-full">
        </div>
        <button class="bg-white rounded-r-4xl p-2" type="submit">search</button>
    </div>
</form>
    <li class="flex items-center gap-1 text-xl">
        <i class='bx bx-user-circle text-3xl' style='color:#000000'></i> 
        <a href="">user</a>
    </li>
</div>