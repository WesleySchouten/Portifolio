<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <title>Portifolio</title>
  </head>


  <body>

    <?php
    include 'inc/jumbo.php';
    include 'inc/nav.php'; ?>

    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <a href="web.php"><img class="w-100" src="images/web.jpg" alt="First slide"></a>
    </div>
    <div class="carousel-item">
    <a href="CSharp.php">  <img class="d-block w-100" src="images/C.jpg" alt="Second slide"></a>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <p>What I do</p>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col">
      <i class="fa fa-html5" aria-hidden="true"></i>
        Currently most of my focus is on front-end developing working on html and css but in my free time im trying to learn Javascript and Jquerry to make the page more professional

    </div>
    <div class="col">
       <i class="fa fa-cog" aria-hidden="true"></i>
       Im also working on some projects based on C# and arduino, but we are currently at the basics of learing both things
    </div>
  </div>
</div>
<?php include 'inc/footer.php'; ?>





	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>


  </body>
</html>
