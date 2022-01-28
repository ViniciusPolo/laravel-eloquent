<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;

    protected $fillable = [
        'invoice',
        'instalment',
        'value',
        'client_id',
        'due_date',
        'payment_date'
    ];
}
