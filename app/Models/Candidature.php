<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Candidature extends Model
{
    use HasFactory, Searchable;
    protected $fillable = ['name','email','ville','adresse','motivation','cv','lettre','emploi_id','dates'];

    public function emplois()
    {
        return $this->belongsTo('App\Models\Emploi','emploi_id');
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
            'name' => $this->name,
            'email' => $this->email,
        ];
    }
}
