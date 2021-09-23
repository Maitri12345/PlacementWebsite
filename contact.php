<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/bootstrap.min.js" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    />
    
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css"
    />
    <!--Font Awesome starts here-->
    <script
      src="https://kit.fontawesome.com/179bd1eb00.js"
      crossorigin="anonymous"
    ></script>

    <link rel="stylesheet" href="./assets/floating-wpp.min.css" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="style1.css" />
    
    <title>Contact-Us</title>
  </head>
  <body>
    
    <nav class="navbar navbar-expand-lg navbar-light">
      
      <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Quient Technologies</title>
       
        <!--font awesome cdn link-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

        <!--custom css file link-->
        <link rel="stylesheet" href="style1.css">

        <link rel="stylesheet" href="./assets/floating-wpp.min.css" />
        <link rel="stylesheet" href="style.css">
        <script
      src="https://kit.fontawesome.com/179bd1eb00.js"
      crossorigin="anonymous"
    ></script>

</head>
<body>
<!--header section starts-->
<header>
    <nav class="navbar navbar-expand-lg navbar-light"></nav>
    <div id="menu-bar" class="fas fa-bars"></div>

    <a href="#" class="logo"><span>Q</span>UIENT</a>
    <nav class="navbar">
        <a href="home.html">Home</a>
        <a href="about.html">About Us</a>
        <a href="gallery.html">Gallery</a>
        <a href="Testimonial.html">Testimony</a>
        <a href="contact.php">Contact Us</a>
    </nav>
    <div class="icons">
        <i class="fas fa-login" id="search-btn"></i>
        <i class="fas fa-login" id="login-btn"></i>
    </div>

   

</header>
      <button
        class="navbar-toggler bg-white"
        type="button"
        data-toggle="collapse"
        data-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
          <a class="nav-item nav-link active text-white" href="home.html"
            >Home <span class="sr-only">(current)</span></a
          >
          <a class="nav-item nav-link ml-5 text-white" href="about.html" target="_blank"
            >About</a
          >
          <a class="nav-item nav-link ml-5 text-white" href="Testimonial.html" target="_blank"
            >Testimony</a
          >
          <a class="nav-item nav-link ml-5 text-white" href="gallery.html"
            >Gallery</a
          >
          <a
            class="nav-item nav-link ml-5 text-white"
            href="contact.php"
            target="_blank"
            >Contact Us</a
          >
        </div>
      </div>
    </nav>
      <div id="contact-img">
        <img src="assets/contact.jpg" alt="contact-us" />

        <div class="text">
          <h1>GET IN TOUCH</h1>
          <p>We would love to hear it from you on your query.</p>
        </div>
      </div>
      <h1 class="m-5">Contact Us</h1>
      
      <form class="con-container" method="post" role="form">
        <div id="contact-form">
          <div
            id="contact-about"
            class="d-flex justify-content-between flex-column"
          >
            <div class="name">
              <input type="text" name="name" class="p-3" placeholder="Enter Name..." />
            </div>
            <div class="phone">
              <input
                name="phone"
                class="p-3"
                placeholder="Enter your number..."
              />
            </div>
            <div class="email">
              <input type="email" name="email" class="p-3" placeholder="Enter E-mail..." />
            </div>
          </div>
          <div id="contact-message">
            <input type="text" name="message" placeholder="Enter message..." />
          </div>
        </div>
        <div class="text-center">
          <button name="submit" type="submit" id="submit-btn" class="m-5">Submit</button>
        </div>
      </form>
      <?php 
            if(isset($_POST['submit'])){
                  include_once 'function.php';
                $obj=new Contact();
                $res=$obj->contact_us($_POST);
                if($res==true){
                    echo "<script>alert('Query successfully Submitted.Thank you')</script>";
                }else{
                    echo "<script>alert('Something Went wrong!!')</script>";
                }
            }
      ?>
    </main>

    <div id="watsapp" class="mb-5"></div>

     <footer class="d-flex justify-content-around">
      <div>
        <div class="mb-4">
          <span><i class="fas fa-map-marker-alt mr-4"></i></span> Banglore,
          Karnataka
        </div>
        <div class="mb-4">
          <span><i class="fas fa-phone mr-4"></i></span> +91 7878787878
        </div>
        <div class="mb-4">
          <span><i class="fab fa-whatsapp mr-4"></i></span> +91 8889994440
        </div>
        <div class="mb-4">
          <span><i class="fas fa-envelope mr-4"></i></span>
         quient@getplaced.com
        </div>
      </div>
      <div>
      <h3 class="mb-4">About us</h3>
        <p class="w-40">
          Quient training is an enthusiastic group intended to train
          students in colleges that are denied the privilege of Placement
          training, A group of Enthusiasts now have a vision of training
          students that don’t have access to placement training that can
          help them get placed, and thereby build their future.
        </p>
        <div class="mt-3">
          <span><i class="fab fa-facebook-square ml-5"></i></span
          ><span><i class="fab fa-instagram-square ml-5"></i></span
          ><span><i class="fab fa-linkedin ml-5"></i></span
          ><span><i class="fab fa-twitter ml-5"></i></span>
        </div>
      </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="./assets/floating-wpp.min.js"></script>
    <script src="main.js"></script>

  </body>
</html>
