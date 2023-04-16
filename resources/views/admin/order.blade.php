<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
    
    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      
        @include('admin.sidebar')
  
        @include('admin.header')

        <div class="main-panel">
            <div class="content-wrapper">

                <h2 style="text-align:center;font-size:25px; font-weight:bold">All orders </h2>

                <div class="overflow-scroll tab1 w-100" style="height:27rem; overflow-y: scroll;">
                    <table class="table table-dark table-hover table-striped" id="myTable">
        

                    <thead> 
                      <tr class="th_color">
                          <th class="text-center" scope="col">Order ID</th>
                          <th class="text-center" scope="col">Name</th>
                          <th class="text-center" scope="col">Email</th>
                          <th class="text-center" scope="col">Phone</th>
                          <th class="text-center" scope="col">Address</th>
                          <th class="text-center" scope="col">Product_title</th>
                          <th class="text-center" scope="col">Quantity</th>
                          <th class="text-center" scope="col">Price</th>
                          <th class="text-center" scope="col">Image</th>
                          <th class="text-center" scope="col">Payment Status</th>
                          <th class="text-center" scope="col">Delivery Status</th>
                          <th class="text-center" scope="col">Delivered</th>
                          
                      </tr>
                      </thead>
                      <tbody>
        
                    @foreach($order as $order)
        
                    <tr>
                        <td>{{$order->id}}</td>
                        <td>{{$order->name}}</td>
                        <td>{{$order->email}}</td>
                        <td>{{$order->phone}}</td>
                        <td>{{$order->address}}</td>
                        <td>{{$order->product_title}}</td>
                        <td>{{$order->quantity}}</td>
                        <td>{{$order->price}}</td>
                        <td>
                           <img class="prodimage" src="/product/{{$order->image}}" alt="">
                        </td>
                        <td>{{$order->payment_status}}</td>
                        <td>{{$order->delivery_status}}</td>

                       
                        <td>

                            @if($order->delivery_status=='processing')

                          <a href="{{url('delivered',$order->id)}}" onclick="return confirm('Are you sure this product is delivered!')" class="btn btn-secondary" href="">Delivered</a>
                        
                          @else
                          <p style="color: green">Delivered</p>
                          @endif
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