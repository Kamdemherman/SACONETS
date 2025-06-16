<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategorieShop extends Model
{
    use HasFactory;
    protected $fillable = ['libelle','libelle_en','slug'];

    public function shop()
    {
        return $this->hasMany('App\Models\Shop');
    }

    public function turaya()
    {
        return $this->hasMany('App\Models\Produit_turaya');
    }
    
    public function sous_categorie()
    {
        return $this->hasMany('App\Models\SousCategorie');
    }
}
