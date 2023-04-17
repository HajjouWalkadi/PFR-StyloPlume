<!DOCTYPE html>
<html lang="en">
<head>


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/brands.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js" ></script>

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
                                            <input type="submit" class="add-to-cart" style="width: 33vh" value="Add To Cart">
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
            </span>

               
           </div>


            
         </div>
      </section>
      @include('home.footer')
      <!-- footer end -->
      <div class="cpy_">
       <p class="mx-auto">© 2023 All Rights Reserved By Stylo Plume<br></p>
    </div>

    <script src="home/js/jquery-3.4.1.min.js"></script>
 
    <script src="home/js/popper.min.js"></script>

    <script src="home/js/bootstrap.js"></script>

    <script src="home/js/custom.js"></script>
   </body>