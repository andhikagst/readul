<x-layouts.admin-layout>
	<x-header :title="'Post'"></x-header>
	<div>
		@if ($errors->any())
					@foreach ($errors->all() as $error)
							<div class="text-red-600">
									{{ $error }}
							</div>
					@endforeach
			@endif
	</div>
	<div class="max-w-240">
			<form method="post" action="{{ Route('admin.store') }}" enctype="multipart/form-data">
					@csrf
					<div class="flex flex-col gap-6">
							<div class="flex flex-col gap-3">
									<x-form.input-text label="title" name="title" ph="title" />
									<x-form.input-text label="author" name="author" ph="author" />
									<x-form.input-text label="genres" name="genre" ph="genre" />
									<x-form.input-text label="rating" name="rating" ph="rating" />
									<div class="flex flex-col gap-1">
											<div>
													<label for="synopsis">Synopsis</label>
											</div>
											<div>
													<textarea id="synopsis" name="synopsis" rows="10" class="border-1 p-1 rounded-md w-240 flex flex-wrap"></textarea>
											</div>
									</div>
									<x-form.input-file label="book cover" name="image" />
							</div>
							<x-form.submit-btn>submit</x-form.submit-btn>
					</div>
			</form>
	</div>
</x-layouts.admin-layouts>
