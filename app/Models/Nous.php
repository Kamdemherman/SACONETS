<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nous extends Model
{
    use HasFactory;
    protected $fillable = ['libelle','libelle_en','description','description_en','image','image2'];
}
