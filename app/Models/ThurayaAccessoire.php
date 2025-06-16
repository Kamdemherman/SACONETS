<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThurayaAccessoire extends Model
{
    use HasFactory;
    protected $fillable = ['titre','titre_en','paragraphe','paragraphe_en','prod_id','image'];
    public function produit()
    {
        return $this->belongsTo('App\Models\Produit_turaya','prod_id');
    }
}
