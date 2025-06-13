<?php

namespace App\Livewire;

use App\Models\Book;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;

class CreateBook extends Component
{
    #[Validate('string|required|min:3|max:50')]
    public $title;

    #[Validate('string|required|min:3|max:50')]
    public $author;

    #[Validate('integer|required|min:1|max:10')]
    public $rating;

    public function save()
    {
        $this->validate();

        Book::query()->create([
            'title' => $this->title,
            'author' => $this->author,
            'rating' => $this->rating,
        ]);

        $this->redirect('/', navigate: true);
    }

    #[Title('Create Book')]
    public function render()
    {
        return view('livewire.create-book');
    }
}
