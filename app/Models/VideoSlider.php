<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VideoSlider extends Model
{
    protected $fillable = [
        'title',
        'video_url',
        'type',
    ];
}
