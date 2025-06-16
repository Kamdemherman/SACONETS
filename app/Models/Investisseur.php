<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Investisseur extends Model
{
    use HasFactory;
    protected $fillable = ['Raison_sociale','email','pays','ville','adresse','phone','motivation','dates'];
}
