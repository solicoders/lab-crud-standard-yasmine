<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AutoFormation extends Model
{
    use HasFactory;
    protected $fillable = [
          'name' ,
          'description', 

    ];
    public function Chapitre(){
        return $this ->hasMany(Chapitre::class);
    }
}
