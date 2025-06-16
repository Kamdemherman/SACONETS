<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class News extends Model
{
    use HasFactory, Searchable;
    protected $fillable = ['libelle','libelle_en','short','short_en','description','description_en','image','auteur','dates','slug'];

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
