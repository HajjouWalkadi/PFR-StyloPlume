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
    
      

        
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

{{-- <!DOCTYPE html>
<html lang="en">
  <head>
     --}}
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>eCommerce Product Detail</title>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">

  </head>

  <body>
	
	<div class="container">
		<div class="card">
			<div class="container-fliud">
				<div class="wrapper row">
					<div class="preview col-md-6">
						
						<div class="preview-pic tab-content">
						  <div class="tab-pane active" id="pic-1"><img src="product/{{$product->image}}" /></div>
						  <div class="tab-pane" id="pic-2"><img src="http://placekitten.com/400/252" /></div>
						  <div class="tab-pane" id="pic-3"><img src="http://placekitten.com/400/252" /></div>
						  <div class="tab-pane" id="pic-4"><img src="http://placekitten.com/400/252" /></div>
						  <div class="tab-pane" id="pic-5"><img src="http://placekitten.com/400/252" /></div>
						</div>
						<ul class="preview-thumbnail nav nav-tabs">
						  <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="product/{{$product->image}}" /></a></li>
						  <li><a data-target="#pic-2" data-toggle="tab"><img src="product/{{$product->image}}" /></a></li>
						  <li><a data-target="#pic-3" data-toggle="tab"><img src="product/{{$product->image}}" /></a></li>
						  <li><a data-target="#pic-4" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a></li>
						  <li><a data-target="#pic-5" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a></li>
						</ul>
						
					</div>
					<div class="details col-md-6">
						<h3 class="product-title">{{$product->title}}</h3>
						<div class="rating">
							<div class="stars">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
							</div>
							<span class="review-no">41 reviews</span>
						</div>
						<p class="product-description">{{$product->description}}</p>
						{{-- <h4 class="price">current price: <span>{{$product->price}} MAD</span></h4> --}}
                        <div class="d-flex flex-row">
                            @if($product->discount_price!=null)

                            <h4 class="price">Current price: <span> {{$product->discount_price}} MAD</span></h4>

                            <h4 style="text-decoration: line-through;" class="price">{{$product->price}} MAD</h4>

                            @else
                            <h4 class="price">Current price: <span>{{$product->price}} MAD</span></h4>


                            @endif

                        </div>
                        <h5><strong>Category:</strong> {{$product->category}}</h5>
						

                        <!-- Quantity -->
                        <h5><strong>Quantity:</strong></h5>
                {{-- <div class="d-flex mb-4" style="max-width: 300px"> --}}
                    {{-- <button class="btn btn-primary px-3 me-2"
                      onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                      <i class="bi bi-dash"></i>
                    </button> --}}
                    {{-- <div class="form-outline"> --}}
                      {{-- <input id="form1" min="1" name="quantity" value="1" type="number" class="form-control" /> --}}
                      {{-- <label class="form-label" for="form1">Quantity</label> --}}
                    {{-- </div> --}}
  
                    {{-- <button class="btn btn-primary px-3 ms-2"
                      onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                      <i class="bi bi-plus"></i>
                    </button> --}}
                  {{-- </div> --}}
                  <!-- Quantity -->

                  <div class="action">
                    <form action="{{url('add_cart',$product->id)}}" method="POST">
                      @csrf

                      <div class="row">
                          <div class="col-md-4">
                            <div class="form-outline">
                              <input id="form1" min="1" name="quantity" value="1" type="number" class="form-control" />
                            </div>
                              {{-- <input type="number" name="quantity" class="add-to-cart" style="width: 18vh" value="1" min="1"> --}}

                          </div>
                          

                          <div class="col-md-4">
                            <button class="add-to-cart btn btn-default" type="submit">add to cart</button>
                              {{-- <input type="submit" class="add-to-cart" style="width: 50vh" value="Add To Cart"> --}}

                          </div>
                           
                      </div>
                     {{-- <a href="" class="add">View details</a> --}}
                     {{-- <a href="{{url('add_cart',$products->id)}}" class="add-to-cart">Add to Cart</a> --}}
                     </form>
                    
                    {{-- <button class="like btn btn-default" type="button"><span class="fa fa-heart"></span></button> --}}
                </div>
					</div>
				</div>
			</div>
		</div>
	</div>
  </body>
</html>





































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