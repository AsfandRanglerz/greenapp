<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Company extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $guarded = [];

    protected $fillable = ['name', 'phone', 'image', 'email', 'password', 'establishment_no',
        'establishment_issue_date',
        'establishment_expiry_date',
        'license_no',
        'license_issue_date',
        'license_expiry_date',
        'tenancy',
        'tenancy_issue_date',
        'tenancy_expiry_date',
        'e_channel_issue_date',
        'e_channel_expiry_date',
        'mohre_no',
        'po_box',
        'daman_police_number',
        'daman_customer_number',
        'other_insurance_policy_number'];

    public function documents()
    {
        return $this->hasMany(CompanyDocument::class, 'company_id');
    }

    public function user()
    {
        return $this->hasMany(User::class, 'company_id');
    }

    /** has many through for counting the employee documents against company */
    public function empDocument()
    {
        return $this->hasManyThrough(UserDocument::class, User::class);
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
