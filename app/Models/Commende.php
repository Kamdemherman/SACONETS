<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commende extends Model
{
    use HasFactory;
    protected $fillable = ['payment_intent_id','montant','payment_created_at','produits','user_id'];

    public function user()
    {
        return $this->belongsTo('App\Models\User','user_id');
    }
}
