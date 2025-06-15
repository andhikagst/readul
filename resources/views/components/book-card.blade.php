<a href="/books/{{ $book->slug }}">
    <div class="flex flex-col flex-shrink-0 max-w-[8rem] h-full">
        <img src="{{ asset($book->url_image) }}" alt="" class="min-w-[8rem] min-h-[12rem] rounded-2xl drop-shadow-xl">
        <ul class="flex flex-col h-full mt-3 justify-between">
            <div>
                <li class="text-lg font-semibold line-clamp-2">{{ $book->title }}</li>
                <li class="text-sm text-[#b4b3b3] line-clamp-1">{{ $book->author }}</li>
            </div>
            <div class="flex flex-col">
                <li class="text-sm flex gap-1 items-center line-clamp-1 mt-2">
                    <i class='bx bxs-star' style='color:#FBBC05'></i> 
                    <div>
                        {{ $book->rating }}
                    </div>
                </li>
            </div>
        </ul> 
    </div>
</a>