<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>sport</title>
  </head>
  <body>

  </body>
</html>
<?php
  if(isset($_GET['location'])) {
    $category = $_GET['category'];
  }
   $conn = mysqli_connect('localhost', 'root', '', 'events');
   $read_query = 	"SELECT * FROM `event` WHERE `category` LIKE '%$category'";
 $read_result = mysqli_query($conn, $read_query);
     if (mysqli_num_rows($read_result) > 0) {
       while($row = mysqli_fetch_assoc($read_result)){
       echo '<div>';
       echo $row["name"]."<br>";
       echo $row["description"];
      echo '</div>';
     }
     }
    ?>
