<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $fillable=[
    	'name','active','parent','created_at','updated_at'
    ];

    public function products()
    {

    	return $this->hasMany(Product::class);

    }
}
