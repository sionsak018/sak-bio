<?php
session_start();

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>CineFlix</title>
    <link rel="stylesheet" href="master.css" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  </head>
  <body>
    <header>
      <div class="container-fluid">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark ">
            <a href="login.php" class="navbar-brand"> <img src="images/logo.png" alt=""> </a>
            <span class="navbar-text">CineFlix</span>

            <ul class="navbar-nav">
              <li class="nav-item"> <a href="#A" class="nav-link"> Services</a> </li>
              <li class="nav-item"> <a href="user-login.php" class="nav-link"> SignIn</a> </li>

            </ul>

        </nav>

        <div class="container">
          <div class="jumbotron">
            <h1>Watch Anywhere, <br> Watch Anytime with SakFlix អាចធ្វើឲ្យអ្នកសើច យំ ក្រៀមក្រំរណ្តំចិត្តជក់ចិត្ត មើលហើយចង់មើលទៀត នៅអានដល់ណាទៀតឆាប់ Sign up អីឡូវមក!</h1> <br>
            <a href="test.php" type="button" class="btn btn-danger btn-block">Sign Up Now</a>
          </div>
        </div>
      </div>

      </header>



    <section class="features">
        <a href="#" name="A"></a>
        <h2>Our Services</h2>

        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <p class="arrange"><img src="images/mob.png" alt=""> <br> This app has many features in it to handle a solid OTT platform.Support is great.Navigating takes some time but once you learn it, you will be able to handle it. I went to support a few times and they always responded quickly,There is always space to grow an improve but overall I am pretty satisfied.
              </p>
            </div><div class="col-md-4">
              <p class="arrange"><img src="images/mess.png" alt=""> <br> Excellent customer support, despite the time difference.I like the fact that I submitted my request, and my support ticket was done the following day.
              </p>
            </div>
              <div class="col-md-4">

                <p class="arrange">
                  <img src="images/desktop.jpg"> <br> Looking to revolutionize your entertainment business with a comprehensive on-demand movie streaming solution? Look no further! Welcome to PlayLab, a cross-platform on-demand movie-streaming mobile application. Say goodbye to hefty developer fees and complex builds. With PlayLab, you get a seamless user experience coupled with effortless administration, ensuring maximum benefits for your business.
                </p>
              </div>

            </div>

          </div>
          <h3></h3>

    </section>
    <footer class="page-footer font-small blue">

      <div class="footer-copyright text-center py-3">© 2025 Copyright:
        <a href="">sionsak018@gmail.com</a>
      </div>

    </footer>
  </body>
</html>
