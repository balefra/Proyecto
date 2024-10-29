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
        'collaborators',
        'idCollaborators',
        'email',
        'id_departament',
        'id_municipality'];

        public function registro()  {
            $this->belongsTo(Departament::class,'id_departament');
            $this->belongsTo(Municipality::class,'id_municipality');
        }

        //relacion uno a uno
        public function work(){
            return $this->hasOne(Work::class, 'registro_id','id');
        }
}
