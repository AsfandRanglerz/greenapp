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

    protected $fillable = ['name', 'phone', 'image', 'email', 'password', 'establishment_no', 'license_no', 'mohre_no'];

    public function documents()
    {
        return $this->hasMany(CompanyDocument::class, 'company_id');
    }

    public function user()
    {
        return $this->hasMany(User::class, 'company_id');
    }

    /** has many throufh for coounting the employee documents against company */
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
