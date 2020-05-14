<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Supplier;
use Illuminate\Support\Facades\DB;

class SuppliersController extends Controller
{
     public function index()
    {
        $suppliers = DB::table('suppliers')->get();
         
        return view('admin.suppliers.__table', compact('suppliers'));
    }

      public function create()
    {
        
        return view('admin.suppliers.create');
    }

     public function store(Request $request)
    {
        request()->validate([
            'name' => 'required',

        ]);

        $supplier = new Supplier();
        $supplier->id = request('id');
        $supplier->name = request('name');
        $supplier->address = request('address');
        $supplier->contact_number = request('contact_number');
        $supplier->opening_balance = request('opening_balance');
        $supplier -> save();

        return redirect('/admin/suppliers');

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
        $supplier = Supplier::findOrFail($id);

       return view('admin.suppliers.edit' , compact('supplier' , 'id'));

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

        $supplier = Supplier::findOrFail($id);
       
        $supplier->name = request('name');
        $supplier->address = request('address');
        $supplier->contact_number = request('contact_number');
        $supplier->opening_balance = request('opening_balance');

        $supplier->save();

       return redirect()->action('SuppliersController@index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $supplier = Supplier::find($id);
       $supplier->delete();

       return redirect('/admin/suppliers');
    }



}
