<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')
      <!-- partial -->
        @include('admin.header')

        <div class="main-panel">
            <div class="content-wrapper">

                <h2 style="text-align:center;font-size:25px; font-weight:bold">All orders </h2>

                <div class="overflow-scroll tab1 w-100" style="height:27rem; overflow-y: scroll;">
                    <table class="table table-dark table-hover table-striped">
        
                  {{-- <div class="overflow-scroll tab1 w-100" style="height:27rem;">   
                  <table class="table table-dark table-hover table-striped"> --}}
                    <thead> 
                      <tr class="th_color">
                          <th class="text-center" scope="col">Name</th>
                          <th class="text-center" scope="col">Email</th>
                          <th class="text-center" scope="col">Phone</th>
                          <th class="text-center" scope="col">Address</th>
                          <th class="text-center" scope="col">Product_title</th>
                          <th class="text-center" scope="col">Quantity</th>
                          <th class="text-center" scope="col">Category</th>
                          <th class="text-center" scope="col">Price</th>
                          <th class="text-center" scope="col">Image</th>
                          <th class="text-center" scope="col">Payment Status</th>
                          <th class="text-center" scope="col">Delivery Status</th>
                          <th class="text-center" scope="col">Delivered</th>
                          {{-- <th class="text-center" scope="col">paid</th> --}}
                          
                      </tr>
                      </thead>
                      <tbody>
        
                    @foreach($order as $order)
        
                    <tr>
                        <td>{{$order->name}}</td>
                        <td>{{$order->email}}</td>
                        <td>{{$order->phone}}</td>
                        <td>{{$order->address}}</td>
                        <td>{{$order->product_title}}</td>
                        <td>{{$order->quantity}}</td>
                        <td>{{$order->category}}</td>
                        <td>{{$order->price}}</td>
                        <td>
                           <img class="prodimage" src="/product/{{$order->image}}" alt="">
                        </td>
                        <td>{{$order->payment_status}}</td>
                        <td>{{$order->delivery_status}}</td>

                        {{-- <td>
                          <a class="btn btn-danger" onclick="return confirm('Are you sure to delete this')" href="">Delete</a>
                        </td> --}}
                        <td>

                            @if($order->delivery_status=='processing')

                          <a href="{{url('delivered',$order->id)}}" onclick="return confirm('Are you sure this product is delivered!')" class="btn btn-secondary" href="">Delivered</a>
                        
                          @else
                          <p style="color: green">Delivered</p>
                          @endif
                        </td>

                        {{-- <td>
                            @if($order->payment_status=='cash on delivery')

                          <a href="{{url('paid',$order->id)}}" onclick="return confirm('Are you sure this product is paid!')" class="btn btn-secondary" href="">Paid</a>

                          @else
                          <p style="color: green">Paid</p>
                          @endif
                        </td> --}}
                    </tr>
        
                    @endforeach
                    </tbody>
                  </table>
                </div>
        
        <!-- partial -->
        

    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')


    <!-- End custom js for this page -->
  </body>
</html>