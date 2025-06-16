<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Partenaire extends Model
{
    use HasFactory, Searchable;
    protected $fillable = ['raison_sociale','site','type','logo','dates'];

    /**
     * Get the indexable data array for the model.
     *
     * @return array
     */
    public function toSearchableArray()
    {
       
        // Customize the data array...
 
        return [
            'raison_sociale' => $this->raison_sociale,
        ];
    }
}
