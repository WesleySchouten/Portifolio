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

 ?>
<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">

<body>
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
        </div>
      </div>
      <div class="col">
        <p>Periode 3 </p>

      </div>
      <div class="col">
        <p>Periode 3 </p>
      </div>
    </div>
  </div>






      <script type="text/javascript" src="js/main.js"></script>

</body>
</html>
