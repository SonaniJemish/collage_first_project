<?php
    $dataFound= FALSE;
    $popUP = FALSE;
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        include 'Connection.php';
        $mail= $_POST['Email'];
        $query = "Select Contact from details where Email = '$mail'";
        $result = mysqli_query($conn, $query);
        $num = mysqli_num_rows($result);
        if($num == 1){
            $dataFound = TRUE;
        }
        else{
            $showError = "Invalid Credentials";
        }
        if (isset($_POST['Password'])) {
            $password = $_POST['Password'];
            $update = "UPDATE `fruit` SET `Password`='$password' WHERE Email = '$mail'";
            $result_01 = mysqli_query($conn, $update);
            if($result){
               $popUP = TRUE;
            }
        }
    }
?>  
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Fruity World</title>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="css/login.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <link href="https://fonts.googleapis.com/css?family=Baloo+Chettan|Dosis:400,600,700|Poppins:400,600,700&display=swap" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet" />
  <link href="css/responsive.css" rel="stylesheet" />
</head>
<body class="sub_page">
  <div class="hero_area">
    <div class="brand_box">
      <a class="navbar-brand" href="index.html">
        <span>
          Fruity World
        </span>
      </a>
    </div>
  </div>
  <section class="nav_section">
    <div class="container">
      <div class="custom_nav2">
        <nav class="navbar navbar-expand custom_nav-container ">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex  flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.php">About </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="fruit.php">Our Fruit </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="testimonial.php">Testimonial</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.php">Contact Us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="login.php">Login</a>
                </li>
              </ul>
              <form class="form-inline my-2 my-lg-0 ml-0 ml-lg-4 mb-3 mb-lg-0">
              <a class="btn  my-2 my-sm-0 nav_search-btn" href="welcome.php"></a>
              </form>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </section>
  <div class="container">
    <div class="contant">
        <form action="login.php" method="post"> 
            <table id="outtable" cellspacing="5px">
                <tr>
                    <td><label for="Email">Email Id :</label></td>
                    <td><input type="email" name="Email"></td>
                </tr>
                <tr>
                    <td><label for="Password">Old Password :</label></td>
                    <td><input type="password" name="Password"></td>
                </tr>
                <tr>
                    <td><label for="Password">New Password :</label></td>
                    <td><input type="password" name="Password"></td>
                </tr>
                <tr>
                    <td><input type="submit" class="button" value="Done" style="margin: 20px;"></td>
            </table>
        </form>
    </div>
</div>
  <section class="info_section layout_padding">
    <div class="container">
      <div class="info_logo">
        <h2>
          Fruity World
        </h2>
      </div>
      <div class="info_contact">
        <div class="row">
          <div class="col-md-4">
            <a href="">
              <img src="images/location.png" alt="">
              <span>
                India
              </span>
            </a>
          </div>
          <div class="col-md-4">
            <a href="">
              <img src="images/call.png" alt="">
              <span>
                Call : +012334567890
              </span>
            </a>
          </div>
          <div class="col-md-4">
            <a href="">
              <img src="images/mail.png" alt="">
              <span>
                fruityworld@gmail.com
              </span>
            </a>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8 col-lg-9">
          <div class="info_form">
            <form action="">
              <input type="text" placeholder="Enter your email">
              <button>
                subscribe
              </button>
            </form>
          </div>
        </div>
        <div class="col-md-4 col-lg-3">
          <div class="info_social">
            <div>
              <a href="">
                <img src="images/facebook-logo-button.png" alt="">
              </a>
            </div>
            <div>
              <a href="">
                <img src="images/twitter-logo-button.png" alt="">
              </a>
            </div>
            <div>
              <a href="">
                <img src="images/linkedin.png" alt="">
              </a>
            </div>
            <div>
              <a href="">
                <img src="images/instagram.png" alt="">
              </a>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>
  <section class="container-fluid footer_section">
    <p>
      &copy; <span id="displayYear"></span> All Rights Reserved By
      <a href="https://html.design/">Fruity World</a>
    </p>
  </section>
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="js/custom.js"></script>
</body>
</html>