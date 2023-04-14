<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="images/favicon.png" type="">
      <title>Stylo Plume</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="home/css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="home/css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="home/css/responsive.css" rel="stylesheet" />
   </head>
   <body>
      <div class="hero_area">
         <!-- header section strats -->
         @include('home.header')
         <!-- end header section -->
         <!-- slider section -->
         @include('home.slider')
         <!-- end slider section -->
      </div>
      <!-- why section -->
      @include('home.features')
      <!-- end why section -->
      
      <!-- arrival section -->
      @include('home.latest_collection')
      <!-- end arrival section -->
      
      <!-- product section -->
      {{-- @include('home.product') --}}
      <section class="product_section layout_padding">
         <div class="container">
            <div class="heading_container heading_center">
               <h2>
                  Our <span>Items</span>
               </h2>
            </div>
            

            <div class="row">
                @foreach($product as $product)
              
               <div class="col-md-3 col-sm-6">
                   <div class="product-grid mt-4">
                       <div class="product-image">
                           <a href="#" class="image">
                               <img src="product/{{$product->image}}" alt="">
                           </a>
                           <span class="product-discount-label"></span>
                           <ul class="product-links">
                               <li><a href="#"><i class="fa fa-search"></i></a></li>
                               <li><a href="{{url('product_details',$product->id)}}"><i class="fa fa-eye"></i></a></li>
                           </ul>
                           @if($product->quantity>0)
                           <form action="{{url('add_cart',$product->id)}}" method="POST">
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
                           @endif
                           
                       </div>
                       <div class="product-content">
                           <h3 class="title"><a href="#">{{$product->title}}</a></h3>
                           
                           @if($product->discount_price!=null)

                           <div style="color: red" class="discount_price">{{$product->discount_price}} MAD</div>

                           <div style="text-decoration: line-through;" class="price">{{$product->price}} MAD</div>

                           @else
                           <div class="price">{{$product->price}} MAD</div>


                           @endif
                       </div>
                   </div>
               </div>
               @endforeach
               <span style="padding-top:20">

                {{-- {!! $products->links() !!} --}}
               {{-- {!!$product->withQueryString()->links('pagination::bootstrap-5')!!} --}}
            </span>

               
           </div>


            
         </div>
      </section>
      <!-- end product section -->

      <!-- subscribe section -->
      {{-- @include('home.subscribe') --}}
      <!-- end subscribe section -->
      <!-- client section -->
      @include('home.client')
      <!-- end client section -->
      <!-- footer start -->
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
   </body>
</html>