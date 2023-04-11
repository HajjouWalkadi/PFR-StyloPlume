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
                  <h5 class="mb-3"><a href="#!" class="text-body"><i
                        class="fas fa-long-arrow-alt-left me-2"></i>Continue shopping</a></h5>
                  <hr>
  
                  <div class="d-flex justify-content-between align-items-center mb-4">
                    <div>
                      <p class="mb-1">Shopping cart</p>
                      <p class="mb-0">You have {{count($carts)}} items in your cart</p>
                    </div>
                    {{-- <div>
                      <p class="mb-0"><span class="text-muted">Sort by:</span> <a href="#!"
                          class="text-body">price <i class="fas fa-angle-down mt-1"></i></a></p>
                    </div> --}}
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
                      <?php $totalprice = 0; ?>
                      @foreach($carts as $cart)
                          <?php $totalprice = $totalprice + $cart->price; ?>
                      @endforeach
                      {{-- <h1> total: {{$totalprice}}</h1> --}}

                      <button type="button" class="btn btn-info btn-block btn-lg">
                        <div class="d-flex justify-content-between">
                          <a href="{{url('cash_order')}}"><span>Cash On Delivery <i class="bi bi-truck"></i></span></a>
                        </div>
                      </button>

                      
                      <button type="button" id="payment" class="btn btn-info btn-block btn-lg text-left">
                         <a href="{{url('stripe',$totalprice)}}"> Payment By Card <i class="bi bi-credit-card"></i></a>
                      </button>

  
                </div>
                <div class="col-lg-5">
  
                  <div id="cardForm" class="card bg-secondary text-white rounded-3">
                    <div class="card-body">

                      {{-- <button type="button" class="btn btn-info btn-block btn-lg">
                        <div class="d-flex justify-content-between">
                          <span>Cash On Delivery <i class="bi bi-truck"></i></span>
                        </div>
                      </button> --}}




                      <div class="d-flex justify-content-between align-items-center mb-4 ">
                        <h5 class="mb-0">Amount</h5>
                        {{-- <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-6.webp"
                          class="img-fluid rounded-3" style="width: 45px;" alt="Avatar"> --}}
                      </div>
  
                      {{-- <p class="small mb-2">Card type</p>
                      <a href="#!" type="submit" class="text-white"><i
                          class="fab fa-cc-mastercard fa-2x me-2"></i></a>
                      <a href="#!" type="submit" class="text-white"><i
                          class="fab fa-cc-visa fa-2x me-2"></i></a>
                      <a href="#!" type="submit" class="text-white"><i
                          class="fab fa-cc-amex fa-2x me-2"></i></a>
                      <a href="#!" type="submit" class="text-white"><i class="fab fa-cc-paypal fa-2x"></i></a>
  
                      <form class="mt-4">
                        <div class="form-outline form-white mb-4">
                          <input type="text" id="typeName" class="form-control form-control-lg" siez="17"
                            placeholder="Cardholder's Name" />
                          <label class="form-label" for="typeName">Cardholder's Name</label>
                        </div>
  
                        <div class="form-outline form-white mb-4">
                          <input type="text" id="typeText" class="form-control form-control-lg" siez="17"
                            placeholder="1234 5678 9012 3457" minlength="19" maxlength="19" />
                          <label class="form-label" for="typeText">Card Number</label>
                        </div>
  
                        <div class="row mb-4">
                          <div class="col-md-6">
                            <div class="form-outline form-white">
                              <input type="text" id="typeExp" class="form-control form-control-lg"
                                placeholder="MM/YYYY" size="7" id="exp" minlength="7" maxlength="7" />
                              <label class="form-label" for="typeExp">Expiration</label>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-outline form-white">
                              <input type="password" id="typeText" class="form-control form-control-lg"
                                placeholder="&#9679;&#9679;&#9679;" size="1" minlength="3" maxlength="3" />
                              <label class="form-label" for="typeText">Cvv</label>
                            </div>
                          </div>
                        </div>
  
                      </form> --}}
  
                      <?php $totalprice = 0; ?>
                      @foreach($carts as $cart)
                          <?php $totalprice = $totalprice + $cart->price; ?>
                      @endforeach
                      

                      
                      <hr class="my-4">
  
                      <div class="d-flex justify-content-between">
                        <p class="mb-2">Subtotal</p>
                        <p class="mb-2">2222</p>
                      </div>
  
                      <div class="d-flex justify-content-between">
                        <p class="mb-2">Shipping</p>
                        <p class="mb-2">$20.00</p>
                      </div>
  
                      <div class="d-flex justify-content-between mb-4">
                        <p class="mb-2">Total(Incl. taxes)</p>
                        <p class="mb-2">{{$totalprice}} MAD</p>
                      </div>
  
                      {{-- <button type="button" class="btn btn-info btn-block btn-lg">
                        <div class="d-flex justify-content-between">
                          <span>{{$totalprice}} MAD</span>
                          <span>Checkout <i class="fas fa-long-arrow-alt-right ms-2"></i></span>
                        </div>
                      </button> --}}
  
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
 <!-- jQery -->
 <script src="home/js/jquery-3.4.1.min.js"></script>
 <!-- popper js -->
 <script src="home/js/popper.min.js"></script>
 <!-- bootstrap js -->
 <script src="home/js/bootstrap.js"></script>
 <!-- custom js -->
 <script src="home/js/custom.js"></script>
</body>






{{-- <script>
  let payment = document.getElementById('payment')
  let cardForm = document.getElementById('cardForm')
  payment.addEventListener('click', function() {
    cardForm.classList.add('d-flex')
  })

</script> --}}