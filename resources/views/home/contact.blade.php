<!DOCTYPE html>
<html lang="en">
<head>

    <style>

.bg-image {
  background-image: url('https://i.pinimg.com/474x/f6/a9/58/f6a958cc0bb5ea53db40b9cab1a7a0a7.jpg');
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
}
    </style>
    @include('home.csshome')
</head>
<body>
    @include('home.header')
<section class="mb-4" >

 
    <h1 class="h1-responsive font-weight-bold text-center my-4" style="font-size: 3rem">Contact us</h1>
    
    <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
        a matter of hours to help you.</p>



<div class="container-fluid px-5 my-5">
    <div class="row justify-content-center">
      <div class="col-xl-10">
        <div class="card border-0 rounded-3 shadow-lg overflow-hidden"  style="background-color: #E2A879">
          <div class="card-body p-0" >
            <div class="row g-0" >
              <div class="col-sm-6 d-none d-sm-block bg-image"></div>
              <div class="col-sm-6 p-4">
                <div class="text-center" >
                  <div class="h3 fw-light mb-5" style="font-family: 'Playfair Display', serif; font-size:3rem" >Contact Form</div>
                </div>
  
        

                <form method="POST" action="{{ route('contact.us.store') }}" id="contactUSForm">
                  {{ csrf_field() }}
                    
                  <div class="row">
                      <div class="col-md-6">
                          <div class="form-group">
                              <strong>Name:</strong>
                              <input type="text" name="name" class="form-control" placeholder="Name" value="{{ old('name') }}">
                              @if ($errors->has('name'))
                                  <span class="text-danger">{{ $errors->first('name') }}</span>
                              @endif
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group">
                              <strong>Email:</strong>
                              <input type="text" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}">
                              @if ($errors->has('email'))
                                  <span class="text-danger">{{ $errors->first('email') }}</span>
                              @endif
                          </div>
                      </div>
                  </div>
                  <div class="row">
                  
                      <div class="col-md-6">
                        
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md-12">
                          <div class="form-group">
                              <strong>Message:</strong>
                              <textarea name="message" rows="3" class="form-control">{{ old('message') }}</textarea>
                              @if ($errors->has('message'))
                                  <span class="text-danger">{{ $errors->first('message') }}</span>
                              @endif
                          </div>  
                      </div>
                  </div>
           
                  <div class="form-group text-center">
                      <button class="btn btn btn-submit" style="background-color: #AE9D70">Submit</button>
                  </div>
              </form>
  
              </div>
            </div>
  
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

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
</html>

