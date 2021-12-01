<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Transporteur extends Model
{

    protected $fillable = ['nom','tel','cin','mat','zone','matricule','type','garntie','montant','rq','status','contrat'];
   

    public function bennes(){
        return $this->belongsToMany(Benne::class);
    }

    public function assignBenne($benne){
        $this->bennes()->attach($benne);
    }
}
