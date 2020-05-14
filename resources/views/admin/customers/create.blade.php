@extends('admin.layouts.app')

@section('create_content')

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
 <div class="container contact-form" style="background: url('fruits-vegetables.jpg');/*#4e73df*/; color: black; margin-top: 10px; padding: 70px;">
     
   
 <fieldset>

  <legend><i class="fas fa-fw fa-user"></i>Add Customer</legend>
  
    <form action="{{ action('CustomersController@store')}}" method="post">
        @csrf
        <table cellspacing="10px" cellpadding="10px">
            <tr>
                <th>Name:</th>
                <td><input type="text" name="name" placeholder="Enter Customer's Name" required/></td>
              
                <br>
            </tr>    
            
            <tr>
                <th>Address:</th>
                <td><input type="text" name="address" placeholder="Enter Customer's Address" required/></td>
            </tr>

            <tr>
                <th>Contact_Number:</th>
                <td><input type="integer" name="contact_number" placeholder="Enter Customer's Contact" required/></td>

              <br>
            </tr>

            <tr>
                <th>Opening_Balance:</th>
                <td><input type="integer" name="opening_balance" /></td>
            </tr>

            <tr>
                <td><button type="submit" class="bg-success text-white">Add</button></td>
                <td><a href="{{ action('CustomersController@index') }}">      <button type="button" class="bg-danger text-white">Back</button></a></td>
            </tr>
        </table>
    </form>


</fieldset>

</div>
</div>
@endsection