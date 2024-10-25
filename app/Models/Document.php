<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    // Liste des attributs qui peuvent être remplis via l'assignation de masse
    protected $fillable = [
        'title',
        'description',
        'file_path',
        'user_id'
    ];
}
