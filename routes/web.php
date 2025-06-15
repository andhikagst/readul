<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AuthController as AdminAuth;
use App\Http\Controllers\User\AuthController as UserAuth;
use Illuminate\Support\Facades\Route;
use App\Models\Book;
use App\Http\Middleware\AdminMiddleware;

// default route
Route::get('/', function () {
    $books = Book::all();

    return view('user.home', ['books' => $books]);
})->name('user.home');

Route::get('/books', function () {
    $query = Book::query();
    
    if (request('search')) {   
        $query->where('title','like','%'. request('search') .'%');
    }

    $books = $query->get();

    return view('user.books', ['books' => $books]);
})->name('user.books');

Route::get('/books/{book:slug}', function (Book $book) {
    $books = Book::where('title', '!=', $book->title)->get();

    return view('user.book', ['book' => $book, 'allBooks' => $books]);
});

Route::get('/login', function () {
    return view('user.login');
})->name('user.login');

Route::post('/login', [UserAuth::class, 'login'])->name('user.login.submit');

Route::get('/register', function () {
    return view('user.register');
})->name('user.register');

Route::post('/register', [UserAuth::class, 'register'])->name('user.register.submit');

Route::post('/', [UserAuth::class, 'logout'])->name('user.logout');

// Admin Routes
Route::get('admin', function (Book $book) {
    return redirect('admin/dashboard');
});

Route::get('admin/login', [AdminAuth::class, 'showLoginForm'])
    ->name('admin.login')
    ->middleware('guest:admin');

Route::post('admin/login', [AdminAuth::class, 'login'])
    ->name('admin.login.submit')
    ->middleware('guest:admin');

Route::middleware([AdminMiddleware::class])->prefix('admin')->name('admin.')->group(function() {
    //logout
    Route::post('logout', [AdminAuth::class, 'logout'])
        ->name('logout');

    //read
    Route::get('dashboard', [AdminController::class, 'index'])
        ->name('dashboard');

    Route::get('export', [AdminController::class, 'exportPDF'])
    ->name('export');

    //update
    Route::get('dashboard/{book:slug}/edit', [AdminController::class, 'edit'])
        ->name('edit');
    Route::put('dashboard/{book:slug}/edit', [AdminController::class, 'update'])
        ->name('update');

    //create
    Route::get('create', [AdminController::class, 'create'])
        ->name('create');
    Route::post('create', [AdminController::class, 'store'])
        ->name('store');
        
    //delete
    Route::delete('dashboard/{id}', [AdminController::class, 'destroy'])
        ->name('destroy');
});
