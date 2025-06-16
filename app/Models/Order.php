<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['user_name','montant','tva','order_date','produits','user_id','etat'];

    public function user()
    {
        return $this->belongsTo('App\Models\User','user_id');
    }
}
