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
                 $result2 = $conn->query($sql2);
            if ($result2->num_rows > 0) {
        //output data of each row
        while ($row2 = $result2->fetch_assoc()) {
        ?>
            <img src="<?php echo $row2['img']; ?>" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
          <?php }}  ?>
          </div>


        <div id="myModal" class="modal">
          <span class="close cursor" onclick="closeModal()">&times;</span>

          <div class="modal-contentito">

            <div class="mySlides">
              <div class="numbertext">1 / 3</div>
              <?php
                   $result2 = $conn->query($sql2);
              if ($result2->num_rows > 0) {
            //output data of each row
            while ($row2 = $result2->fetch_assoc()) {
            ?>
              <img src="<?php echo $row2['img']; ?>">
              <?php }}  ?>
            </div>

            <div class="mySlides">
              <div class="numbertext">2 / 3</div>
              <?php
                   $result3 = $conn->query($sql3);
              if ($result3->num_rows > 0) {
            //output data of each row
            while ($row3 = $result3->fetch_assoc()) {
            ?>
              <img src="<?php echo $row3['img']; ?>">
              <?php }}  ?>
            </div>

            <div class="mySlides">
              <?php
                   $result4 = $conn->query($sql4);
              if ($result4->num_rows > 0) {
            //output data of each row
            while ($row4 = $result4->fetch_assoc()) {
            ?>
              <div class="numbertext">3 / 3</div>
              <img src="<?php echo $row4['img']; ?>">
                    <?php }}  ?>
            </div>
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>

            <div class="caption-container">
              <p id="caption"></p>
            </div>
            <div class="column">
              <?php
                   $result2 = $conn->query($sql2);
              if ($result2->num_rows > 0) {
            //output data of each row
            while ($row2 = $result2->fetch_assoc()) {
              ?>
              <img class="demo cursor" src="<?php echo $row2['img']; ?>" onclick="currentSlide(1)" alt="Trolltunga, Norway">
            <?php }} ?>
            </div>
          </div>

            <div class="column">
              <?php
                   $result3 = $conn->query($sql3);
              if ($result3->num_rows > 0) {
            //output data of each row
            while ($row3 = $result3->fetch_assoc()) {
            ?>
              <img class="demo cursor" src="<?php echo $row3['img']; ?>"onclick="currentSlide(2)" alt="Nature and sunrise">
            <?php }} ?>
            </div>
            <div class="column">
              <?php
                   $result4 = $conn->query($sql4);
              if ($result4->num_rows > 0) {
            //output data of each row
            while ($row4 = $result4->fetch_assoc()) {
            ?>
              <img class="demo cursor" src="<?php echo $row4['img']; ?>" onclick="currentSlide(3)" alt="<?php echo $row4['context']; ?>">
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
                 $result5 = $conn->query($sql5);
            if ($result5->num_rows > 0) {
        //output data of each row
        while ($row5 = $result5->fetch_assoc()) {
        ?>
            <img src="<?php echo $row5['img']; ?>"onclick="openmodal2();currentslide2(1)" class="hover-shadow cursor">
          <?php }}  ?>
          </div>


        <div id="myModal2" class="modal">
          <span class="close cursor" onclick="closeModal2()">&times;</span>

          <div class="modal-contentito">

            <div class="mySlides2">
              <div class="numbertext">1 / 3</div>
              <?php
                   $result6 = $conn->query($sql6);
              if ($result6->num_rows > 0) {
            //output data of each row
            while ($row6 = $result6->fetch_assoc()) {
            ?>
              <img src="<?php echo $row6['img']; ?>">
              <?php }}  ?>
            </div>

            <div class="mySlides2">
              <div class="numbertext">2 / 3</div>
              <?php
                   $result5 = $conn->query($sql5);
              if ($result5->num_rows > 0) {
            //output data of each row
            while ($row5 = $result5->fetch_assoc()) {
            ?>
              <img src="<?php echo $row5['img']; ?>">
              <?php }}  ?>
            </div>

            <div class="mySlides2">
              <?php
                   $result10 = $conn->query($sql10);
              if ($result10->num_rows > 0) {
            //output data of each row
            while ($row10 = $result10->fetch_assoc()) {
            ?>
              <div class="numbertext">3 / 3</div>
              <img src="<?php echo $row10['img']; ?>">
                    <?php }}  ?>
            </div>
            <a class="prev" onclick="plusslides2(-1)">&#10094;</a>
            <a class="next" onclick="plusslides2(1)">&#10095;</a>

            <div class="caption-container">
              <p id="caption2"></p>
            </div>
            <div class="column">
              <?php
                   $result6 = $conn->query($sql6);
              if ($result6->num_rows > 0) {
            //output data of each row
            while ($row6 = $result6->fetch_assoc()) {
              ?>
              <img class="demo2 cursor" src="<?php echo $row6['img']; ?>" onclick="currentslide2(1)" alt="<?php echo $row6['context'] ?>">
            <?php }} ?>
            </div>
          </div>

            <div class="column">
              <?php
                   $result5 = $conn->query($sql5);
              if ($result5->num_rows > 0) {
            //output data of each row
            while ($row5 = $result5->fetch_assoc()) {
            ?>
              <img class="demo2 cursor" src="<?php echo $row5['img']; ?>"onclick="currentslide2(2)" alt="<?php echo $row5['context'] ?>">
            <?php }} ?>
            </div>
            <div class="column">
              <?php
                   $result10 = $conn->query($sql10);
              if ($result10->num_rows > 0) {
            //output data of each row
            while ($row10 = $result10->fetch_assoc()) {
            ?>
              <img class="demo2 cursor" src="<?php echo $row10['img']; ?>" onclick="currentslide2(3)" alt="<?php echo $row10['context']; ?>">
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
                 $result11 = $conn->query($sql11);
            if ($result11->num_rows > 0) {
        //output data of each row
        while ($row11 = $result11->fetch_assoc()) {
        ?>
            <img src="<?php echo $row11['img']; ?>"onclick="openModal3();currentSlide3(1)" class="hover-shadow cursor">
          <?php }}  ?>
          </div>


        <div id="myModal3" class="modal">
          <span class="close cursor" onclick="closeModal3()">&times;</span>

          <div class="modal-contentito">

            <div class="mySlides3">
              <div class="numbertext">1 / 3</div>
              <?php
                   $result11 = $conn->query($sql11);
              if ($result11->num_rows > 0) {
            //output data of each row
            while ($row11 = $result11->fetch_assoc()) {
            ?>
              <img src="<?php echo $row11['img']; ?>">
              <?php }}  ?>
            </div>

            <div class="mySlides3">
              <div class="numbertext">2 / 3</div>
              <?php
                   $result12 = $conn->query($sql12);
              if ($result12->num_rows > 0) {
            //output data of each row
            while ($row12 = $result12->fetch_assoc()) {
            ?>
              <img src="<?php echo $row12['img']; ?>">
              <?php }}  ?>
            </div>

            <div class="mySlides3">
              <?php
                   $result13 = $conn->query($sql13);
              if ($result13->num_rows > 0) {
            //output data of each row
            while ($row13 = $result13->fetch_assoc()) {
            ?>
              <div class="numbertext">3 / 3</div>
              <img src="<?php echo $row13['img']; ?>">
                    <?php }}  ?>
            </div>
            <a class="prev" onclick="plusslides3(-1)">&#10094;</a>
            <a class="next" onclick="plusslides3(1)">&#10095;</a>

            <div class="caption-container">
              <p id="caption3"></p>
            </div>
            <div class="column">
              <?php
                   $result11 = $conn->query($sql11);
              if ($result11->num_rows > 0) {
            //output data of each row
            while ($row11 = $result11->fetch_assoc()) {
              ?>
              <img class="demo3 cursor" src="<?php echo $row11['img']; ?>" onclick="currentSlide3(1)" alt="<?php echo $row11['context'] ?>">
            <?php }} ?>
            </div>
          </div>

            <div class="column">
              <?php
                   $result12 = $conn->query($sql12);
              if ($result12->num_rows > 0) {
            //output data of each row
            while ($row12 = $result12->fetch_assoc()) {
            ?>
              <img class="demo3 cursor" src="<?php echo $row12['img']; ?>"onclick="currentSlide3(2)" alt="<?php echo $row12['context'] ?>">
            <?php }} ?>
            </div>
            <div class="column">
              <?php
                   $result13 = $conn->query($sql13);
              if ($result13->num_rows > 0) {
            //output data of each row
            while ($row13 = $result13->fetch_assoc()) {
            ?>
              <img class="demo3 cursor" src="<?php echo $row13['img']; ?>" onclick="currentSlide3(3)" alt="<?php echo $row13['context']; ?>">
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
