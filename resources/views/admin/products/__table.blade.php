@extends('admin.products.index')

@section('products_content')

 <style>
  .button{
    background-color: #4CAF50;
    color: white;
    margin-bottom: 5px;
    padding: auto;
    float:left ;
     
        
  }

  .btn1{
    background-color: #4CAF50;
  }

  .btn2{
    background-color: red;
  }
</style>

<div class="card-body">
  
  <h2>Product List:</h2>

  <span >
    <a href="{{ route('products.create') }}"><button class="button">
     <i class="fas fa-plus"></i>
     Create New
    </button></a>
  </span>
  <br>

    <div class="table-responsive">
        <table class="table table-dark table-hover ">
          <thead class=" text-white">
            <tr>
               <th>
                 ID
                </th>
                      
                <th>
                 Category_Name
                </th>
            
                <th>
               Name
                </th>
      
                <th>
                Code
                </th>
      
                <th>
                Quantity
                </th>

                <th>
                Cost_Price
                </th>

                <th>
                Selling_Price
                </th>

                <th>
                Stock
                </th>
      
                <th style="text-align: center;">
                Action
                </th>
            </tr>
          </thead>

       <tbody>
         @foreach($products as $product) 
          <tr>
            <th>
           {{ $product->id }}
            </th>
                     
            <th>
            {{ $product->category_name }}
            </th>

            <th>
            {{ $product->name }}
            </th>

            <th>
            {{ $product->code }}
            </th>

            <th>
            {{ $product->quantity }}
            </th>

             <th>
            {{ $product->cost_price }}
            </th>

             <th>
            {{ $product->selling_price }}
            </th>

             <th>
            {{ $product->stock }}
            </th>

             <td>
            <a href="{{ action('ProductsController@edit' , $product->id) }}"><button type='button' class="btn1"><i class="fas fa-fw fa-edit"></i>Edit</button></a></td>

           
            <td>
              <form name="delete_form" class="delete_form" method="POST" action="{{ action('ProductsController@destroy', $product->id) }}">
                @csrf
                @method('delete')

              <input type="hidden" value="DELETE">
            <button type="submit" onclick="return confirm('<iDo you confirm the deletion?')" class="btn2" value="DELETE"><i class="fas fa-fw fa-minus-circle"></i>Remove</button></form>
            </td>

            </tr>
            @endforeach
          </tbody>
       </table>
   </div>
</div>

@endsection