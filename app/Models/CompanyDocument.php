<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyDocument extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function companies(){
        return $this->belongsTo('App\Models\Company', 'company_id', 'id');
     }
}
