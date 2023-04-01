<!DOCTYPE html>
<html lang="en">
<head>
    {{-- <link rel="stylesheet" href="../../../public/contact/main.css"> --}}
    {{-- <link rel="stylesheet" href="../../../public/home/css/style.css"> --}}
    @include('home.csshome')
</head>
<body style="background-color: beige">
    @include('home.header')
    <!--Section: Contact v.2-->
<section class="mb-4" >
    {{-- url('../../../public/images/copy-space-surrounded-by-stationery.jpg') --}}
    {{-- C:\xampp\htdocs\stylocomm\public\images\copy-space-surrounded-by-stationery.jpg --}}

    <!--Section heading-->
    <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
    <!--Section description-->
    <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
        a matter of hours to help you.</p>

    <div class="row">

        <!--Grid column-->
        <div class="col-md-9 mb-md-0 mb-5">
            <form id="contact-form" name="contact-form" action="mail.php" method="POST">

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0 p-2">
                            <input type="text" id="name" name="name" class="form-control" placeholder="Enter your name">
                            <label for="name" class="">Your name</label>
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0 p-2">
                            <input type="text" id="email" name="email" class="form-control" placeholder="Enter your email">
                            <label for="email" class="" >Your email</label>
                        </div>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-0 p-2">
                            <input type="text" id="subject" name="subject" class="form-control" placeholder="Enter subject">
                            <label for="subject" class="">Subject</label>
                        </div>
                    </div>
                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-12">

                        <div class="md-form p-2">
                            <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea" placeholder="Enter your message"></textarea>
                            <label for="message">Your message</label>
                        </div>

                    </div>
                </div>
                <!--Grid row-->

            </form>

            <div class="text-center text-md-left p-2">
                <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">Send</a>
            </div>
            <div class="status"></div>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-3 text-center">
            <ul class="list-unstyled mb-0">
                <li><i class="bi bi-geo-alt-fill"></i>
                    <p>San Francisco, CA 94126, USA</p>
                </li>

                <li><i class="bi bi-telephone-fill"></i>
                    <p>+ 01 234 567 89</p>
                </li>

                <li><i class="bi bi-envelope-fill"></i>
                    <p>contact@mdbootstrap.com</p>
                </li>
            </ul>
        </div>
        <!--Grid column-->

    </div>

</section>
@include('home.footer')
<!--Section: Contact v.2-->
</body>
</html>

