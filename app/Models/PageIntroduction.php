<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PageIntroduction extends Model
{
    use HasFactory;
    protected $fillable = [
        'page_id',
        'title',
        'sub_title',
        'detail',
        'link',
        'image',
    ];
    public function page(){
        return $this->belongsTo(Page::class,'page_id');
    }
}


