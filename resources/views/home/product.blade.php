<section class="product_section layout_padding">
         <div class="container">
            <div class="heading_container heading_center">
               <h2>
                  Our <span>products</span>
               </h2>
            </div>
            

            <div class="row">
                @foreach($product as $product)
               {{-- <div class="col-md-3 col-sm-6">
                   <div class="product-grid">
                       <div class="product-image">
                           <a href="#" class="image">
                               <img src="https://i.pinimg.com/564x/57/11/35/571135a25988e6e06a0b1cb572eea173.jpg">
                           </a>
                           <span class="product-discount-label">-23%</span>
                           <ul class="product-links">
                               <li><a href="#"><i class="fa fa-search"></i></a></li>
                               <li><a href="#"><i class="fa fa-heart"></i></a></li>
                               <li><a href="#"><i class="fa fa-random"></i></a></li>
                           </ul>
                           <a href="" class="add-to-cart">Add to Cart</a>
                       </div>
                       <div class="product-content">
                           <h3 class="title"><a href="#">Women's Blouse Top</a></h3>
                           <div class="price">$53.55 <span>$68.88</span></div>
                       </div>
                   </div>
               </div> --}}
               <div class="col-md-3 col-sm-6">
                   <div class="product-grid">
                       <div class="product-image">
                           <a href="#" class="image">
                               <img src="product/{{$product->image}}" alt="">
                           </a>
                           <ul class="product-links">
                               <li><a href="#"><i class="fa fa-search"></i></a></li>
                               {{-- <li><a href="#"><i class="fa fa-heart"></i></a></li> --}}
                               <li><a href="#"><i class="fa fa-random"></i></a></li>
                           </ul>
                           <a href="" class="add-to-cart">Add to Cart</a>
                       </div>
                       <div class="product-content">
                           <h3 class="title"><a href="#">{{$product->title}}</a></h3>
                           <div class="price">MAD {{$product->price}}</div>
                       </div>
                   </div>
               </div>
               @endforeach
               
           </div>


            
         </div>
      </section>