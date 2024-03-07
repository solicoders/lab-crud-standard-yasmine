<?php

namespace App\Models\autoformations;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Chapitres\Chapitre ;

class AutoFormation extends Model
{
    use HasFactory;

    public $table = 'autoformations';
    protected $fillable = [
          'name' ,
          'description', 
          'date_debut',
          'date_de_fin'
    ];
    public function Autoformation(){
        return $this ->hasMany(Chapitre::class);
    }
    
}
