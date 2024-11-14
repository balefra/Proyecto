<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Integrant extends Model
{
    //
    use HasFactory;

    protected $fillable = [
        "nombre",
        "identificacion",
        "id_registro",];
        


        public function integrants(){
            return $this->hasMany(Integrant::class,'id');
        }
    
}
