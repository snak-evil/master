<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sidebar extends Model
{
    protected $fillable=[
    	'title','alias','url','icon','parent','created_at','updated_at'
    ];
}
