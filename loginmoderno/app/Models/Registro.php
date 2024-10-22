<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registro extends Model
{
    use HasFactory;

    protected $fillable = [
        "titleDocument",
        "school",
        "nameProgram",
        'collaborators',
        'idCollaborators',
        'email'];
}
