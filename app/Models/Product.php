<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Categorie;

class Product extends Model
{
    use HasFactory;
    protected $fillable=['image','nom','description','prix','id_categorie'];

    public function categorie(){
        return $this->belongsTo(Categorie::class,'id_categorie');
    }
}
