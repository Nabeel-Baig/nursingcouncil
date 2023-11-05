<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestDocument extends Model
{
    use HasFactory;
    protected $table = "request_documents";
    protected $fillable = ["subject", "detail", "user_id"];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
