<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    // If you use timestamps, keep them. Otherwise adjust.
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    // If you store plain password (you shouldn't), hide it from arrays/json:
    protected $hidden = [
        'password',
    ];
}