<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [

        'brand_id',
        'user_id',
        'lead_assigned_id',
        'first_name',
        'middle_name',
        'last_name',
        'email',
        'password',
        'dob',
        'avatar',
        'phone',
        'company',
        'lead_website',
        'address',
        'lead_country',
        'lead_state',
        'lead_city',
        'lead_company',
        'gender',
        'theme',
        'lead_stage',
        'is_authenticate',
        'created_at',
        'updated_at',
        'deleted_at',
        'remember_token',
        'email_verified_at',
        'two_factor_code',
        'two_factor_expires_at',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = Hash::make($value);
    }
    protected $hidden = [
        'password',
        'remember_token',
        'pivot',
    ];



    protected $dates = [
        'updated_at',
        'created_at',
        'deleted_at',
        'email_verified_at',
        'two_factor_expires_at',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function projects()
    {
        return $this->hasMany(Project::class, 'lead_id');
    }


    public function brand()
    {
        return $this->belongsTo(Brand::class, 'brand_id');
    }

    final public function funds(): hasMany
    {
        return $this->hasMany(Fund::class);
    }
    // for sub leads
    final public function leads(): hasMany
    {
        return $this->hasMany(User::class, 'user_id');
    }

    //for main lead name

    public function lead()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // public function role()
    // {
    //     return $this->belongsTo(Role::class,'user_id');
    // }
    public function role()
    {
        return $this->hasOne(UserRole::class,'user_id','id');
    }

    final public function orders(): hasMany
    {
        return $this->hasMany(Order::class);
    }

    public function generateTwoFactorCode()
    {
        $this->timestamps = false;
        $this->two_factor_code = rand(100000, 999999);
        $this->two_factor_expires_at = now()->addMinutes(10);
        $this->save();
    }

    public function resetTwoFactorCode()
    {
        $this->timestamps = false;
        $this->two_factor_code = null;
        $this->two_factor_expires_at = null;
        $this->save();
    }

    public function leadsAssigned()
    {
        return $this->hasMany(User::class, 'lead_assigned_id', 'id');
    }
    // public function leadAssigned()
    // {
    //     return $this->hasOne(User::class,'lead_assigned_id');
    // }
    public function leadAssigned()
    {
        return $this->hasOne(User::class, 'id', 'lead_assigned_id');
    }
}
