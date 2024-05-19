<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class products extends Model
{
    use HasFactory;

    protected $fillable = [
        'product',
        'description',
        'price',
        'image'
    ];

    public static function dataProducts() {
        $data = DB::table('products')->paginate('8');
        return $data;
    }

    public static function displayProducts()
    {
        $data = DB::table('products')->paginate('3');
        return $data; 
    }

    public static function dataFormOrder()  
    {
        $data = DB::table('products')->get();
        return $data;
    }

}
