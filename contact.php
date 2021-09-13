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
    <title>Contact us</title>
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
      <form class="container" method="post" role="form">
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  </body>
</html>
