<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    public function channel()
    {
        return $this->belongsTo(related:Channel::class);

    }
    public function user()
    {
        return $this->belongsTo(related:User::class);
        
    }
    public function answers()
    {
        return $this->hasMany(related:Answer::class);
        
    }
}
