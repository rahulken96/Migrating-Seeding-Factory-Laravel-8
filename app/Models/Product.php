<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;

    use SoftDeletes;
    //Menggunakan php artisan tinker untuk mengecek,menghapus,dan melihat perbedaan pada database
    //App\Models\Product::all() *Untuk Melihat isi table
    //App\Models\Product::where('id',5)->get() *Untuk Melihat isi table kolom id '5'
    //App\Models\Product::where('id',5)->delete() *Untuk mengahpus isi table kolom id '5'

    protected $fillable = ['product_category_id','name','description','price','image']; //Nama-nama kolom yang bisa diisi datanya
}
