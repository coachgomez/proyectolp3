<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Responsable extends Model
{
    protected $fillable = ['nombre','dni','email','telefono',];

    public function establecimiento()
    {
    return $this->hasOne(Establecimiento::class);
    }

}
