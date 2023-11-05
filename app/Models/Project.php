<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $table = 'projects';
    protected $fillable = [
        'project_name',
        'project_summary',
        'project_files',
        'lead_id',
        'project_cat_id',
        'status',
        'deadline_time',
        'created_by',
        'updated_by',
    ];

    public function lead()
    {
        return $this->belongsTo(User::class,'lead_id');
    }

    // public function getDeadlineTimeAttribute()
    // {
    //     $this->attributes['deadline_time']->forma('Y-m-D');
    // }

    public function type(){
        return $this->belongsTo(ProjectType::class,'project_cat_id');
    }
     public function getDeadlineTimeAttribute($value)
    {

        return Carbon::parse($value)->format('d-m-y');
    //    return $value->date("d-m-Y",strtotime($value));


    //    $this->value->date("d-m-Y",strtotime($value));

    }
}
