<?php
    $conn = mysqli_connect('localhost', 'root', '', 'events');
    if(empty($_POST['submit'])){
    	$id = $_GET['id'];
    	$q = "SELECT * FROM `event` WHERE `id` = '$id'";
    	$res = mysqli_query($conn, $q);
    	$row = mysqli_fetch_assoc($res);
      $event=$row['name'];
      echo "<form action='check.php' method='post'>";
      echo "go to ".$row['name'];
    	echo "<input type='submit' name='submit' value='check'>";
      echo "</form>";
$user= $_SESSION['username'];
  $q="INSERT INTO user_event(username, event) VALUES ('$user', '$event')";
  $result = mysqli_query($conn, $q);
            if ($result) {
        echo "fuck yeah";
        }
        else {
          echo "fuck no";
        }
}


     ?>
