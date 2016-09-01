<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //
	/**
	* @var array
	*/

    
    protected $fillable = ['title','author','desc','quantity'];

    
}
