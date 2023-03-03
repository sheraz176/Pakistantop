<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class religion_and_socity extends Model
{
    use HasFactory;
    protected  $table ='religion_and_socity';


    public function icon()
    {
        return $this->belongsTo(ReligionIcon::class, "icon_id", "id");
    }
}
