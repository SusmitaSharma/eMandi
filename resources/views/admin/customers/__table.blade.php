@extends('admin.customers.index')

@section('customers_content')

 <style>
  .button{
    background-color: #4CAF50;
    color: white;
    margin-bottom: 5px;
    padding: auto;
    float:  left;
  }

  .btn1{
    background-color: #4CAF50;
  }

  .btn2{
    background-color: red;
  }
</style>

<div class="card-body">
  
  <h2>Customer's List:</h2>

  <span >
    <a href="{{ route('customers.create') }}"><button class="button">
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
                 Name
                </th>
            
                <th>
                Address
                </th>
      
                <th>
                Contact_Number
                </th>
      
                <th>
                Opening_balance
                </th>
      
                <th style="text-align: center;">
                Action
                </th>
            </tr>
          </thead>

       <tbody>
         @foreach($customers as $customer) 
          <tr>
            <th>
           {{ $customer->id }}
            </th>
                     
            <th>
            {{ $customer->name }}
            </th>

            <th>
            {{ $customer->address }}
            </th>

            <th>
            {{ $customer->contact_number }}
            </th>

            <th>
            {{ $customer->opening_balance }}
            </th>

             <td>
            <a href="{{ action('CustomersController@edit' , $customer->id) }}"><button type='button' class="btn1"><i class="fas fa-fw fa-edit"></i>Edit</button></a></td>

            <td>
              <form name="delete_form" class="delete_form" method="POST" action="{{ action('CustomersController@destroy', $customer->id) }}">
                @csrf
                @method('delete')

              <input type="hidden" value="DELETE">
            <button type="submit" onclick="return confirm('Do you confirm the deletion?')" class="btn2" value="DELETE"><i class="fas fa-fw fa-minus-circle"></i>Remove</button></form>
            </td>
                      
            </tr>
            @endforeach
          </tbody>
       </table>
   </div>
</div>

@endsection