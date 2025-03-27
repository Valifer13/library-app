<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

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

    public function book(): BelongsTo
    {
        return $this->belongsTo(Book::class);
    }
    
    public function user(): Belongsto
    {
        return $this->belongsTo(User::class);
    }

    public function admin(): BelongsTo
    {
        return $this->belongsTo(Admin::class);
    }

    public function fine(): HasOne 
    {
        return $this->hasOne(Fine::class);
    }
}
