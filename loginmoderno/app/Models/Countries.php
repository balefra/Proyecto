<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Countries extends Model
{
   
    protected $fillable = [
        "id",
        "name"
            ];

    public function departament(){
        return $this->hasMany(Departament::class,'id');
    }
}
