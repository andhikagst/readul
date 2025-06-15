<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Book;

class BookCard extends Component
{
    public Book $book;

    public function __construct(Book $book)
    {
        $this->book = $book;
    }

    public function render(): View|Closure|string
    {
        return view('components.book-card');
    }
}