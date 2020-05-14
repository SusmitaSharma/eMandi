@extends('admin.layouts.app')

@section('product_create')
 <style>
     .box
    {
        /* padding-top: 0px;
        padding-bottom: 20px;
        padding-left: 30px;
        padding-right: 30px;*/
        background: url('{{ asset('admin/assets/img/all.jpg') }}');
        background-size: cover;
        text-align: center;
        border-radius: 5%; 
        margin-left: 10px;
        margin-right: 10px; 
        margin-top: 10px; 
    }

    .content

    {
        text-align: center;
    }

    .text
    {
        text-align: center;

    }
 </style>
 <div class="box">

    <div class="container contact-form" style="background: url('all.jpg'); color: black; margin-top: 10px; padding: 70px; text-align: center">
   
  <div class="content"> 
 <fieldset>

  <legend><i class="fas fa-fw fa-apple-alt"></i>Add Product</legend>
 
    <form action="{{ action('ProductsController@store')}}" method="post">
        @csrf
        <div class="text">
        <table cellspacing="10px" cellpadding="10" style="text-align: center">
            <tr>
                <th>Category_Name:</th>
                    <td><select name="category_name">
                        <option>Fruit</option>
                        <option>Vegetable</option>
                    </select></td>
                    
                </label>
            </tr>    
            
            <tr>
                <th>Name:</th>
                <td><input type="text" name="name" required /></td>
            </tr>

            <tr>
                <th>Code:</th>
                <td><input type="integer" name="code" /></td>
            </tr>

            <tr>
                <th>Quantity:</th>
                <td><input type="integer" name="quantity" required /></td>
            </tr>

            <tr>
                <th>Cost_Price:</th>
                <td><input type="integer" name="cost_price" required /></td>
            </tr>

             <tr>
                <th>Selling_Price:</th>
                <td><input type="integer" name="selling_price" required /></td>
            </tr>

            <tr>
                <th>Stock:</th>
                <td><input type="integer" name="stock" required /></td>
            </tr>

            <tr>
                <td><button type="submit" class="bg-success text-white">Add</button></td>
                
                <td><a href="{{ action('ProductsController@index') }}">      <button type="button" class="bg-danger text-white">Back</button></a></td>
            </tr>
        </table>
    </div>
    </form>                     
 
</fieldset>
</div>
</div>
</div>
@endsection