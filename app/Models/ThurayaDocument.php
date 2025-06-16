<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThurayaDocument extends Model
{
    use HasFactory;
    protected $fillable = ['video','titre','titre_en','document','document_en','prod_id'];
    
    public function produit()
    {
        return $this->belongsTo('App\Models\Produit_turaya','prod_id');
    }
}
