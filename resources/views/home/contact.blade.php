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
    <!--Section: Contact v.2-->
<section class="mb-4" >

    <!--Section heading-->
    <h1 class="h1-responsive font-weight-bold text-center my-4" style="font-size: 3rem">Contact us</h1>
    <!--Section description-->
    <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
        a matter of hours to help you.</p>

    {{-- <div class="row"> --}}

 <!-- Bootstrap 5 Contact Form Snippet -->

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
  
        
  
                <form id="contactForm" data-sb-form-api-token="API_TOKEN">
  
                  <!-- Name Input -->
                  <div class="form-floating mb-3">
                    <input class="form-control" id="name" type="text" placeholder="Name" data-sb-validations="required" />
                    {{-- <label for="name">Name</label> --}}
                    <div class="invalid-feedback" data-sb-feedback="name:required">Name is required.</div>
                  </div>
  
                  <!-- Email Input -->
                  <div class="form-floating mb-3">
                    <input class="form-control" id="emailAddress" type="email" placeholder="Email Address" data-sb-validations="required,email" />
                    {{-- <label for="emailAddress">Email Address</label> --}}
                    <div class="invalid-feedback" data-sb-feedback="emailAddress:required">Email Address is required.</div>
                    <div class="invalid-feedback" data-sb-feedback="emailAddress:email">Email Address Email is not valid.</div>
                  </div>
  
                  <!-- Message Input -->
                  <div class="form-floating mb-3">
                    <textarea class="form-control" id="message" type="text" placeholder="Message" style="height: 10rem;" data-sb-validations="required"></textarea>
                    {{-- <label for="message">Message</label> --}}
                    <div class="invalid-feedback" data-sb-feedback="message:required">Message is required.</div>
                  </div>
  
                  <!-- Submit success message -->
                  <div class="d-none" id="submitSuccessMessage">
                    <div class="text-center mb-3">
                      <div class="fw-bolder">Form submission successful!</div>
                      <p>To activate this form, sign up at</p>
                      <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                    </div>
                  </div>
  
                  <!-- Submit error message -->
                  <div class="d-none" id="submitErrorMessage">
                    <div class="text-center text-danger mb-3">Error sending message!</div>
                  </div>
  
                  <!-- Submit button -->
                  <div class="d-grid">
                    <button class="btn btn-primary btn-lg disabled" id="submitButton" type="submit">Submit</button>
                  </div>
                </form>
  
              </div>
            </div>
  
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- CDN Link to SB Forms Scripts -->
  <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

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

