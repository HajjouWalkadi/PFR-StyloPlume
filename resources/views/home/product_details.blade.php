<!DOCTYPE html>
<html>
   <head>
    <base href="/public">
   
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="images/favicon.png" type="">
      <title>Stylo Plume</title>
   
      <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
 
      <link href="/home/css/font-awesome.min.css" rel="stylesheet" />

      <link href="/home/css/style.css" rel="stylesheet" />

      <link href="/home/css/responsive.css" rel="stylesheet" />
      @include('home.csshome')
      <div class="hero_area">

         @include('home.header')

        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Product Detail</title>
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
				 		</div>
						
					</div>
					<div class="details col-md-6">
						<h3 class="product-title">{{$product->title}}</h3>
					
						<p class="product-description">{{$product->description}}</p>
                        <div class="d-flex flex-row">
                            @if($product->discount_price!=null)

                            <h4 class="price">Current price: <span> {{$product->discount_price}} MAD</span></h4>

                            <h4 style="text-decoration: line-through;" class="price">{{$product->price}} MAD</h4>

                            @else
                            <h4 class="price">Current price: <span>{{$product->price}} MAD</span></h4>
                            @endif
                        </div>
                        @if($product->quantity==0)
                            <h4 style="color: rgb(231, 58, 58)">Out of stock</h4>
                        @else
                            <h4 style="color: rgb(81, 151, 81) ">In stock</h4>
                        @endif
                        <h5><strong>Category:</strong> {{$product->category->category_name}}</h5>
						
                        <h5><strong>Quantity:</strong></h5>
                  <div class="action">
                    <form action="{{url('add_cart',$product->id)}}" method="POST">
                      @csrf

                      <div class="row">
                          <div class="col-md-4">
                            <div class="form-outline">
                              <input id="form1" min="0" max="{{$product->quantity}}" name="quantity" value="1" type="number" class="form-control" />
                            </div>

                          </div>
                          

                          <div class="col-md-4">
                            @if($product->quantity==0)
                               <button class="add-to-cart btn btn-default" type="submit" disabled>add to cart</button>
                            @else
                                <button class="add-to-cart btn btn-default" type="submit" >add to cart</button>
                            @endif

                          </div>
                           
                      </div>
                     </form>
                </div>
					</div>
				</div>
			</div>
		</div>
	</div>
  </body>
</html>

      
      @include('home.footer')
      <!-- footer end -->
      <div class="cpy_">
         <p class="mx-auto">© 2023 All Rights Reserved By Stylo Plume<br></p>
      </div>
     
      <script src="/home/js/jquery-3.4.1.min.js"></script>
     
      <script src="/home/js/popper.min.js"></script>
      
      <script src="/home/js/bootstrap.js"></script>
      
      <script src="/home/js/custom.js"></script>
   </body>
</html>