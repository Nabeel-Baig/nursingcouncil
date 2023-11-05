<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DevelopmentStatus extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'role_id',
        'status',
        'created_by',
        'updated_by',
    ];

    public function designation()
    {
        return $this->belongsTo(Role::class,'role_id');
    }
}
