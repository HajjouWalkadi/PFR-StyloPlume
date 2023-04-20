<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')

    <style type="text/css">

        .div_center{
            text-align: center;
            padding-top: 40px;
        }
        .font_size{
            font-size: 40px;
            padding-bottom: 40px;
        }
        .text_color{
            color: black;
        }
        .label{
            display: inline-block;
            width: 200px;
        }
        .div_design{
            padding-bottom: 15px;
        }
       

    </style>

    <script defer src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.3/parsley.min.js"></script>
    
  </head>
  <body>
    <div class="container-scroller">
      
        @include('admin.sidebar')
        
        @include('admin.header')
        
        <div class="main-panel">
          <div class="content-wrapper">

           @if(session()->has('message'))

          <div class="alert alert-success">

             <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
            {{session()->get('message')}}
          </div>

          @endif

          <div class="div_center">

            <h2 class="font_size">Add Product</h2>
            <div class="modal-dialog">
          <div class="modal-content">
            
              <div class="modal-header">
                <h5 class="modal-title" id="modal_title">Add New Product</h5>
                </div>
              <div class="modal-body">

            <form action="{{url('/add_product')}}" method="POST" enctype="multipart/form-data" data-parsley-validate>

            @csrf
            <div class="mb-3 div_design">

            <label for="">Product Title</label>
            <input class="form-control text_color" type="text" name="title" placeholder="Write a title" required data-parsley-required>

            </div>
            <div class="mb-3 div_design">

            <label for="">Product Description</label>
            <input class="form-control text_color" type="text" name="description" placeholder="Write a Description" required data-parsley-required >

            </div>
            <div class="mb-3 div_design">

            <label for="">Product Price</label>
            <input class="form-control text_color" type="number" min="0" name="price" placeholder="Write a price" required data-parsley-required>

            </div>
            <div class="mb-3 div_design">

            <label for="">Discount Price</label>
            <input class="form-control text_color" type="number" name="discount_price" placeholder="Write a discount" data-parsley-type="number">

            </div>
            <div class="mb-3 div_design">

            <label for="">Product Quantity</label>
            <input class="form-control text_color" type="number" min="0" name="quantity" placeholder="Write a quantity" required data-parsley-required>

            </div>
            
            <div class="mb-3 div_design">

            <label for="">Product Category :</label>
            <select  class="form-control text_color" name="category" id="" required data-parsley-required> 

            
               <option value="" selected="">Add a category here</option>  

               @foreach($category as $category)

              <option value="{{$category->id}} ">{{$category->category_name}}</option>  
              @endforeach
            </select>
            </div>
            <div class="mb-3 div_design">

            <label for="">Product Image Here :</label>
            <input type="file" name="image" required>

            </div>
            <div class="mb-3 div_design">

            <input type="submit" value="Add Product" class="btn btn-primary">

            </div>

            </form>

          </div>
          </div>
        </div>

        
    @include('admin.script')
    
  </body>
</html>