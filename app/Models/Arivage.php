<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Arivage extends Model
{
    use HasFactory;

    protected $fillable = ['prix','prod_id'];

    /**
     * Get the categorie that owns the Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    
    public function produit()
    {
        return $this->belongsTo('App\Models\Shop','prod_id');
    }
}
