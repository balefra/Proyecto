<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Work;

class Registro extends Model
{
    use HasFactory;

    protected $fillable = [
        "titleDocument",
        "school",
        "nameProgram",
        'email',
        'id_departament',
        'id_municipality',
        'id_user'];

        public function departamento()  {
           return  $this->belongsTo(Departament::class,'id_departament');
       
        }

        public function municipio()  {
            return $this->belongsTo(Municipality::class,'id_municipality');
    }
        //relacion uno a uno
        public function work(){
            return $this->hasOne(Work::class, 'registro_id','id');
        }

        public function integrant(){
            return $this->hasMany(Integrant::class, 'id_registro','id');
        }

         //relacion uno a uno
         public function goal(){
            return $this->hasOne(Goal::class, 'id_registro','id');
        }



}
