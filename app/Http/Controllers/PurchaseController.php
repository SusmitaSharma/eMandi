<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Purchase;
use Illuminate\Support\Facades\DB;


class PurchaseController extends Controller
{
     public function index()
    {
        $purchase = DB::table('purchase')->get();
        return view('admin.purchase.__table', compact('purchase'));
	}

	  public function create()
    {
        return view('admin.purchase.create');
    }

     public function store(Request $request)
    {
        request()->validate([
            'name' => 'required',
        
        ]);

        $purchase = new Purchase();
        $purchase->id = request('id');
        $purchase->supplier_name = request('supplier_name');
        $purchase->address = request('address');
        $purchase->contact_number = request('contact_number');
        $purchase->product_name = request('product_name');
        $purchase->quantity = request('quantity');
        $purchase->rate = request('rate');              
        $purchase->amount = request('amount');
       
        $purchase -> save();

        return redirect('/admin/purchase');

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
        $purchase = Purchase::findOrFail($id);

        return view('admin.purchase.edit' , compact('purchase' , 'id'));
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

        $purchase = Purchase::findOrFail($id);
        $purchase->product_name = request('product_name');
        $purchase->supplier_name = request('supplier_name');
        $purchase->address = request('address');
        $purchase->contact_number = request('contact_number');      
        $purchase->quantity = request('quantity');
        $purchase->rate = request('rate');            
        $purchase->amount = request('amount');
       
        $purchase -> save();

       

        return redirect('/admin/purchase'.$purchase->id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $purchase = Purchase::find($id);
       $purchase->delete();

       return redirect('/admin/purchase');
    }
}
