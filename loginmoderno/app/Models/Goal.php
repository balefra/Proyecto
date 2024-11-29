<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Goal extends Model
{
    //
    use HasFactory;

    protected $fillable = [
        "general_Goal",
        "specific_Goal1",
        "specific_Goal1",
        'specific_Goal1',
        'specific_Goal1',
        'registro_id'];
        
    //relacion uno a uno 
    public function registro(){
        return $this->belongsTo("App\Model\Registro");
    }
}
