<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call([
            ProductCategoryTableSeeder::class, //Seeder digunakan untuk menambahkan beberapa data dummy
                                                // cara memanggilnya dengan " php artisan db:seed --class=ProductCategoryTableSeeder "
        ]);

        \App\Models\Product::factory(100)->create(); //Factory digunakan untuk menambahkan data dummy yang banyak/sesuai keinginan

        /*
        NB : Default nya factory berada diatas, ditaruh di bawah karena yang akan diisi dulu adalah di bagian seed nya
        kemudian ke bagian factory nya..
        Dan juga karena pada bagian Product terdapat nilai foreign key dari ProductCategory...
        
        Jika factory berada pada bagian atas maka akan terjadi error pada bagian tabel products
        */
    }
}
