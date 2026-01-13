<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PackageEnquiry extends Model
{
       protected $fillable = [
        'name',
        'email',
        'phone',
        'package',
        'message',
        'is_read',
    ];
}
