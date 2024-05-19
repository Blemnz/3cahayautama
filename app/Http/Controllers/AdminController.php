<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Support\Facades\Session;
use App\Models\products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Order::dataOrderFinish();
        return view('admin.dashboard',[
            'tittle' => 'Dashboard',
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.createProduct',[
            'tittle' => 'Create Product'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        Session::flash('product', $request->product);
        Session::flash('description', $request->description);
        Session::flash('price', $request->price);

        $data = $request->validate([
            'product' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'image' => 'required|mimes:jpg,png'
        ]);

        if ($request->file('image')) {
            $data['image'] = $request->file('image')->Store('images');
        }

        products::create($data);

        return redirect()->to('dashboard/products
        ')->with('success','Berhasil Menambahkan data');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $data = products::dataProducts();
        return view('admin.products',[
            'tittle' => 'Product',
            'products' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = products::where('id',$id)->first();
        return view('admin.editProduct',[
            'tittle' => 'Edit Product',
            'data' => $data
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'product' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'image' => 'mimes:jpg,png'
        ]);

        if ($request->hasfile('image')) {
            $data_image = products::where('id',$id)->first();
            Storage::delete($data_image->image);

            $data['image'] = $request->file('image')->store('images');

        } else {
            $data_image = products::where('id',$id)->first();
            $data['image'] = $data_image->image;
        }

        

        products::where('id',$id)->update($data);

        return redirect()->to('dashboard/products')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data_image = products::where('id',$id)->first();
        Storage::delete($data_image->image);
        products::where('id', $id)->delete();

        return redirect()->to('dashboard/products')->with('success','Data berhasil dihapus');
    }
}
