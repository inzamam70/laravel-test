<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;

    protected $fillable = [
        'uuid',
        'title',
        'path',
        'alt',
        'caption',
        'updated_by',
        'created_by',
    ];
}
