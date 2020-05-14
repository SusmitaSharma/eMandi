@extends('admin.sales.index')

@section('sales_content')

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
  
  <h2>Sales:</h2>

  <span >
    <a href="{{ route('sales.create') }}"><button class="button">
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
                
                <th style="text-align: center;">
                Action
                </th>
            </tr>
          </thead>

       <tbody>
         @foreach($sales as $sale) 
          <tr>
            <th>
           {{ $sale->id }}
            </th>
                     
            <th>
            {{ $sale->name }}
            </th>

          
             <td>
            <a href="{{ action('SalesController@edit' , $sale->id) }}"><button type='button' class="btn1"><i class="fas fa-fw fa-edit"></i>Edit</button></a></td>

            <td>
              <form method="POST" action="{{ action('SalesController@destroy', $sale->id) }}">
                @csrf
                @method('delete')
            <button class="btn2" value="DELETE"><i class="fas fa-fw fa-minus-circle"></i>Remove</button></form>
            </td>
                      
            </tr>
            @endforeach
          </tbody>
       </table>
   </div>
</div>

<script>
  $(document).ready(function(){
    $('.delete_form').on('submit',
      function(){
        if(confirm("Are you sure you want to delete it?"))
        {
          return true;
        }
        else{
          return false;
        }
      });
  });
</script>
@endsection