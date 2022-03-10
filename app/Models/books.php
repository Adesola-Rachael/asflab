<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class books extends Model
{
    use HasFactory;
    protected $table="books";
    public function author()
    {
    	return $this->belongsTo(Author::class);
    }
    public function main_cat()
    {
    	return $this->belongsTo(main_book_cat::class);
    }
    // public function sub_cat()
    // {
    // 	return $this->belongsTo(sub_book_cat::class, 'sub_book_cat_id')->withDefault();
    // }
}
