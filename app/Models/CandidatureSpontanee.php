<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class CandidatureSpontanee extends Model
{
    use HasFactory, Searchable;
    protected $fillable = ['name','email','ville','adresse','objet','cv','lettre','dates'];

    /**
     * Get the indexable data array for the model.
     *
     * @return array
     */
    public function toSearchableArray()
    {
       
        // Customize the data array...
 
        return [
            'name' => $this->name,
            'email' => $this->email,
        ];
    }
}
