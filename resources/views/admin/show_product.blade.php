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
      <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')
      <!-- partial -->
        @include('admin.header')
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">

          @if(session()->has('message'))

          <div class="alert alert-success">

             <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
            {{session()->get('message')}}
          </div>

          @endif

          <h2>All products</h2>
          {{-- <h3>{{$totalProducts}}</h3> --}}

          {{-- <p>Total number of products: {{ $totalProducts }}</p> --}}


          <div class="overflow-scroll tab1 w-100 " style="overflow-x: scroll;">
            <table class="table table-dark table-hover table-striped " id="myTable">

          {{-- <div class="overflow-scroll tab1 w-100" style="height:27rem;">   
          <table class="table table-dark table-hover table-striped"> --}}
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

    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->

    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/dataTables.bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/dataTables.bootstrap4.min.js" integrity="sha512-OQlawZneA7zzfI6B1n1tjUuo3C5mtYuAWpQdg+iI9mkDoo7iFzTqnQHf+K5ThOWNJ9AbXL4+ZDwH7ykySPQc+A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
    <script>
      let table = new DataTable('#myTable', {
        responsive: true
      });
      // $(function(){
      //   var table = $('.yajra-datatables').DataTable({
      //     processing:true,
      //     serverSide:true,
      //     ajax:"{{ route('show_product') }}",
      //     columns:[
      //           { data: 'title', name: 'title' },
      //           { data: 'description', name: 'description' },
      //           { data: 'quantity', name: 'quantity' },
      //           { data: 'category', name: 'category' },
      //           { data: 'price', name: 'price' },
      //           { data: 'discount_price', name: 'discount_price' },
      //           { data: 'image', name: 'image', orderable: false, searchable: false },
      //           {
      //             data:'action',
      //             name:'action',
      //             orderable:true,
      //             searchable:true
      //           },
      //           // { data: 'delete', name: 'delete', orderable: false, searchable: false },
      //           // { data: 'edit', name: 'edit', orderable: false, searchable: false }
      //       ]
          
      //   })
      // });
    </script>
  
  </body>
</html>