<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductsWholesale extends Model
{
    protected $table='products_wholesales';
    protected $primaryKey='id';
    protected $fillable=['categories_id','name','code','color','description','price','image'];
}
