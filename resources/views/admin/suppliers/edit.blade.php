@extends('admin.layouts.app')

@section('suppliers_edit')
<style>
    .box
    {
        /* padding-top: 0px;
        padding-bottom: 20px;
        padding-left: 30px;
        padding-right: 30px;*/
        background: url('{{ asset('admin/assets/img/3.jpg') }}');
        background-size: cover;  
        border-radius: 5%; 
        margin-left: 10px;
        margin-right: 10px; 
        margin-top: 10px; 
        text-align: center; 
        border-radius: 5%;
    }

</style>
<div class="box">
<fieldset>
    <legend><i class="fas fa-fw fa-edit"></i>Edit Supplier</legend>
 <div class="container contact-form" style="background: url('3.jpg'); color: black; margin-top: 10px; padding: 70px; text-align: center ">
  
    <form action="{{ action('SuppliersController@update' , $supplier->id) }}" method="POST">
       @csrf
      @method('PUT')

        <table cellspacing="10px" cellpadding="10px">
            <tr>
                <th>Name:</th>
                <td><input type="text" name="name" placeholder="Enter Name" value="{{ $supplier->name }}" /></td>
            </tr>     
            
            <tr>
                <th>Address:</th>
                <td><input type="text" name="address" placeholder="Enter Address" value="{{ $supplier->address }}" /></td>
            </tr>
            <tr>
                <th>Contact_Number:</th>
                <td><input type="number" name="contact_number" placeholder="Enter Contact" value="{{ $supplier->contact_number }}"/></td>
            </tr>
             <tr>
                <th>Opening_Balance:</th>
                <td><input type="number" name="opening_balance" value="{{ $supplier->opening_balance }}"></td>
            </tr>
            <tr>
               <td><button type="submit" class="bg-success text-white" >Save Changes</button></a></td>

               <td><a href="{{ action('SuppliersController@index') }}">
                <button type="button" class="bg-danger text-white">Back</button></a></td>
            </tr>
        </table>
    </form>
 </div>
</fieldset>
 </div>

@endsection
 
