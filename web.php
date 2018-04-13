<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "portfolio";


//create connection
$conn = new mysqli($servername, $username, $password, $dbname);

//check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['webid'])) {
       $webid = $_GET['webid'];
       $sql = "SELECT img FROM webdev";
  }
  else {
    $sql = "SELECT * FROM webdev";
  }
   $result = $conn->query($sql);

   if (isset($_GET['webid'])) {
   $sql2 = "SELECT * FROM webdev WHERE webid=1";
 } else {
      $sql2 = "SELECT * FROM webdev WHERE webid=1";
 }

 if (isset($_GET['webid'])) {
 $sql3 = "SELECT * FROM webdev WHERE webid=2";
} else {
    $sql3 = "SELECT * FROM webdev WHERE webid=2";
}

if (isset($_GET['webid'])) {
$sql4 = "SELECT * FROM webdev WHERE webid=3";
} else {
   $sql4 = "SELECT * FROM webdev WHERE webid=3";
}

if (isset($_GET['webid'])) {
$sql5 = "SELECT * FROM webdev WHERE webid=4";
} else {
   $sql5 = "SELECT * FROM webdev WHERE webid=4";
}

if (isset($_GET['webid'])) {
$sql6 = "SELECT * FROM webdev WHERE webid=5";
} else {
   $sql6 = "SELECT * FROM webdev WHERE webid=5";
}

if (isset($_GET['webid'])) {
$sql7 = "SELECT * FROM webdev WHERE webid=6";
} else {
   $sql7 = "SELECT * FROM webdev WHERE webid=6";
}

if (isset($_GET['webid'])) {
$sql8 = "SELECT * FROM webdev WHERE webid=7";
} else {
   $sql8 = "SELECT * FROM webdev WHERE webid=7";
}

if (isset($_GET['webid'])) {
$sql9 = "SELECT * FROM webdev WHERE webid=8";
} else {
   $sql9 = "SELECT * FROM webdev WHERE webid=8";
}
if (isset($_GET['webid'])) {
$sql10 = "SELECT * FROM webdev WHERE webid=9";
} else {
   $sql10 = "SELECT * FROM webdev WHERE webid=9";
}

if (isset($_GET['webid'])) {
$sql11 = "SELECT * FROM webdev WHERE webid=10";
} else {
   $sql11 = "SELECT * FROM webdev WHERE webid=10";
}
if (isset($_GET['webid'])) {
$sql12 = "SELECT * FROM webdev WHERE webid=11";
} else {
   $sql12 = "SELECT * FROM webdev WHERE webid=11";
}
if (isset($_GET['webid'])) {
$sql13 = "SELECT * FROM webdev WHERE webid=12";
} else {
   $sql13 = "SELECT * FROM webdev WHERE webid=12";
}

if (isset($_GET['webid'])) {
$sql14 = "SELECT * FROM webdev WHERE webid=13";
} else {
   $sql14 = "SELECT * FROM webdev WHERE webid=13";
}
if (isset($_GET['webid'])) {
$sql15 = "SELECT * FROM webdev WHERE webid=14";
} else {
   $sql15 = "SELECT * FROM webdev WHERE webid=14";
}
if (isset($_GET['webid'])) {
$sql16 = "SELECT * FROM webdev WHERE webid=15";
} else {
   $sql16 = "SELECT * FROM webdev WHERE webid=15";
}
if (isset($_GET['webid'])) {
$sql17 = "SELECT * FROM webdev WHERE webid=16";
} else {
   $sql17 = "SELECT * FROM webdev WHERE webid=16";
}
if (isset($_GET['webid'])) {
$sql18 = "SELECT * FROM webdev WHERE webid=17";
} else {
   $sql18 = "SELECT * FROM webdev WHERE webid=17";
}
if (isset($_GET['webid'])) {
$sql19 = "SELECT * FROM webdev WHERE webid=18";
} else {
   $sql19 = "SELECT * FROM webdev WHERE webid=18";
}





 ?>
<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">

