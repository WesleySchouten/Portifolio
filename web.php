<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "portfolio";
$webid = 1;

//create connection
$conn = new mysqli($servername, $username, $password, $dbname);

//check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['webid'])) {
       $webid = $_GET['webid'];
       $sql = "SELECT * FROM webdev WHERE webid='".$webid."'";
  }
  else {
    $sql = "SELECT * FROM webdev WHERE webid='".$webid."'";
  }
   $result = $conn->query($sql);


 ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <title>Portifolio</title>
  </head>
  <body>

    <?php
    include 'inc/jumbo.php';
    include 'inc/nav.php'; ?>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <p>web development assignments</p>
        </div>
      </div>


    <div class="container">
      <div class="row">
        <div class="col-sm-4">
          1 of 3
          <div class="imagecontainer">
            <?php if ($result->num_rows > 0) {
        //output data of each row
        while ($row = $result->fetch_assoc()) { ?>
              <?php $sql = "SELECT img FROM webdev WHERE webid='1'"; ?>
            <img  class="img-fluid" src="<?php echo $row['img']; ?>" onclick="openModal();currentSlide(1)"class="hover-shadow cursor">
          </div>
        <div id="myModal" class="modal">

          <span class="close cursor" onclick="closeModal()">&times;</span>
          <div class="modal-content">

            <div class="mySlides">
            <div class="numbertext">1/2</div>
            <?php $sql = "SELECT img FROM webdev WHERE webid='12'"; ?>
            <img src="<?php echo $row['img']; ?>">
            </div>
            <div class="mySlides">
            <div class="numbertext">2/2</div>
            <img src="images/rgplay.jpg">
            </div>

            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>

            <div class="caption-container">
              <p id="caption"></p>
            </div>

            <div class="column">
    <img class="demo cursor" src="images/rgindex.png" onclick="currentSlide(1)" >
  </div>
  <div class="column">
    <img class="demo cursor" src="images/rgplay.jpg" onclick="currentSlide(2)">
  </div>





            </div>

          </div>

        </div>

        <div class="col-sm-4">
          2 of 3
        </div>
        <div class="col-sm-4">
          3 of 3
        </div>
      <?php }} ?>
      </div>

    </div>
    </div>

      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
      <script type="text/javascript" src="js/main.js"></script>
    </body>
  </html>
