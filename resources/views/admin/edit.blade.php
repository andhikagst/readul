<x-layouts.admin-layout>
  <x-header :title="'Edit'"></x-header>
  <div>
    @if($errors->any())
    @foreach ($errors->all() as $error)
        <div class="text-red-600">
            {{ $error }}
        </div>
    @endforeach
    @endif
  </div>
  <div>
<form method="POST" action="{{ route('admin.update', ['book' => $book]) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    
    <div class="flex flex-col gap-6">
        <div class="flex flex-col gap-3">
            <x-form.input-text label="title" name="title" ph="title" value="{{ $book->title }}"/>
            <x-form.input-text label="author" name="author" ph="author" value="{{ $book->author }}"/>
            <x-form.input-text label="genre" name="genre" ph="genre" value="{{ $book->genre }}"/>
            <x-form.input-text label="rating" name="rating" ph="rating" value="{{ $book->rating }}"/>
            <div class="flex flex-col gap-1">
                <div>
                    <label for="synopsis">Synopsis</label>
                </div>
                <div>
                    <textarea id="synopsis" name="synopsis" rows="10" class="border-1 p-1 rounded-md w-240 flex flex-wrap">{{ $book->synopsis }}</textarea>
                </div>
            </div>
        </div>
        <x-form.submit-btn>submit</x-form.submit-btn>
    </div>
</form>
  </div>
</x-layouts.admin-layout>