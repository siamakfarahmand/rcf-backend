<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscribe extends Model
{
    public function user()
    {
        return $this->belongsTo(related:User::class);
        
    }
    public function thread()
    {
        return $this->hasMany(related:Tread::class);
        
    }
}

