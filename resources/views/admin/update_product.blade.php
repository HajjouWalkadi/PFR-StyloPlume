<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <base href="/public">
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
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')
      <!-- partial -->
        @include('admin.header')
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">

           @if(session()->has('message'))

          <div class="alert alert-success">

             <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
            {{session()->get('message')}}
          </div>

          @endif

          <div class="div_center">

            <h2 class="font_size">Update Product</h2>
            <div class="modal-dialog">
          <div class="modal-content">
            
              <div class="modal-header">
                <h5 class="modal-title" id="modal_title">Update Product</h5>
                </div>
              <div class="modal-body">

            <form action="{{url('/update_product_confirm',$product->id)}}" method="POST" enctype="multipart/form-data">

            @csrf
            <div class="mb-3 div_design">

            <label for="">Product Title</label>
            <input class="form-control text_color" type="text" name="title" placeholder="Write a title" required value="{{$product->title}}">

            </div>
            <div class="mb-3 div_design">

            <label for="">Product Description</label>
            <input class="form-control text_color" type="text" name="description" placeholder="Write a Description" required value="{{$product->description}}">

            </div>
            <div class="mb-3 div_design">

            <label for="">Product Price</label>
            <input class="form-control text_color" type="number" min="0" name="price" placeholder="Write a price" required value="{{$product->price}}">

            </div>
            <div class="mb-3 div_design">

            <label for="">Discount Price</label>
            <input class="form-control text_color" type="number" name="discount_price" placeholder="Write a discount" value="{{$product->discount_price}}">

            </div>
            <div class="mb-3 div_design">

            <label for="">Product Quantity</label>
            <input class="form-control text_color" type="number" min="0" name="quantity" placeholder="Write a quantity" required value="{{$product->quantity}}">

            </div>
            
            <div class="mb-3 div_design">

            <label for="">Product Category :</label>
            <select  class="form-control text_color" name="category" id="" required> 

            
               <option value="{{$product->category}}" selected="">{{$product->category}}</option>  

               @foreach($category as $category)

                <option value="{{$category->category_name}} ">{{$category->category_name}}</option>  
                @endforeach
               
            </select>
            </div>

            <div class="mb-3 div_design">
                <label>Current Product Image</label>
                <img style="margin: auto;" height="100" width="100" src="/product/{{$product->image}}" alt="">
            </div>


            <div class="mb-3 div_design">
                <label>Change Product Image</label>
                <input type="file" name="image">
            </div>


            <div class="mb-3 div_design">

            <input type="submit" value=" Save changes" class="btn btn-primary">

            </div>

            </form>

          </div>
          </div>
        </div>

        

    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>