<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="style.css" />
    <!--Font Awesome-->
    <script
      src="https://kit.fontawesome.com/179bd1eb00.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="./assets/floating-wpp.min.css" />
    <title>Contact us</title>
    <style>
      .form-control{
        height: 60px !important;
        border: 1px solid black !important;
      }
    </style>
  </head>
  <body>
    <main>
      <nav class="navbar navbar-expand-lg navbar-light">
        <h1 class="navbar-brand text-white p-0">Get Placed</h1>
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
            <a class="nav-item nav-link active text-white" href="index.html" target="_blank"
              >Home <span class="sr-only">(current)</span></a
            >
            <a class="nav-item nav-link ml-5 text-white" href="#" target="_blank">About</a>
            <a class="nav-item nav-link ml-5 text-white" href="#" target="_blank">Testimony</a>
            <a class="nav-item nav-link ml-5 text-white" href="gallery.html" target="_blank"
              >Gallery</a
            >
            <a class="nav-item nav-link ml-5 text-white" href="contact.php"
              >Contact US</a
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

      <form  id="form" novalidate class="container content-login needs-validation" method="post" role="form">
        <div id="contact-form">
          <div
            id="contact-about"
            class="d-flex justify-content-between flex-column"
          >
            <div class="name form-group">
              <input type="text" pattern="[A-Za-z]" name="name" class="p-3 form-control" placeholder="Enter Name..." required/>
              <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please Enter valid 10-digit Number.</div>
            </div>
            <div class="phone form-group ">
              <input
                class="form-control" type="tel"
                placeholder="Enter your number..."
               pattern="[6-9]{1}[0-9]{9}" id="number" name="number" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please Enter valid 10-digit Number.</div>
            </div>
            <div class="email form-group">
              <input type="email" name="email" class="p-3 form-control" placeholder="Enter E-mail..."  id="email" onkeydown="validation()" required/>
              <div id="text"></div>
              <div class="invalid-feedback">Please fill out this field.</div>
            </div>
          </div>
          <div id="contact-message">
            <input type="text" name="message" placeholder="Enter message..."/>
          </div>
        </div>
        <div class="text-center">
          <button name="submit" type="submit" value="submit" id="submit-btn" class="m-5">Submit</button>
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
          <span><i class="fas fa-envelope mr-4"></i></span>
          support@getplaced.com
        </div>
      </div>
      <div>
        <h3 class="mb-4">About us</h3>
        <p class="w-50">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa
          temporibus possimus atque veritatis nesciunt ducimus inventore
          doloribus, odit laudantium accusamus.
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
