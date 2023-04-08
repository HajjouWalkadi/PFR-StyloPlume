<!DOCTYPE html>
<html lang="en">
<head>
  {{-- <!-- CSS link for Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

<!-- JavaScript link for Bootstrap Icons -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/bootstrap-icons.min.js"></script> --}}

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/brands.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js" ></script>


    {{-- <link rel="stylesheet" href="../../../public/contact/main.css"> --}}
    {{-- <link rel="stylesheet" href="../../../public/home/css/style.css"> --}}
    @include('home.csshome')
</head>
<body>
    @include('home.header')

<section class="product_section layout_padding">
         <div class="container">
            <div class="heading_container heading_center">
               <h2>
                  Our <span>Items</span>
               </h2>
            </div>
            

            <div class="row">
                @foreach($product as $product)
               {{-- <div class="col-md-3 col-sm-6">
                   <div class="product-grid">
                       <div class="product-image">
                           <a href="#" class="image">
                               <img src="https://i.pinimg.com/564x/57/11/35/571135a25988e6e06a0b1cb572eea173.jpg">
                           </a>
                           <span class="product-discount-label">-23%</span>
                           <ul class="product-links">
                               <li><a href="#"><i class="fa fa-search"></i></a></li>
                               <li><a href="#"><i class="fa fa-heart"></i></a></li>
                               <li><a href="#"><i class="fa fa-random"></i></a></li>
                           </ul>
                           <a href="" class="add-to-cart">Add to Cart</a>
                       </div>
                       <div class="product-content">
                           <h3 class="title"><a href="#">Women's Blouse Top</a></h3>
                           <div class="price">$53.55 <span>$68.88</span></div>
                       </div>
                   </div>
               </div> --}}
               <div class="col-md-3 col-sm-6">
                   <div class="product-grid mt-4">
                       <div class="product-image">
                           <a href="#" class="image">
                               <img src="product/{{$product->image}}" alt="">
                           </a>
                           <span class="product-discount-label"></span>
                           <ul class="product-links">
                               <li><a href="#"><i class="fa fa-search"></i></a></li>
                               {{-- <li><a href="#"><i class="fa fa-heart"></i></a></li> --}}
                               <li><a href="{{url('product_details',$product->id)}}"><i class="fa fa-eye"></i></a></li>
                           </ul>
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
                           {{-- <a href="" class="add">View details</a> --}}
                           {{-- <a href="{{url('add_cart',$products->id)}}" class="add-to-cart">Add to Cart</a> --}}
                           </form>
                           
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
      {{-- @include('home.footer')
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
   </body> --}}