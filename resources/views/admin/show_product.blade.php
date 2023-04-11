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

          <p>Total number of products: {{ $totalProducts }}</p>


          <div class="overflow-scroll tab1 w-100" style="height:27rem; overflow-y: scroll;">
            <table class="table table-dark table-hover table-striped">

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
                <td>{{$product->category}}</td>
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
  </body>
</html>