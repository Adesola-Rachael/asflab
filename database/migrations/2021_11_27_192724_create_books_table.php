<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('image')->default('avatar.jpg');
            $table->text('description');
            
            $table->string('bookfile')->default('book.pdf');
            $table->unsignedBigInteger('main_book_cat_id')->nullable();
            // inspirational and academics
            $table->unsignedBigInteger('sub_book_cat_id')->nullable();
            // whether prayer, faith , marriage, science , arti etc
            $table->unsignedBigInteger('dept_id')->nullable();
            // to show books according to the dept it belongs to
            $table->unsignedBigInteger('level_id')->nullable();
            // show books accroding tho the level it belongs to
            $table->unsignedBigInteger('author_id')->nullable();
            
            $table->timestamps();

            $table->foreign('main_book_cat_id')->references('id')->on('main_book_cats')->onDelete('cascade');
            $table->foreign('sub_book_cat_id')->references('id')->on('sub_book_cats')->onDelete('cascade');
            $table->foreign('author_id')->references('id')->on('authors')->onDelete('cascade');
            $table->foreign('dept_id')->references('id')->on('depts')->onDelete('cascade');
            $table->foreign('level_id')->references('id')->on('levels')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
