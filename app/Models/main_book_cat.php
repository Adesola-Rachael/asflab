<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class main_book_cat extends Model
{
    use HasFactory;
    protected $table ='main_book_cats';

      public function book()
    {
    	return 	$this->hasMany(books::class);
    }
    
}
