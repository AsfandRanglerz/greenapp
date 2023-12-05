<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission_component extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
    public function permission()
    {
        return $this->belongsTo(Role::class,'permission_id');
    }
}
