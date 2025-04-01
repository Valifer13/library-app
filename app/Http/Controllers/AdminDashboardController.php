<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function bookManage()
    {
        return view('admin.book-manage');
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
