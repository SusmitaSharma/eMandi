<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Sales;
use Illuminate\Support\Facades\DB;

class SalesController extends Controller
{
     public function index()
    {
        $sales = DB::table('sales')->get();
        return view('admin.sales.__table', compact('sales'));
	}

	  public function create()
    {
        return view('admin.sales.create');
    }

     public function store(Request $request)
    {
        request()->validate([
            'name' => 'required',
        
        ]);

        $sale = new Sales();
        $sale->id = request('id');
        $sale->product_name = request('product_name');
        $sale->quantity = request('quantity');
        $sale->rate = request('rate');              
        $sale->amount = request('amount');
       
        $sale -> save();

        return redirect('/admin/sales');

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
        $sale = Sales::findOrFail($id);

        return view('admin.sales.edit' , compact('sales' , 'id'));
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

        $sale = Sales::findOrFail($id);
        $sale->product_name = request('product_name');      
        $sale->quantity = request('quantity');
        $sale->rate = request('rate');            
        $sale->amount = request('amount');
       
        $sale -> save();

       

        return redirect('/admin/sales'.$sale->id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $sale = Sales::find($id);
       $sale->delete();

       return redirect('/admin/sales');
    }
}
    




