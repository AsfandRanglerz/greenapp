<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminNotification extends Model
{
    use HasFactory;
    protected $guarded  = [];
    public function company()
    {
        return $this->belongsTo(Company::class,'company_id','id');
    }
    public function user()
    {
        return $this->belongsTo(User::class,'employee_id','id');
    }
}
