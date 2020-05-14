@extends('admin.layouts.app')

@section('customers_edit')

<style>
    .box{
        padding-top: 0px;
        padding-bottom: 20px;
        padding-left: 30px;
        padding-right: 30px;
        background: url('{{ asset('admin/assets/img/fruits-vegetables.jpg') }}');
        background-size: cover;
        border-radius: 5%;
    }
</style>

<div class="box">
<fieldset>
    <legend><i class="fas fa-fw fa-edit"></i>Edit Customer</legend>
 <div class="container contact-form" style="background: url('fruits-vegetables.jpg'); color: black; margin-top: 10px; padding: 70px; ">
  
    <form action="{{ action('CustomersController@update' , $customer->id) }}" method="POST" >
       @csrf
      @method('PUT')

        <table cellspacing="10px" cellpadding="10px">
            <tr>
                <th>Name:</th>
                <td><input type="text" name="name" placeholder="Enter Name" value="{{ $customer->name }}" /></td>
            </tr>     
            
            <tr>
                <th>Address:</th>
                <td><input type="text" name="address" placeholder="Enter Address" value="{{ $customer->address }}" /></td>
            </tr>
            <tr>
                <th>Contact_Number:</th>
                <td><input type="number" name="contact_number" placeholder="Enter Contact" value="{{ $customer->contact_number }}"/></td>
            </tr>
             <tr>
                <th>Opening_Balance:</th>
                <td><input type="number" name="opening_balance" value="{{ $customer->opening_balance }}"></td>
            </tr>
            <tr>
               <td><button type="submit" class="bg-success text-dark">Save Changes</button></a></td>

               <td><a href="{{ action('CustomersController@index') }}">
                <button type="button" class="bg-danger text-dark">Back</button></a></td>
            </tr>
        </table>
    </form>
 </div>
</fieldset>
 </div>

@endsection
 
