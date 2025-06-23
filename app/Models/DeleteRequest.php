<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeleteRequest extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function company()
    {
        return $this->belongsToMany(Company::class,'company_id');
    }
    public function user()
    {
        return $this->belongsToMany(User::class,'user_id');
    }

}
