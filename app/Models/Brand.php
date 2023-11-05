<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Brand extends Model
{
    use HasFactory;
    protected $fillable = [
        'brand_name',
        'brand_logo',
        'brand_email',
        'created_by',
        'updated_by',
    ];
    public function user()
    {
        return $this->hasMany(User::class,'brand_id');
    }
}
