<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FrontUser extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'profile2_id',
        'email',
        'address',
        'phone_no',
    ];
}
