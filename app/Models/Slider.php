<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;
    protected $table = 'sliders';
    protected $fillable = [
        'page_id',
        'page_slider_name',
        'page_slider',
        'slider_title',
    ];

    public function slides(){
        return $this->hasMany(Slide::class,'slider_id');
    }

    public function page(){
        return $this->belongsTo(Page::class,'page_id');
    }

}
