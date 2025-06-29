<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class role_user extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
    public function role()
    {
        return $this->belongsTo(Role::class,'role_id');
    }
}
