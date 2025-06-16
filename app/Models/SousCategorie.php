<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SousCategorie extends Model
{
    use HasFactory;

    protected $fillable = ['libelle','libelle_en','cat_id','slug'];

    public function categorie()
    {
        return $this->belongsTo('App\Models\CategorieShop','cat_id');
    }

    public function produit()
    {
        return $this->hasMany('App\Models\Produit_turaya');
    }
}
