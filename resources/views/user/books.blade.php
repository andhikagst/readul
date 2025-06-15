<x-layouts.user-layout>
    <div class="pl-[5%] pr-[5%] flex flex-col gap-2">
      <h1 class="text-2xl font-semibold">
        {{ request('search') ? 'Search results for: ' . request('search') : 'All Books' }}
      </h1>
      @if ($books->isEmpty())
            <p class="text-red-500">Book not found.</p>
      @else
      <div class="flex gap-8 bg-gray-100 p-4">
        @foreach ($books as $book)
        <x-book-card
          :book="$book"
        ></x-book-card>
        @endforeach
      </div>
      @endif
    </div>
</x-layout>
