<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    public function index() {
        $wishlists = Auth::user()->wishlists;
        return view('wishlist', compact('wishlists'));
    }
}
