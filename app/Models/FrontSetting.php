<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FrontSetting extends Model
{
    use HasFactory;

    public $table = 'front_setting';

    protected $fillable = [
        'name',
        'title',
        'youtube_link',
        'fb_link',
        'twitter_link',
        'insta_link',
        'contact_number',
        'contact_email',
        'location',
        'logo',
        'favicon',
        'footer_info',
        'copyright_info',
    ];
}
