<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'customer_id',
        'note_header',
        'note',
        'related_time',
        'created_at',
        'updated_at',
    ];
}
