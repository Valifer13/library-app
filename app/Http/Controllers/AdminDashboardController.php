<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function bookManage()
    {
        $books = Book::latest();

        if (request('search')) {
            $books->where('title', 'like', '%' . request('search') . '%');
        }
        
        return view('admin.books', ['books' => $books->get()]);
    }

    public function loansList()
    {
        return view('admin.loans-list');
    }

    public function notification()
    {
        return view('admin.notification');
    }
}
