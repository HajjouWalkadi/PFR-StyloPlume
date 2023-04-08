{{-- <!DOCTYPE html>
<html lang="en">
<head>


    @include('home.csshome')
</head>
<body>
    @include('home.header')
    <!--Section: Contact v.2-->


    <section class="product_section layout_padding">
        <div class="container">
           <div class="heading_container heading_center">
              <h2>
                 Our <span>Items</span>
              </h2>
           </div>
           

           <div class="row">
               @foreach($products as $products)
       
              <div class="col-md-3 col-sm-6">
                  <div class="product-grid mt-4">
                      <div class="product-image">
                          <a href="#" class="image">
                              <img src="product/{{$products->image}}" alt="">
                          </a>
                          <span class="product-discount-label"></span>
                          <ul class="product-links">
                              <li><a href="#"><i class="fa fa-search"></i></a></li>
                              <li><a href="{{url('product_details',$products->id)}}"><i class="fa fa-eye"></i></a></li>
                          </ul>
                          <form action="{{url('add_cart',$products->id)}}" method="POST">
                           @csrf

                           <div class="row">
                               <div class="col-md-4">
                                   <input type="number" name="quantity" class="add-to-cart" style="width: 18vh" value="1" min="1">

                               </div>

                               <div class="col-md-4">
                                   <input type="submit" class="add-to-cart" style="width: 50vh" value="Add To Cart">

                               </div>
                                
                           </div>
                          </form>
                          
                      </div>
                      <div class="product-content">
                          <h3 class="title"><a href="#">{{$products->title}}</a></h3>
                          
                          @if($products->discount_price!=null)

                          <div style="color: red" class="discount_price">{{$products->discount_price}} MAD</div>

                          <div style="text-decoration: line-through;" class="price">{{$products->price}} MAD</div>

                          @else
                          <div class="price">{{$products->price}} MAD</div>


                          @endif
                      </div>
                  </div>
              </div>
              @endforeach
              <span style="padding-top:20">

              {!!$product->withQueryString()->links('pagination::bootstrap-5')!!}
           </span>

              
          </div>


           
        </div>
     </section>




























@include('home.footer')
 <!-- footer end -->
 <div class="cpy_">
  <p class="mx-auto">© 2023 All Rights Reserved By Stylo Plume<br></p>
</div>
<!-- jQery -->
<script src="home/js/jquery-3.4.1.min.js"></script>
<!-- popper js -->
<script src="home/js/popper.min.js"></script>
<!-- bootstrap js -->
<script src="home/js/bootstrap.js"></script>
<!-- custom js -->
<script src="home/js/custom.js"></script>
<!--Section: Contact v.2-->
</body>
</html>
 --}}
