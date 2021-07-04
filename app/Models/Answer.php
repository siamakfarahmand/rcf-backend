<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    public function user()
    {
            return $this->belongsTo(related:User::class);       
        
    }
    public function thread()
    {
            return $this->belongsTo(related:Tread::class);       
        
    }
}
