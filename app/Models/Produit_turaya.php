<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Produit_turaya extends Model
{
    use HasFactory, Searchable;
    protected $fillable = ['libelle','libelle_en','short','short_en','caracteristique','description','description_en','image','cat_id','cat_name','sous_id','sous_name'];
    
    public function categorie()
    {
        return $this->belongsTo('App\Models\CategorieShop','cat_id');
    }

    public function sous_categorie()
    {
        return $this->belongsTo('App\Models\SousCategorie','sous_id');
    }

    public function documents()
    {
        return $this->hasMany('App\Models\ThurayaDocument');
    }

    public function Accessoires()
    {
        return $this->hasMany('App\Models\ThurayaAccessoire');
    }

    /**
     * Get the indexable data array for the model.
     *
     * @return array
     */
    public function toSearchableArray()
    {
       
        // Customize the data array...
 
        return [
            'libelle' => $this->libelle,
            'libelle_en' => $this->libelle_en,
        ];
    }
}
