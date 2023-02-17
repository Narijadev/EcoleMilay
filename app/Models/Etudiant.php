<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'etudiants';
    /**
     *
     * @var array
     */
    protected $fillable = [ 
        'nom', 
        'prenom',
        'datedenaissance',
        'sexe',
        'classe',
        'parentId',
    ];

    
}
