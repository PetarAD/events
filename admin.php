<?php
session_start();
echo $_SESSION['username'];
$user=$_SESSION['username'];
  $conn = mysqli_connect('localhost', 'root', '', 'events');
$q="SELECT * FROM `user_event` WHERE `username` LIKE '%$user%'";
$read_result = mysqli_query($conn, $q);
    if (mysqli_num_rows($read_result) > 0) {
      while($row = mysqli_fetch_assoc($read_result)){
      echo '<div>';
      echo $row["event"];
     echo '</div>';
   }
 }



 ?>
