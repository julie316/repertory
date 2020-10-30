<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = ['nom','prenom','tel','email','entreprise','poste','pays','ville'];
    public function getPaysAttribute($attributes){
        return $this->getPaysOptions()[$attributes];
    }

    public function getPaysOptions(){
        return [
            '1'=>'Allemagne',
            '2'=>'Bulgarie',
            '3'=>'Cameroun',
            '4'=>'Danemark',
            '5'=>'Ethiopie',
            '6'=>'France'
        ];
    }
}
