<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Telecom extends Model
{
    use HasFactory;
    protected $fillable = ['libelle','libelle_en','short','short_en','description','description_en','lien','image'];

    public function marques()
    {
        return $this->hasMany('App\Models\Marque');
    }
}
