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
   $sql2 = "SELECT img FROM webdev WHERE webid=1";
 } else {
      $sql2 = "SELECT img FROM webdev WHERE webid=1";
 }

 if (isset($_GET['webid'])) {
 $sql3 = "SELECT img FROM webdev WHERE webid=2";
} else {
    $sql3 = "SELECT img FROM webdev WHERE webid=2";
}

if (isset($_GET['webid'])) {
$sql4 = "SELECT img FROM webdev WHERE webid=3";
} else {
   $sql4 = "SELECT img FROM webdev WHERE webid=3";
}

 ?>
<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/style.css">

<body>
<div class="row">
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
</div>

<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>

  <div class="modal-content">

    <div class="mySlides">
      <div class="numbertext">1 / 2</div>
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
      <div class="numbertext">2 / 4</div>
      <img src="images/rgplay.jpg">
    </div>
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <div class="caption-container">
      <p id="caption"></p>
    </div>


    <div class="column">
      <img class="demo cursor" src="images/rgindex.png"onclick="currentSlide(1)" alt="Nature and sunrise">
    </div>
    <div class="column">
      <img class="demo cursor" src="images/rgplay.jpg" onclick="currentSlide(2)" alt="Trolltunga, Norway">
    </div>
  </div>
</div>


      <script type="text/javascript" src="js/main.js"></script>

</body>
</html>
