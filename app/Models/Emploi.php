<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Emploi extends Model
{
    use HasFactory, Searchable;
    protected $fillable = ['titre','titre_en','type','lieu','description','description_en','image','dates','expire_date','slug'];

    public function candidature()
    {
        return $this->hasMany('App\Models\Candidature');
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
