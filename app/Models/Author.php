<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'about'
    ];

    protected $table ='authors';

      public function book()
    {
    	return 	$this->hasMany(books::class);
    }
}

