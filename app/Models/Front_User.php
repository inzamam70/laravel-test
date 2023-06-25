<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Front_User extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'profile2_id',
        'email',
        'address',
        'phone_no',
    ];
   
}
