@extends('admin.layouts.app')

@section('sales_create')

<style>
    .box{
         padding-top: 0px;
        padding-bottom: 20px;
        padding-left: 30px;
        padding-right: 30px;
    }
</style>
<div class="box">
 <div class="container contact-form" style="background: #4e73df; color: white; margin-top: 10px; padding: 70px;">
   
 <fieldset>

  <legend><i class="fas fa-fw fa-user"></i>Add Sales Bill</legend>
 
    <form action="{{ action('SalesController@store')}}" method="post">
        @csrf
        Date<input type="date" name="date"><br/>
        Customer's Name<input type="text" name="customer_name"><br/>
        Address<input type="text" name="address"><br/>
        Contact_Number<input type="number" name="contact_number"><br/>
        <table cellspacing="10px" cellpadding="10px">
            <tr>
                <th>Product:</th>
                <td><input type="text" name="product_name" /></td><br>
            </tr>    
            
            <tr>
                <th>Quantity:</th>
                <td><input type="text" name="quantity"/></td>
            </tr>

            <tr>
                <th>Rate:</th>
                <td><input type="integer" name="rate" /></td>
            </tr>

            <tr>
                <th>Amount:</th>
                <td><input type="integer" name="amount" /></td>
            </tr>

             
            <tr>
                <td><button type="submit" class="bg-success text-white">Add</button></td>
                <td><a href="{{ action('SalesController@index') }}">      <button type="button" class="bg-danger text-white">Back</button></a></td>
            </tr>
        </table>
    </form>                     
 
</fieldset>

</div>
</div>
@endsection