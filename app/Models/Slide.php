<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    use HasFactory;
    protected $table = 'slides';
    protected $fillable = [
        'slider_id',
        'slide_image',
        'slide_title',
        'slide_sub_title',
        'slide_details',
    ];
}
