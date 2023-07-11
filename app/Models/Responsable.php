<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Responsable extends Model
{
    use HasFactory;
    protected $fillable = ['nombre','dni','email','telefono',];

    public function establecimiento()
    {
        return $this->hasOne(Establecimiento::class);
    }

}
