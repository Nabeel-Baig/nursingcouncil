<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;

    protected $table = 'cards';
    protected $fillable = [
        'page_id',
        'page_card_name',
        // 'page_slider',
        // 'slider_title',
    ];
    public function cardsslides(){
        return $this->hasMany(CardDetail::class,'card_id');
    }

    public function page(){
        return $this->belongsTo(Page::class,'page_id');
    }
}

