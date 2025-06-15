<x-layouts.user-layout>
  {{-- {{ dd(($book->rating)%1.0) }} --}}
    <div class="flex w-full pl-[15%] pr-[15%] mt-12 gap-8 mb-11 h-screen">
      <div class="flex flex-col flex-1/5 gap-4">
        <div class="flex flex-col gap-1">
          <img src="{{ asset($book->url_image) }}" class="w-full h-auto rounded-2xl drop-shadow-xl">
          <div class="flex text-3xl items-center gap-1">
            <div class="flex">
              @for ($i=0; $i < 5; $i++)
              @if($book->rating > 0 && $i < $book->rating)
                @if (($book->rating - $i) > 0 && ($book->rating - $i) < 1)
                  <i class='bx bxs-star-half' style='color:#FBBC05'></i> 
                @else
                  <i class='bx bxs-star' style='color:#FBBC05'></i>
                @endif
              @else
                <i class='bx  bx-star' style='color:#FBBC05'></i> 
              @endif
              @endfor
            </div>
            <p class="flex items-center justify-center text-2xl">
              {{ $book->rating }}
            </p>
          </div>
          <div class="flex items-center text-xl text-[#878787]">
            Genre: {{ $book->genre }}
          </div>
        </div>

        <form action="" class="flex flex-col gap-2">
          <x-form.submit-btn>Buy book</x-form.submit-btn>
          <x-form.submit-btn>Wishlist</x-form.submit-btn>
        </form>
      </div>

      <div class="flex flex-col flex-3/5">
        <div class="text-5xl font-semibold">
          {{ $book->title }}
        </div>
        <div class="text-xl">
          {{ $book->author }}
        </div>
        <div class="pt-4 text-justify whitespace-pre-line text-base leading-relaxed">
          {{ $book->synopsis}}
        </div>
      </div>
      
      <div class="flex flex-col flex-1/5 border-l pl-2 items-center">
        <div class="text-xl">
          Suggestion for you
        </div>
        <div class="flex flex-col mt-4 gap-2 overflow-y-scroll">
          @foreach ($allBooks as $eachBook)
              <x-book-card :book="$eachBook"></x-book-card>
          @endforeach
        </div>
      </div>
    </div>
</x-layout>
