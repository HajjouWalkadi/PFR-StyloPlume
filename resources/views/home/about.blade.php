<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="style.css">

  <style>

    .bg-image {
      background-image: url('https://i.pinimg.com/564x/bf/ae/0d/bfae0d96280c4d3b62d3945dad360106.jpg');
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
    }
        </style>



        @include('home.csshome')

    
</head>
<body>
  @include('home.header')



  <div class="container-fluid px-5 my-5">
    <div class="row justify-content-center">
      <div class="col-xl-10">
        <div class="card border-0 rounded-3 shadow-lg overflow-hidden"  style="background-color: #559B9F">
          <div class="card-body p-0" >
            <div class="row g-0" >
              <div class="col-sm-6 d-none d-sm-block bg-image"></div>
              <div class="col-sm-6 p-4">
                <div class="text-center" >
                  <div class="h3 fw-light mb-5" style="font-family: 'Playfair Display', serif; font-size:3rem" >About Us</div>
                </div>
  


                <div class="container">
                  <div class="row " >
                    <div class="col-lg-12">
                      <p> <span style="font-family: 'Southernsky', sans-serif; font-size:1rem">“StyloPlume”</span> est une boutique en ligne de fournitures de bureau ! Nous offrons une vaste sélection de produits pour vous aider à rester organisé et à travailler efficacement. Que vous soyez étudiant, professionnel ou simplement un passionné de papeterie, nous avons tout ce dont vous avez besoin pour écrire, dessiner, prendre des notes ou planifier.<br>
                        Nous nous efforçons de vous offrir un service clientèle de qualité supérieure, avec des prix compétitifs et une livraison rapide. Nous avons également une politique de retour facile pour vous assurer que vous êtes entièrement satisfait de votre achat.
                      </p>
                    </div>
                  </div>
                </div>
        
  
                {{-- <form id="contactForm" data-sb-form-api-token="API_TOKEN">
  
                  <div class="form-floating mb-3">
                    <input class="form-control" id="name" type="text" placeholder="Name" data-sb-validations="required" />
                   
                    <div class="invalid-feedback" data-sb-feedback="name:required">Name is required.</div>
                  </div>
  
              
                  <div class="form-floating mb-3">
                    <input class="form-control" id="emailAddress" type="email" placeholder="Email Address" data-sb-validations="required,email" />
                    
                    <div class="invalid-feedback" data-sb-feedback="emailAddress:required">Email Address is required.</div>
                    <div class="invalid-feedback" data-sb-feedback="emailAddress:email">Email Address Email is not valid.</div>
                  </div>
       
                </form> --}}
  
              </div>
            </div>
  
          </div>
        </div>
      </div>
    </div>
  </div>















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