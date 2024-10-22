<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Municipality extends Model
{
    //
    protected $fillable = [
        "id",
        "name",
        "id_departament"];

    public function municipios(){
        return $this->belongsTo(Departament::class,'id_departament');
    }
}
