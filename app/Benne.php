<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Benne extends Model
{
    protected $fillable = ['nbenne','long','larg','haut','req'];

    public function transporteur(){
        return $this->belongsToMany(Transporteur::class);
    }

    public function hasAnyTransporteur(){
        return null !== $this->transporteur();
    }
}
