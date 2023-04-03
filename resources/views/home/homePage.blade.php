<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('home.csshome')
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
        @include('home.header')
      <!-- partial -->
        @include('home.slider')
        <!-- partial -->
        @include('home.why')

        @include('home.new_arrival')

        @include('home.product')

        {{-- @include('home.subscribe') --}}

        @include('home.client')

        @include('home.footer')

    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>