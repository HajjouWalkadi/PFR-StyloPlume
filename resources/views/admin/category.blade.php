<!DOCTYPE html>
<html lang="en">
  <head>

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
    <!-- Required meta tags -->
    @include('admin.css')

    <style type="text/css">

        .div_center
        {
            text-align: center;
            padding-top: 40px;
        }
        .h2_font{
            font-size: 40px;
            padding-bottom: 40px;
        }
        .input_color{
            color: black;
        }
        .center{
            margin: auto;
            width: 50%;
            text-align: center;
            margin-top: 30px;
            border: 2px solid white;
        }

    </style>
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
            <h2 class="h2_font">Add Category</h2>

            <form action="{{url('/add_category')}}" method="POST">
                @csrf
                <input class="input_color" type="text" name="category" placeholder="Write category name">
                <input type="submit" class="btn btn-primary" name="submit" value="Add Category">
            </form>

          </div>

          
          <table class="table table-dark table-hover table-striped" id="myTable">
            <thead> 
              <tr class="th_color">
                  <th class="text-center" scope="col">Category name</th>
                  <th class="text-center" scope="col">Action</th>
              </tr>
              </thead>
              <tbody>

                @foreach($data as $data)

            <tr>
                <td>{{$data->category_name}}</td>
                <td>
                  <a onclick="return confirm('Are You Sure To Delete This')" class="btn btn-danger" href="{{url('delete_category',$data->id)}}">Delete</a>
                </td>
            </tr>

            @endforeach
            </tbody>
          </table>
          {{--  --}}


          </div>
        </div>

    
    @include('admin.script')


    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
    <script>
      let table = new DataTable('#myTable', {
        responsive: true
      });
    </script>
  </body>
</html>