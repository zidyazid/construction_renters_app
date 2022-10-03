<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- Aos CDN -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <title>Hello, world!</title>
    <style>
        .bg-light-custom{
            background-color: #F8F8F8
        }
    </style>
  </head>
  <body class="">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    	 @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-2 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-light dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-light dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('renter'))
                            <a href="{{ route('renter') }}" class="ml-4 text-sm text-light dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
      </nav>

      <img src="{{ asset('assets/images/backgroundC.png') }}" width="100%" alt="" srcset="">
      
      <center>
        <h1 class="mt-3">
            Gallery
        </h1> 

        <hr>
      </center>

      <div data-aos="fade-left">
          <div class="container-fluid my-3">
              <div class="row d-flex justify-content-start">
                <div class="col-lg-4">
                    <img src="{{ asset('assets/images/alat1.png') }}" width="100%" alt="" srcset="">
                </div>
                <div class="col-lg-6 d-block justify-items-start justify-start">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Velit, eligendi nemo? Dolor amet ex ducimus reprehenderit, tenetur dolores voluptas qui libero sed nesciunt inventore a cum porro laudantium. Voluptatibus, a!
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Velit, eligendi nemo? Dolor amet ex ducimus reprehenderit, tenetur dolores voluptas qui libero sed nesciunt inventore a cum porro laudantium. Voluptatibus, a!
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Velit, eligendi nemo? Dolor amet ex ducimus reprehenderit, tenetur dolores voluptas qui libero sed nesciunt inventore a cum porro laudantium. Voluptatibus, a!
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Velit, eligendi nemo? Dolor amet ex ducimus reprehenderit, tenetur dolores voluptas qui libero sed nesciunt inventore a cum porro laudantium. Voluptatibus, a!
                </div>
            </div>
          </div>
      </div>
      <div data-aos="fade-right">
          <div class="container-fluid">
              <div class="row d-flex justify-content-end">
                <div class="col-lg-6 d-block justify-items-end justify-end">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Velit, eligendi nemo? Dolor amet ex ducimus reprehenderit, tenetur dolores voluptas qui libero sed nesciunt inventore a cum porro laudantium. Voluptatibus, a!
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Velit, eligendi nemo? Dolor amet ex ducimus reprehenderit, tenetur dolores voluptas qui libero sed nesciunt inventore a cum porro laudantium. Voluptatibus, a!
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Velit, eligendi nemo? Dolor amet ex ducimus reprehenderit, tenetur dolores voluptas qui libero sed nesciunt inventore a cum porro laudantium. Voluptatibus, a!
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Velit, eligendi nemo? Dolor amet ex ducimus reprehenderit, tenetur dolores voluptas qui libero sed nesciunt inventore a cum porro laudantium. Voluptatibus, a!
                </div>
                <div class="col-lg-4">
                    <img src="{{ asset('assets/images/alat2.png') }}" width="100%" alt="" srcset="">
                </div>         
            </div>
          </div>
       </div>

       <footer>
           <div class="container-fluid bg-dark text-light py-5">
                Contact Person:
                <ul>
                    <li>
                        Email:
                    </li> 
                    <li>
                        WhatsApp:
                    </li>
                </ul>
           </div>
       </footer>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>