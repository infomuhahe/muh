<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wholesale extends Model
{

    protected $table='wholesales';
    protected $primaryKey='id';
    protected $fillable=['name','email','phone','companyname','country','address','password'];

    
}
