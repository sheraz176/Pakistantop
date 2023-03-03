<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    use HasFactory;

    public function confession()
    {
        return $this->belongsTo(religion_and_socity::class, "confession_type", "id");
    }

   
}
