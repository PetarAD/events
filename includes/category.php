<<<<<<< HEAD
<?php
session_start();
 ?>
=======
>>>>>>> origin/master
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>sport</title>
  </head>
  <body>
<<<<<<< HEAD
  </body>
</html>
<?php
$conn = mysqli_connect('localhost', 'root', '', 'events');
  if(isset($_GET['id'])):
    $id = mysqli_real_escape_string($conn, $_GET['id']);
  endif;
   $read_query = 	"SELECT * FROM `event` WHERE `category` LIKE '%$id'";
=======

  </body>
</html>
<?php
  if(isset($_GET['location'])) {
    $category = $_GET['category'];
  }
   $conn = mysqli_connect('localhost', 'root', '', 'events');
   $read_query = 	"SELECT * FROM `event` WHERE `category` LIKE '%$category'";
>>>>>>> origin/master
 $read_result = mysqli_query($conn, $read_query);
     if (mysqli_num_rows($read_result) > 0) {
       while($row = mysqli_fetch_assoc($read_result)){
       echo '<div>';
<<<<<<< HEAD
       echo $row["name"]." ".'<a href="check.php?id='.$row["id"].'">check</a>';
=======
       echo $row["name"]."<br>";
>>>>>>> origin/master
       echo $row["description"];
      echo '</div>';
     }
     }
<<<<<<< HEAD
if (isset($_GET['submit'])) {
$user= $_SESSION['username'];
$q="INSERT INTO user_event(username, event) VALUES ('$user', '$event')";
$result = mysqli_query($conn, $q);
    if (mysqli_num_rows($read_result) > 0) {
echo "fuck yeah";
}
else {
  echo "fuck no";
}
}
=======
>>>>>>> origin/master
    ?>
