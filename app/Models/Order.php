<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
        'product',
        'description'
    ];

    public static function dataOrder() {
        $data = DB::table('orders')->where('active', '0')->paginate(5);
        return $data;
    }

    public static function dataOrderFinish()
    {
        $data = DB::table('orders')->where('active', '1')->paginate(5);
        return $data;
    }
}
