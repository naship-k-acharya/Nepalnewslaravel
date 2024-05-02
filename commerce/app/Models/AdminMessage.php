<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminMessage extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'user_type',
        'title',
        'body',
        'status'
    ];
}
