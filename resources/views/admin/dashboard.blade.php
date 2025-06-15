<x-layouts.admin-layout>
    <x-header :title="'Dashboard'"></x-header>
    
    <!-- Header dengan tombol export -->
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold">Books Management</h2>
        <div class="flex gap-3">
            <a href="{{ route('admin.export') }}" 
               class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-md flex items-center gap-2">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                          d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                    </path>
                </svg>
                Export PDF
            </a>
        </div>
    </div>

    <div class="flex w-full">
        <div class="overflow-x-auto w-full">
            <table class="min-w-full border border-gray-300">
                <thead>
                    <tr class="bg-gray-50">
                        <th class="border border-gray-300 px-3 py-2 text-left">ID</th>
                        <th class="border border-gray-300 px-4 py-2 text-left">Title</th>
                        <th class="border border-gray-300 px-4 py-2 text-left">Author</th>
                        <th class="border border-gray-300 px-4 py-2 text-left">Rating</th>
                        <th class="border border-gray-300 px-4 py-2 text-left">Created At</th>
                        <th class="border border-gray-300 px-4 py-2 text-left">Updated At</th>
                        <th class="border border-gray-300 px-4 py-2 text-left">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($books as $book)
                    <tr class="text-sm hover:bg-gray-50">
                        <td class="border border-gray-300 px-3 py-2">{{ $book->id }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $book->title }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $book->author }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $book->rating }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $book->created_at->format('d/m/Y H:i') }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $book->updated_at->format('d/m/Y H:i') }}</td>
                        <td class="border border-gray-300 px-4 py-2">
                            <div class="flex gap-2">
                                <a href="{{ route('admin.edit', ['book' => $book]) }}" 
                                   class="px-3 py-1 rounded-md text-white bg-blue-500 hover:bg-blue-600 text-xs">
                                   Edit
                                </a>
                                <form action="{{ route('admin.destroy', [$book->id]) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" 
                                            class="px-3 py-1 rounded-md text-white bg-red-500 hover:bg-red-600 text-xs"
                                            onclick="return confirm('Are you sure you want to delete this book?')">
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr> 
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-layouts.admin-layout>