
<!DOCTYPE html>
<html lang="en" class="no-js">
   <head>
      <!-- Meta -->
      <title>{{$project->title}}</title>
      <meta charset="UTF-8">
      <meta name="description" content="Free HTML template">
      <meta name="keywords" content="HTML, template, free">
      <meta name="author" content="Nicola Tolin">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- Styles -->
      <link href="../../resources/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
      <link href="../..resources/vendor/animate/animate.css" rel="stylesheet" type="text/css"/>
      <link href="../../resources/css/project.css" rel="stylesheet" type="text/css"/>
      <link rel="icon" href="../../resources/images/art.png">
   </head>
   <body>
      <!-- Navbar -->
      <div class="navigation container-fluid">
         <div class="row justify-content-md-center ">
            <div class="col-md-10 col-sm-12">
               <nav class="navbar navbar-default">
                  <div class="button_container" id="toggle">
                     <span class="black top"></span>
                     <span class="black middle"></span>
                     <span class="black bottom"></span>
                  </div>
                  <div class="overlay" id="overlay">
                     <nav class="overlay-menu">
                        <ul>
                           <li><a href="{{route('main')}}">main</a></li>
                           <li><a href="{{route('about')}}">about us</a></li>
                           <li><a href="{{route('contact')}}">contact</a></li>
                        </ul>
                     </nav>
                  </div>
               </nav>
            </div>
         </div>
      </div>
      <!-- End Navbar -->
      <!-- Portfolio-Text -->
      <div class="container-fluid pb-5 portfolio-text" >
            <div class="col-md-7 offset-md-1 col-sm-12">
               <h2>{{$project->title}}
               </h2>
            </div>
            <div class="col-md-7 offset-md-1 col-sm-12" >
               <p class="pb-5 pt-5">
            {{$project->description}}    
            </p>
         </div>
      </div>
      <!-- End Portfolio-Text -->
      <!-- Gallery -->
      <div class="scrollblock" >
         <div class="container-fluid pt-10" >
            <div class="row justify-content-md-center ">
               <div class="col-md-10 col-sm-12">
                  <div class="card-columns">
                     <div class="card-body">
                           <img class="card-img-top" src="{{ asset('storage'.$project->path) }}" alt="">
                           <div class="reveal h-100 p-2 d-flex ">
                           </div>
                     </div>
                     <div class="card-body">
                        <img class="card-img-top" src="{{ asset('storage'.$project->path2) }}" alt="">
                        <div class="reveal h-100 p-2 d-flex ">
                        </div>
                  </div>
                  <div class="card-body">
                     <img class="card-img-top" src="{{ asset('storage'.$project->path3) }}" alt="">
                     <div class="reveal h-100 p-2 d-flex ">
                     </div>
               </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- End Gallery -->
      <!-- Footer -->
         <div class="col-md-7 offset-md-1 col-sm-12" >
            <p class="pb-5 pt-5">
               If you like this piece we can make one for you in the style you want ^ ^
            </p>
      </div>
      <!-- End Footer -->
      <!-- Javascript -->
      <script src="../../resources/vendor/jquery.min.js"></script>
      <script src="../../resources/vendor/bootstrap/js/bootstrap.min.js"></script>
      <script src="../../resources/vendor/wow/wow.js"></script>
      <script src="../../resources/js/script.js"></script>
      <script>
         new WOW().init();
      </script>
      <!-- End Javascript -->
   </body>
</html>