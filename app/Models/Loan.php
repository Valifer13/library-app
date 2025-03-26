<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    /** @use HasFactory<\Database\Factories\LoanFactory> */
    use HasFactory;

    protected $fillable = [
        'book_id',
        'user_id',
        'admin_id',
        'borrow_date',
        'due_date',
        'return_date',
        'status'
    ];
}
