<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PagesContent extends Model
{
    use HasFactory;
    protected $fillable = [
        'page_id',
        'page_content'
    ];

    public function page(){
        return $this->belongsTo(Page::class,'page_id');
    }
}
