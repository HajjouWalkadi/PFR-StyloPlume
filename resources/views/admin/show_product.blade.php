<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')

    <style type="text/css">
        .center{
            margin:auto;
            width: 80%;
            border:2px solid white;
        }
        .prodimage{
          width: 150px;
          height: 150px;
        }
        .th_color{
          background: beige;
        }
        
    </style>

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
    <style>
      #myTable{
        /* width */
::-webkit-scrollbar {
  width: 5px !important;
  height: 4px !important;
}

/* Track */
::-webkit-scrollbar-track {
  background: #f1f1f1;
}

/* Handle */
::-webkit-scrollbar-thumb {
  background: #888;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #555;
}
      }
    </style>
  </head>
  <body>
    <div class="container-scroller">
      
        @include('admin.sidebar')
        
        @include('admin.header')
      
        <div class="main-panel">
          <div class="content-wrapper">

          @if(session()->has('message'))

          <div class="alert alert-success">

             <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
            {{session()->get('message')}}
          </div>

          @endif

          <h2>All products</h2>
          


          <div class="overflow-scroll tab1 w-100 " style="overflow-x: scroll;">
            <table class="table table-dark table-hover table-striped " id="myTable">

              
            <thead> 
              <tr class="th_color">
                  <th class="text-center" scope="col">Product title</th>
                  <th class="text-center" scope="col">Description</th>
                  <th class="text-center" scope="col">Quantity</th>
                  <th class="text-center" scope="col">Category</th>
                  <th class="text-center" scope="col">Price</th>
                  <th class="text-center" scope="col">Discount Price</th>
                  <th class="text-center" scope="col">Product Image</th>
                  <th class="text-center" scope="col">Delete</th>
                  <th class="text-center" scope="col">Edit</th>
              </tr>
              </thead>
              <tbody>

            @foreach($product as $product)

            <tr>
                <td>{{$product->title}}</td>
                <td>{{$product->description}}</td>
                <td>{{$product->quantity}}</td>
                <td>{{$product->category->category_name}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->discount_price}}</td>
                <td>
                   <img class="prodimage" src="/product/{{$product->image}}" alt="">
                </td>
                <td>
                  <a class="btn btn-danger" onclick="return confirm('Are you sure to delete this')" href="{{url('delete_product',$product->id)}}">Delete</a>
                </td>
                <td>
                  <a class="btn btn-success" href="{{url('update_product',$product->id)}}">Edit</a>
                </td>
            </tr>

            @endforeach
            </tbody>
          </table>
        </div>

   
    @include('admin.script')
   
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
    <script>
      let table = new DataTable('#myTable', {
        responsive: true
      });
     
    </script>
  
  </body>
</html>