<body>
  <?php
  include 'inc/jumbo.php';
  include 'inc/nav.php';
  ?>
  <div class="container">
    <div class="row">
      <div class="col">
        <p>Period 1</p>
        <div class="lightboxper1">
          <div class="column">
            <?php
                 $result14 = $conn->query($sql14);
            if ($result14->num_rows > 0) {
        //output data of each row
        while ($row14 = $result14->fetch_assoc()) {
        ?>
            <img src="<?php echo $row14['img']; ?>" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
          <?php }}  ?>
          </div>


        <div id="myModal" class="modal">
          <span class="close cursor" onclick="closeModal()">&times;</span>

          <div class="modal-contentito">

            <div class="mySlides">
              <div class="numbertext">1 / 3</div>
              <?php
                   $result14 = $conn->query($sql14);
              if ($result14->num_rows > 0) {
            //output data of each row
            while ($row14 = $result14->fetch_assoc()) {
            ?>
              <img src="<?php echo $row14['img']; ?>">
              <?php }}  ?>
            </div>

            <div class="mySlides">
              <div class="numbertext">2 / 3</div>
              <?php
                   $result15 = $conn->query($sql15);
              if ($result15->num_rows > 0) {
            //output data of each row
            while ($row15 = $result15->fetch_assoc()) {
            ?>
              <img src="<?php echo $row15['img']; ?>">
              <?php }}  ?>
            </div>


            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>

            <div class="caption-container">
              <p id="caption"></p>
            </div>
            <div class="column">
              <?php
                   $result14 = $conn->query($sql14);
              if ($result14->num_rows > 0) {
            //output data of each row
            while ($row14 = $result14->fetch_assoc()) {
              ?>
              <img class="demo cursor" src="<?php echo $row14['img']; ?>" onclick="currentSlide(1)" alt="Trolltunga, Norway">
            <?php }} ?>
            </div>
          </div>

            <div class="column">
              <?php
                   $result15 = $conn->query($sql15);
              if ($result15->num_rows > 0) {
            //output data of each row
            while ($row15 = $result15->fetch_assoc()) {
            ?>
              <img class="demo cursor" src="<?php echo $row15['img']; ?>"onclick="currentSlide(2)" alt="Nature and sunrise">
            <?php }} ?>
            </div>
          </div>
          <script type="text/javascript" src="js/main.js"></script>
        </div>
      </div>
      <div class="col">
        <div class="lightboxper2">
          <div class="column">
            Periode 2
            <?php
                 $result16 = $conn->query($sql16);
            if ($result16->num_rows > 0) {
        //output data of each row
        while ($row16 = $result16->fetch_assoc()) {
        ?>
            <img src="<?php echo $row16['img']; ?>"onclick="openmodal2();currentslide2(1)" class="hover-shadow cursor">
          <?php }}  ?>
          </div>


        <div id="myModal2" class="modal">
          <span class="close cursor" onclick="closeModal2()">&times;</span>

          <div class="modal-contentito">

            <div class="mySlides2">
              <div class="numbertext">1 / 3</div>
              <?php
                   $result16 = $conn->query($sql16);
              if ($result16->num_rows > 0) {
            //output data of each row
            while ($row16 = $result16->fetch_assoc()) {
            ?>
              <img src="<?php echo $row16['img']; ?>">
              <?php }}  ?>
            </div>

            <div class="mySlides2">
              <div class="numbertext">2 / 3</div>
              <?php
                   $result17 = $conn->query($sql17);
              if ($result17->num_rows > 0) {
            //output data of each row
            while ($row17 = $result17->fetch_assoc()) {
            ?>
              <img src="<?php echo $row17['img']; ?>">
              <?php }}  ?>
            </div>
            <a class="prev" onclick="plusslides2(-1)">&#10094;</a>
            <a class="next" onclick="plusslides2(1)">&#10095;</a>

            <div class="caption-container">
              <p id="caption2"></p>
            </div>
            <div class="column">
              <?php
                   $result16 = $conn->query($sql16);
              if ($result16->num_rows > 0) {
            //output data of each row
            while ($row16 = $result16->fetch_assoc()) {
              ?>
              <img class="demo2 cursor" src="<?php echo $row16['img']; ?>" onclick="currentslide2(1)" alt="<?php echo $row16['context'] ?>">
            <?php }} ?>
            </div>
          </div>

            <div class="column">
              <?php
                   $result17 = $conn->query($sql17);
              if ($result17->num_rows > 0) {
            //output data of each row
            while ($row17 = $result17->fetch_assoc()) {
            ?>
              <img class="demo2 cursor" src="<?php echo $row17['img']; ?>"onclick="currentslide2(2)" alt="<?php echo $row17['context'] ?>">
            <?php }} ?>
            </div>

          </div>

        </div>
        </div>


      <div class="col">
        <div class="lightboxper3">
          <div class="column">
            Periode 3
            <?php
                 $result18 = $conn->query($sql18);
            if ($result18->num_rows > 0) {
        //output data of each row
        while ($row18 = $result18->fetch_assoc()) {
        ?>
            <img src="<?php echo $row18['img']; ?>"onclick="openModal3();currentSlide3(1)" class="hover-shadow cursor">
          <?php }}  ?>
          </div>


        <div id="myModal3" class="modal">
          <span class="close cursor" onclick="closeModal3()">&times;</span>

          <div class="modal-contentito">

            <div class="mySlides3">
              <div class="numbertext">1 / 3</div>
              <?php
                   $result18 = $conn->query($sql18);
              if ($result18->num_rows > 0) {
            //output data of each row
            while ($row18 = $result18->fetch_assoc()) {
            ?>
              <img src="<?php echo $row18['img']; ?>">
              <?php }}  ?>
            </div>

            <div class="mySlides3">
              <div class="numbertext">2 / 3</div>
              <?php
                   $result19 = $conn->query($sql19);
              if ($result19->num_rows > 0) {
            //output data of each row
            while ($row19 = $result19->fetch_assoc()) {
            ?>
              <img src="<?php echo $row19['img']; ?>">
              <?php }}  ?>
            </div>
            <a class="prev" onclick="plusslides3(-1)">&#10094;</a>
            <a class="next" onclick="plusslides3(1)">&#10095;</a>

            <div class="caption-container">
              <p id="caption3"></p>
            </div>
            <div class="column">
              <?php
                   $result18 = $conn->query($sql18);
              if ($result18->num_rows > 0) {
            //output data of each row
            while ($row18 = $result18->fetch_assoc()) {
              ?>
              <img class="demo3 cursor" src="<?php echo $row18['img']; ?>" onclick="currentSlide3(1)" alt="<?php echo $row18['context'] ?>">
            <?php }} ?>
            </div>
          </div>

            <div class="column">
              <?php
                   $result19 = $conn->query($sql19);
              if ($result19->num_rows > 0) {
            //output data of each row
            while ($row19 = $result19->fetch_assoc()) {
            ?>
              <img class="demo3 cursor" src="<?php echo $row19['img']; ?>"onclick="currentSlide3(2)" alt="<?php echo $row19['context'] ?>">
            <?php }} ?>
            </div>

          </div>
          <script type="text/javascript" src="js/main1.js"></script>
        </div>
        </div>
        </div>
      </div>


</body>
</html>
