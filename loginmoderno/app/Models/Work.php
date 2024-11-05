<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    //
    use HasFactory;

    protected $fillable = [
        "name_reality",
        "descrip_reality",
        "name_enfoque",
        'type_investigation',
        'registro_id',];
        
    //relacion uno a uno 
    public function registro(){
        return $this->belongsTo("App\Model\Registro");
    }
}
