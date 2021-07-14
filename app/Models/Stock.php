<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Stock extends Model
{
    use HasFactory;

    /**
    * A stock belongs to a product
    * 
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */
    public function product(){
        return $this->belongsTo(Product::class);
    } 

}
