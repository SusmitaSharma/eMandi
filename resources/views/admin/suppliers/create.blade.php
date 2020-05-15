@extends('admin.layouts.app')

@section('supplier_create')
<style>
    .box{
        /* padding-top: 10px;
        padding-bottom: 20px;
        padding-left: 30px;
        padding-right: 30px;*/
        background: url('{{ asset('admin/assets/img/3.jpg') }}');
        background-size: cover;  
        border-radius: 5%; 
        margin-left: 10px;
        margin-right: 10px; 
        margin-top: 10px;
        border-radius: 5%;  
    }

    .content{
        text-align: center;
        color: black;
    }

    .text{
        font-size: 18px;
        text-align: center;
    }

    
</style>

 <div class="box">
   
   <div class="container contact-form" style="background: url('3.jpg'); color:white; margin-top: 10px; padding: 70px;">

 <fieldset>
<div class="content">
  <legend><center><i class="fas fa-fw fa-address-card"></i><h1><b>New Supplier</b></h1></center></legend>
 
    <form action="{{ action('SuppliersController@store') }}" method="post" style="text-align: center">
        @csrf
        <div class="text">
        <table cellspacing="10px" cellpadding="10px" style="text-align: center">
            <tr>
                <th>Name:</th>
                <td><input type="text" name="name" placeholder="Enter Supplier's Name" required />
                

                </td><br>
            </tr>    
            
            <tr>
                <th>Address:</th>
                <td><input type="text" name="address" placeholder="Enter Supplier's Address" required/>
                </td>
            </tr>

            <tr>
                <th>Contact_Number:</th>
                <td><input type="text" name="contact_number" placeholder="Enter Supplier's Contact" required/>
                </td>
            </tr>

            <tr>
                <th>Opening_Balance:</th>
                <td><input type="integer" name="opening_balance" required /></td>
            </tr>

            <tr>
                <td><button type="submit" class="bg-success text-white">Add</button></td>
                <td><a href="{{ action('SuppliersController@index') }}"> <button type="button" class="bg-danger text-white">Back</button></a></td>
            </tr>
        </table>
    </div>
    </form>                     
 
</fieldset>
</div>
</div>
@endsection