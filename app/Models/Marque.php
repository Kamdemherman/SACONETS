<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marque extends Model
{
    use HasFactory;
    protected $fillable = ['raison_sociale','site','service_id','logo'];
    
    public function service()
    {
        return $this->belongsTo('App\Models\Telecom','service_id');
    }
}
