<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubBookCatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_book_cats', function (Blueprint $table) {
            $table->id();
            $table->string('sub_book_cat');
            $table->unsignedBigInteger('main_book_cat_id')->nullable();
            $table->timestamps();

            $table->foreign('main_book_cat_id')->references('id')->on('main_book_cats')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sub_book_cats');
    }
}
