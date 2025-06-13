<?php

namespace App\Livewire;

use App\Models\Book;
use Livewire\Attributes\Title;
use Livewire\Component;

class BookList extends Component
{
    public $term = '';

    public function delete(Book $book): void
    {
        $book->delete();
    }

    #[Title('Book List - Home')]
    public function render()
    {
        if ($this->term) {
            $books = Book::query()->where('title', 'like', "%{$this->term}%")->get();
        } else {
            $books = Book::all();
        }
        return view('livewire.book-list', [
            'books' => $books
        ]);
    }
}
