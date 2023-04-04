<!DOCTYPE html>
<html>
   <head>
    <base href="/public">
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

         <div class="container mt-5 mb-5">
            <div class="d-flex justify-content-center row">
                <div class="col-md-10">
                    <div class="row p-2 bg-white border rounded mt-2">
                        <div class="col-md-3 mt-1"><img class="img-fluid img-responsive rounded product-image" src="product/{{$product->image}}"></div>
                        <div class="col-md-6 mt-1">
                            <h5>{{$product->title}}</h5>
                            <p class="text-justify text-truncate para mb-0">Product details: {{$product->description}}<br><br></p>
                            <div class="mt-1 mb-1 spec-1"><span>Product category: {{$product->category}}</span></div>
                            <div class="mt-1 mb-1 spec-1"><span style="font-weight: bold">Available quantity: {{$product->quantity}}</span></div>

                            <div class="d-flex flex-row">
                                {{-- <div class="ratings mr-2"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div><span>110</span> --}}
                                @if($product->discount_price!=null)

                                <div style="color: red" class="discount_price">Price: {{$product->discount_price}} MAD</div>

                                <div style="text-decoration: line-through;" class="price">{{$product->price}} MAD</div>

                                @else
                                <div class="price">Price: {{$product->price}} MAD</div>


                                @endif

                            </div>
                            <form action="{{url('add_cart',$product->id)}}" method="Post">
                                @csrf
                            
                            <a href="" class="btn btn-primary">Add to Cart</a>
                            </form>
                            {{-- <div class="mt-1 mb-1 spec-1"><span>{{$product->quantity}}</span></div> --}}
                            {{-- <div class="mt-1 mb-1 spec-1"><span>{{$product->category}}</span></div> --}}
                            {{-- <p class="text-justify text-truncate para mb-0">{{$product->description}}<br><br></p> --}}
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
      




































      {{-- <div class="col-md-3 col-sm-6" style="margin: auto; width:50%; padding:30px">
        <div class="product-grid">
            <div class="product-image">
                <a href="#" class="image">
                    <img src="product/{{$product->image}}" alt="">
                </a>
                <span class="product-discount-label"></span>
                <ul class="product-links">
                    <li><a href="#"><i class="fa fa-search"></i></a></li>
                    <li><a href="{{url('product_details',$product->id)}}"><i class="fa fa-eye"></i></a></li>
                </ul>
             
                
            </div>
            <div class="product-content">
                <h3 class="title"><a href="#">{{$product->title}}</a></h3>
                
                @if($product->discount_price!=null)

                <div style="color: red" class="discount_price">{{$product->discount_price}} MAD</div>

                <div style="text-decoration: line-through;" class="price">{{$product->price}} MAD</div>

                @else
                <div class="price">{{$product->price}} MAD</div>


                @endif


                <div>
                <h6>{{$product->category}}</h6>
                <h6>{{$product->description}}</h6>
                <h6>{{$product->quantity}}</h6>
            </div>
            </div>
        </div>
    </div> --}}
      














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