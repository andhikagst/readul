<form method="GET" action="{{ route('user.books') }}" class="w-full">
    <div class="flex justify-center text-black w-full">
        <div class="border-1 w-full h-10 flex items-center gap-2 rounded-l-4xl pl-2 pr-2">
    
            <i class='bx bx-search' style=''></i> 
            <input type="text" id="search" name="search" placeholder="Search for books" class="outline-0 text-black w-full">
        </div>
        <button class="bg-white rounded-r-4xl p-2" type="submit">search</button>
    </div>
</form>