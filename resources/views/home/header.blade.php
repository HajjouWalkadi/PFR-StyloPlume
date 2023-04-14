<header class="header_section">
            <div class="container">
               <nav class="navbar navbar-expand-lg custom_nav-container ">
                  {{-- <a class="navbar-brand" style="color: black" href="?"><img style="width :3rem" src="images/logo.png" alt=""></a> --}}
                  <a class="navbar-brand" style="color: black" href="{{url('/')}}">Stylo Plume</a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class=""> </span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav">
                        <li class="nav-item active">
                           <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
                        </li>
                       {{-- <li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">Pages <span class="caret"></span></a>
                           <ul class="dropdown-menu">
                              <li><a href="">About</a></li>
                           </ul>
                        </li> --}}
                        <li class="nav-item">
                           <a class="nav-link" href="{{route('get_product')}}">Products</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="{{route('aboutPage')}}">About</a>
                        </li>

                        <li class="nav-item">
                           <a class="nav-link" href="{{route('contactPage')}}">Contact</a>
                        </li>

                        


                        <li class="nav-item">
                           <a class="nav-link" href="{{url('cart')}}"><i class="bi bi-cart-fill"></i></a>
                           <span class="badge badge-pill badge-danger" style="font-size: 10px; text-align:end; position:absolute; top:20; right:30;">1</span>
                        </li>
                       


                        <form class="form-inline">
                           <button class="btn  my-2 my-sm-0 nav_search-btn" style="font-size: 15px" type="submit">
                           {{-- <i class="fa fa-search" aria-hidden="true"></i> --}}
                           <i class="bi bi-search"></i>
                           </button>
                        </form>

                        @if (Route::has('login'))

                        @auth

                        <li class="nav-item">
                           <x-app-layout></x-app-layout>
                        </li>

                        @else

                        <li class="nav-item">
                           <a class="btn btn-primary" id="logincss" href="{{ route('login') }}">Login</a>
                        </li>
                        <li class="nav-item">
                           <a class="btn btn-primary" href="{{ route('register') }}">Register</a>
                        </li>
                        @endauth

                        @endif

                        
                     </ul>
                  </div>
               </nav>
            </div>
         </header>