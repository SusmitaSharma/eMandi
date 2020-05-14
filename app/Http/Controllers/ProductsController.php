<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Products;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = DB::table('products')->get();     

        return view('admin.products.__table', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'name' => 'required',
        
        ]);

        $product = new Products();
        $product->id = request('id');
        $product->category_name = request('category_name');
        $product->name = request('name');
        $product->code = request('code');
        $product->quantity = request('quantity');
        $product->cost_price = request('cost_price');
        $product->selling_price = request('selling_price');
        $product->stock = request('stock');
        $product-> save();

        return redirect('/admin/products');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Products::findOrFail($id);

        return view('admin.products.edit' , compact('product' , 'id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        request()->validate([
            'name' => 'required',
        
        ]);

        $product = Products::findOrFail($id);
        $product->category_name = request('category_name');
        $product->name = request('name');
        $product->code = request('code');
        $product->quantity = request('quantity');
        $product->cost_price = request('cost_price');
        $product->selling_price = request('selling_price');
        $product->stock = request('stock');
        $product -> save();

       

        return redirect()->action('ProductsController@index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $product = Products::find($id);
       $product->delete();

       return redirect('/admin/products');
    }
}
    


