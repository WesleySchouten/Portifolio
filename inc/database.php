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
