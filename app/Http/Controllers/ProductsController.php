<?php

namespace App\Http\Controllers;

use App\Models\products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        $data = products::displayProducts();
        return view('index',[
            'data' => $data
        ]);
    }
}
