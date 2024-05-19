<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Type\Integer;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = products::dataFormOrder();
        return view('form',[
            'products' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'address' => 'required',
            'product' => 'required',
            'description' => 'required'
        ]);

        Order::create($data);

        return redirect()->to('/order/terimakasih');
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        $data = Order::dataOrder();
        $data2 = Order::dataOrderFinish();
        return view('admin.order',[
            'tittle' => 'Order',
            'data' => $data,
            'data2' => $data2
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
        Order::where('id',$id)->update(['active'=>'1']);
        return redirect()->to('dashboard/order')->with('success', 'pesanan sudah selesai');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Order::where('id',$id)->delete();
        return redirect()->to('dashboard/order')->with('success', 'Pesanan berhasil dihapus');
    }
}