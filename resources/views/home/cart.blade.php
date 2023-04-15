<!DOCTYPE html>
<html lang="en">
<head>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/brands.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js" ></script>


    @include('home.csshome')
</head>
<body>
    @include('home.header')


    

<section class="h-100 h-custom" style="background-color: #eee;">

  @if(session()->has('message'))

          <div class="alert alert-success">

             <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
            {{session()->get('message')}}
          </div>

          @endif

    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col">
          <div class="card">
            <div class="card-body p-4">
  
              <div class="row">
  
                <div class="col-lg-7">
                  <h5 class="mb-3"><a href="{{route('get_product')}}" class="text-body"><i
                        class="fas fa-long-arrow-alt-left me-2"></i>Continue shopping</a></h5>
                  <hr>
  
                  <div class="d-flex justify-content-between align-items-center mb-4">
                    <div>
                      <p class="mb-1">Shopping cart</p>
                      <p class="mb-0">You have {{count($carts)}} items in your cart</p>
                    </div>
                  </div>

                @foreach($carts as $cart)
                      <div class="card mb-3">
                        <div class="card-body">
                          <div class="d-flex justify-content-between">
                            <div class="d-flex flex-row align-items-center">
                              <div>
                                <img src="/product/{{$cart->image}}" class="img-fluid rounded-3" alt="" style="width: 100px;">
                              </div>
                              <div class="ms-3 ml-3">
                                <h5>{{ $cart->product_title }}</h5>
                              </div>
                            </div>
                            <div class="d-flex flex-row align-items-center">
                              <div style="width: 50px;">
                                <h5 class="fw-normal mb-0">{{ $cart->quantity }}</h5>
                              </div>
                              <div style="width: 80px;">
                                <h5 class="mb-0">{{ $cart->price }} MAD</h5>
                              </div>
                              <a onclick="return confirm('Are you sure to retire this product?')" href="{{url('retire_cart',$cart->id)}}" ><i class="bi bi-trash-fill"></i></a>
                            </div>
                          </div>
                        </div>
                      </div>

                     
                      @endforeach
                      @php($totalprice = 0)
                      @foreach($carts as $cart)
                          <?php $totalprice = $totalprice + $cart->price; ?>
                      @endforeach

                      <button type="button" class="btn btn-info btn-block btn-lg">
                        <div class="d-flex justify-content-between">
                          <a href="{{url('cash_order')}}" onclick="return confirm('Are you sure to order this')"><span>Cash On Delivery <i class="bi bi-truck"></i></span></a>
                        </div>
                      </button>

                      
                      <button type="button" id="payment" class="btn btn-info btn-block btn-lg text-left">
                         <a href="{{url('stripe',$totalprice)}}"> Payment By Card <i class="bi bi-credit-card"></i></a>
                      </button>

  
                </div>
                <div class="col-lg-5">
  
                  <div id="cardForm" class="card bg-secondary text-white rounded-3">
                    <div class="card-body">

                      <div class="d-flex justify-content-between align-items-center mb-4 ">
                        <h5 class="mb-0">Amount</h5>
                      </div>
  
                      <?php $totalprice = 0; ?>
                      @foreach($carts as $cart)
                          <?php $totalprice = $totalprice + $cart->price; ?>
                      @endforeach
                      

                      
                      <hr class="my-4">
  
                      <div class="d-flex justify-content-between mb-4">
                        <p class="mb-2">Total</p>
                        <p class="mb-2">{{$totalprice}} MAD</p>
                      </div>
  
                    </div>
                  </div>
  
                </div>
  
              </div>
  
            </div>
          </div>
        </div>
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






{{-- <script>
  let payment = document.getElementById('payment')
  let cardForm = document.getElementById('cardForm')
  payment.addEventListener('click', function() {
    cardForm.classList.add('d-flex')
  })

</script> --}}