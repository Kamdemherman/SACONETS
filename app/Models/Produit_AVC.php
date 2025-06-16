<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit_AVC extends Model
{
    use HasFactory;
    protected $fillable = ['libelle','libelle_en','short','short_en','description','description_en','image','cat_id'];
    
    public function categorie()
    {
        return $this->belongsTo('App\Models\CategorieShop','cat_id');
    }
}
