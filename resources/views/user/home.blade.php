<x-layouts.user-layout>
    <div class="flex flex-col gap-2">
        <div class="pl-[5%]">
            <div class="relative text-[#FFF9F9] flex flex-col gap-4 p-6 rounded-l-[2.5rem] bg-gradient-to-r from-[#076191] to-[#11A3F2]">
                <div class="text-2xl">
                    Today's Pick
                </div>
                <div class="relative">
                    <div id="book-container" class="flex gap-8 overflow-x-scroll hide-scrollbar">
                        @foreach ($books as $book)
                        <x-book-card
                        :book="$book"
                        ></x-book-card>
                        @endforeach
                    </div>
        
                    <div id="scroll-gradient-l" class="hidden absolute top-0 left-0 h-full w-48 bg-gradient-to-r from-[#076191] to-100%"></div>
                    <div id="scroll-gradient-r" class="absolute top-0 right-0 h-full w-48 bg-gradient-to-r from-0% to-[#11A3F2]"></div>
                </div>
        
                <div id="scroll-left" class="hidden absolute left-6 top-[50%] translate-y-[-50%]">
                    <button id="scroll-left-btn" class="flex w-12 h-12 rounded-full items-center justify-center bg-[#fff7f7] hover:cursor-pointer">
                         <i class='bx bx-chevron-left' style='color:#11A3F2 ; font-size: 36px;'></i> 
                    </button>
                </div>
        
                <div id="scroll-right" class="absolute right-6 top-[50%] translate-y-[-50%]">
                    <button id="scroll-right-btn" class="flex w-12 h-12 rounded-full items-center justify-center bg-[#fff7f7] hover:cursor-pointer">
                         <i class='bx bx-chevron-right' style='color:#11A3F2 ; font-size: 36px;'></i> 
                    </button>
                </div>
            </div>
        </div>
        
        <div class="pl-[5%] pr-[5%]">
            <div class="flex flex-col gap-4 rounded-4xl w-full p-6">
                <h1 class="text-2xl">Recently added</h1>
                <div class="flex gap-8 flex-wrap">

                    @foreach ($books as $book)
                    <x-book-card
                    :book="$book"
                    ></x-book-card>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-layout>
