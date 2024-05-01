<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Categorie extends Model
{
    use HasFactory;

    protected $fillable=['nom'];

    public function products(){
        return $this->hasMany(Product::class,'id_categorie');
    }
}
