<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeadComment extends Model
{
    use HasFactory;
    protected $table = 'lead_comments';
    protected $fillable = [
        'user_id',
        'lead_id',
        'comments_data'
    ];

    // public function user()
    // {
    //     return $this->hasMany(User::class,'lead_id');
    // }

}
