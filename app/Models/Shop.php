<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Shop extends Model
{
    use HasFactory, Searchable;
    protected $fillable = ['titre','titre_en','description','description_en','prix','ancien_prix','qte_min','dates','cat_id','image','image2','image3','stock','nb_like'];

    public function categorie()
    {
        return $this->belongsTo('App\Models\CategorieShop','cat_id');
    }

    /**
     * Get all of the comments for the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function arivages(): HasMany
    {
        return $this->hasMany(Arivage::class);
    }

    public function getPrix()
    {
        $prix=$this->prix;
        return number_format($prix, 2, '.', ' '). 'FCFA';
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
            'titre' => $this->titre,
            'titre_en' => $this->titre_en,
        ];
    }
}
