<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable , HasRoles;
    protected $guarded = [];

    protected $fillable = ['name',
        'phone',
        'image',
        'email',
        'password',
        'dob',
        'emp_type',
        'carrier_objectives',
        'education_details',
        'experience',
        'license',
        'skills',
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
        'person_code',
        'position',
        'pob',
        'join_date',
        'marital_status',
        'residence_no',
        'insurance_no',
        'salary_detail',
        'salary',
    ];

    public function usercompany()
    {
        return $this->belongsTo('App\Models\Company',
            'company_id', 'id');
    }
    public function userdocument()
    {
        return $this->hasMany(UserDocument::class, 'user_id');
    }
    public function IndividualService()
    {
        return $this->hasMany(IndividualService::class,'user_id');
    }

    public function dependent()
    {
        return $this->hasMany(IndividualDependent::class,'user_id');
    }
    public function getAssignedPermission()
    {
        return $this->hasMany(Permission_component::class,'user_id');
    }

    public function receipts()
    {
        return $this->hasMany(Receipt::class);
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
