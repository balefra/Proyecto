<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Departament extends Model
{
    use HasFactory;
    protected $fillable = [
        "id",
        "name"
            ];

    public function municipality(){
        return $this->hasMany(Municipality::class,'id');
    }
}
