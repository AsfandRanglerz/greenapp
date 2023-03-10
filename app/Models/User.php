<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $guarded = [];

    protected $fillable = ['name',
        'phone',
        'image',
        'email',
        'password',
        'dob',
        'emp_type',
        'nationality',
        'religion',
        'company_id',
        'gender',
        'father_name',
        'mother_name',
        'passport_number',
        'unified_number',
        'emirate_id_number',
        'work_permit_number',
        'person_code'];

    public function usercompany()
    {
        return $this->belongsTo('App\Models\Company',
            'company_id', 'id');
    }
    public function userdocument()
    {
        return $this->hasMany(UserDocument::class, 'user_id');
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

}
