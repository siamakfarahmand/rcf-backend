<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class channel extends Model
{
    public function treads()
    {
        return $this->hasMany(related:Tread::class);
    }
}
