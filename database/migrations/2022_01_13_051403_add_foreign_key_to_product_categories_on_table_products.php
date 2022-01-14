<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyToProductCategoriesOnTableProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->foreign('product_category_id')->references('id')->on('product_categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropForeign('products_product_category_id_foreign');

            /*
            " $table->dropForeign('posts_user_id_foreign'); "
            Bentuk defaul nya seperti diatas... tapi ada beberapa bagian yang diganti seperti :

            "posts" => diganti menjadi table yang akan dijadikan tempat foreign key
            "user_id" => diganti menjadi kolom yang akan dijadikan sebagai foreign key
            */


        });
    }
}
