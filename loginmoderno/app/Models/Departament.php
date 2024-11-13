<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Departament extends Model
{
    protected $fillable = [
        "id",
        "name",
        "id_country"
            ];

    public function municipality(){
        return $this->hasMany(Municipality::class,'id');
    }


    public function country(){
        return $this->belongsTo(Countries::class,'id_country');
    }
}
