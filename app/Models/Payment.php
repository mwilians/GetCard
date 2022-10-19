<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $table = 'payment';

    protected $fillable = [
        'user_id',
        'status',
        'transaction_id',
        'order_id',
        'gross_amount',
        'payment_type',
        'payment_code',
        'pdf_url',

    ];
}