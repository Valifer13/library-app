<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('dashboard', compact('books'));
    }

    public function wishlist()
    {
        $wishlists = Auth::user()->wishlists;
        return view('wishlist', compact('wishlists'));
    }
}
