<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\{Model,SoftDeletes};

class Ramo extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function nota(){
        return $this->hasMany(Nota::class);
    }
}
