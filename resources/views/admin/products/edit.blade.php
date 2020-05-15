@extends('admin.layouts.app')

@section('products_edit')
<style>
    .box
    {
         padding-top: 0px;
        padding-bottom: 20px;
        padding-left: 30px;
        padding-right: 30px;
        background: url('{{ asset('admin/assets/img/all.jpg') }}');
        background-size: cover;
        text-align: center;
        border-radius: 5%; 
        margin-left: 10px;
        margin-right: 10px; 
        margin-top: 10px; 
    }
</style>
<div class="box">

<fieldset>
    <legend><i class="fas fa-fw fa-edit"></i>Edit Product</legend>
    <div class="container contact-form" style="background: url('all.jpg'); color: black; margin-top: 20px; padding: 70px; ">
   
    <form action="{{ action('ProductsController@update' , $product->id) }}" method="POST">
       @csrf
      @method('PUT')

        <table cellspacing="10px" cellpadding="10px">
            <tr>
                <th>Category_Name:</th>
                    <td><select name="category_name">
                        <option value="{{ $product->category_name }}">Fruit</option>
                        <option value="{{ $product->category_name }}">Vegetable</option>
                    </select></td>
                    
                </label>
            </tr>    
            
            <tr>
                <th>Name:</th>
                <td><input type="text" name="name" value="{{ $product->name }}" /></td>
            </tr>

            <tr>
                <th>Code:</th>
                <td><input type="integer" name="code"  value="{{ $product->code }}" /></td>
            </tr>

            <tr>
                <th>Quantity:</th>
                <td><input type="integer" name="quantity" value="{{ $product->quantity }}" /></td>
            </tr>

            <tr>
                <th>Cost_Price:</th>
                <td><input type="integer" name="price" value="{{ $product->cost_price }}"/></td>
            </tr>

            <tr>
                <th>Selling_Price:</th>
                <td><input type="integer" name="price" value="{{ $product->selling_price }}"/></td>
            </tr>

            <tr>
                <th>Stock:</th>
                <td><input type="integer" name="stock" value="{{ $product->stock }}"/></td>
            </tr>

            <tr>
                <td><button type="submit" class="bg-success text-white">Save Changes</button></td>
                
                <td><a href="{{ action('ProductsController@index') }}">      <button type="button" class="bg-danger text-white">Back</button></a></td>
            </tr>
        </table>
    </form>
 </div>
</fieldset>
 </div>

@endsection
 
