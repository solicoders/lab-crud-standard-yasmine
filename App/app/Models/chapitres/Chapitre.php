<?php

namespace App\Models\chapitres;

use App\Models\autoformations\AutoFormation;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Builder\Function_;

class Chapitre extends Model
{
    use HasFactory;
    protected $fillable = [
        'name' ,
          'description', 
          'date_debut',
          'date_de_fin'

    ];

    public Function chapitre(){
    return $this ->belongsTo(AutoFormation::class);
    }
}
