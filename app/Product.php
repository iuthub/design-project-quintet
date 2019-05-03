<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function presentprice()
    {
    	return 'UZS ' . $this->price;
    }

      public function scopeMightAlsoLike($query)
    {
        return $query->inRandomOrder()->take(4);
    }
}
