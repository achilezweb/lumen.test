<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    /**
    * The stocks associated with the product.
    * 
    * @return \Illuminate\Database\Eloquent\Relations\HasMany
    */
    public function stocks(){
        return $this->hasMany(Stock::class);
    } 


}
