<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\{Model,SoftDeletes};

class Nota extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function ramo(){
        return $this->belongsTo(Ramo::class);
    }
}
