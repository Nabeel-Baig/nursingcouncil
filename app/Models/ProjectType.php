<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectType extends Model
{

    use HasFactory;

    protected $table = 'project_categories';
    protected $fillable = [
        'type_name',
        'status',
    ];

    public function projects(){
        return $this->hasMany(Project::class,'project_cat_id');
    }
}
