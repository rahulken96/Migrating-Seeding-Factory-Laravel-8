<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BuatTableProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('product_category_id')->unsigned(); //Unsigned() digunakan ketika akan dijadikan sebagai foreign key
                                                                    //Berfungsi untuk menjadikan isi dari suatu kolom tersebut bernilai positif
            $table->string('name');
            $table->text('description');
            // $table->integer('price');
            // $table->string('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
