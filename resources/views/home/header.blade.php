

<head>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
      @include('home.csshome')
</head>

<header class="header_section">
            <div class="container">
               <nav class="navbar navbar-expand-lg custom_nav-container ">
                  <a class="navbar-brand" style="color: black" href="{{url('/')}}">Stylo Plume</a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class=""> </span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav">
                        <li class="nav-item active">
                           <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
                        </li>
                     
                        <li class="nav-item">
                           <a class="nav-link" href="{{route('get_product')}}">Products</a>
                        </li>

                     
                       @php
                           use App\Models\Category;
                           $categories = Category::get();
                       @endphp
                         <li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Categories
                           </a>
                           <ul class="dropdown-menu">
                              @foreach($categories as $category)
                                <li><a class="dropdown-item" href="{{route('FilterByCategory', $category->category_name)}}">{{$category->category_name}}</a></li>
                              @endforeach
                           </ul>
                         </li>

                        <li class="nav-item">
                           <a class="nav-link" href="{{route('aboutPage')}}">About</a>
                        </li>

                        <li class="nav-item">
                           <a class="nav-link" href="{{route('contactPage')}}">Contact</a>
                        </li>

                        


                        <li class="nav-item">
                           <a class="nav-link" href="{{url('cart')}}"><i class="bi bi-cart-fill"></i></a>
                           {{-- <span class="badge badge-pill badge-danger" style="font-size: 10px; text-align:end; position:absolute; top:20; right:30;">{{ $productCount = app('App\Http\Controllers\CartController')->CartCount(Session::get('user')->id)}}</span> --}}
                        </li>
                       


                        {{-- <form class="form-inline">
                           <button class="btn  my-2 my-sm-0 nav_search-btn" style="font-size: 15px" type="submit">
                          
                           <i class="bi bi-search"></i>
                           </button>
                        </form> --}}

                        @if (Route::has('login'))

                        @auth

                        <li class="nav-item">
                           <x-app-layout></x-app-layout>
                        </li>

                        @else

                        <li class="nav-item">
                           <a class="btn btn" style="background-color: #AC7088" id="logincss" href="{{ route('login') }}">Login</a>
                        </li>
                        <li class="nav-item">
                           <a class="btn btn" style="background-color: #AC7088" href="{{ route('register') }}">Register</a>
                        </li>
                        @endauth

                        @endif

                        
                     </ul>
                  </div>
               </nav>
            </div>
         </header>