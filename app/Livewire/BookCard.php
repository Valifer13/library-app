<?php

namespace App\Livewire;

use App\Models\Book;
use Livewire\Component;
use phpDocumentor\Reflection\Types\Boolean;

class BookCard extends Component
{
    public $book;
    public $state;

    public function mount(Book $book, bool $state = false)
    {
        $this->book = $book;
        $this->state = $state;
    }

    public function render()
    {
        return view('livewire.book-card');
    }
}
