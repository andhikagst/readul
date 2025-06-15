<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use App\Models\Book;
use Barryvdh\DomPDF\Facade\Pdf;

class AdminController extends Controller
{
	public function index()
	{
		$query = Book::query();
    
    if (request('search')) {   
        $query->where('title','like','%'. request('search') .'%');
    }

    $books = $query->get();
		return view('admin.dashboard', ['books' => $books]);
	}

	 public function exportPDF()
    {
        $books = Book::all();
        
        $pdf = Pdf::loadView('admin.pdf', compact('books'));
        
        // Set ukuran kertas dan orientasi
        $pdf->setPaper('A4', 'landscape'); // atau 'portrait'
        
        return $pdf->download('books-report-' . date('Y-m-d') . '.pdf');
    }

	public function create()
	{
		return view('admin.create');
	}

	public function store(Request $request)
	{
		$data = $request->validate([
			'title' => 'required',
			'author' => 'required',
			'genre' => 'required',
			'rating' => 'required|numeric|between:1,5',
			'synopsis' => 'required',
			'image' => 'image|mimes:jpg,jpeg,png|max:2048',
		]);


		$data['slug'] = Str::slug($data['title']);

		if ($request->hasFile('image')) {
			$filename = $request->file('image')->getClientOriginalName();
			$request->file('image')->move(public_path('book-covers'), $filename);
			$data['url_image'] = 'book-covers/' . $filename;
		};

		Book::create($data);

		return redirect(route('admin.dashboard'));
	}

	public function edit(Book $book)
	{
		return view('admin.edit', ['book' => $book]);
	}

	public function update(Book $book, Request $request)
	{
			$data = $request->validate([
					'title' => 'required',
					'author' => 'required',
					'genre' => 'required',
					'rating' => 'required|numeric|between:1,5',
					'synopsis' => 'required',
			]);

			$data['updated_at'] = time();

			$book->update($data);
			
			// Kembali ke halaman yang sama dengan pesan success
			return redirect()->back()->with('success', 'Book Updated.');
	}

	public function destroy($id) {
		$book = Book::findOrFail($id);
		
		if ($book->url_image && file_exists(public_path($book->url_image))) {
			unlink(public_path($book->url_image));
    }

		$book->delete();
		
		return redirect()->route('admin.dashboard')->with('success', 'Buku berhasil dihapus.');
	}
}