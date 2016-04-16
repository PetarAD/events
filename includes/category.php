<?php
session_start();
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>sport</title>
  </head>
  <body>
<<<<<<< HEAD
    <form  action="category.php" method="get">
      <label for="category">Category</label>
      <select  name="category">
        <option value="sport">Спорт</option>
        <option value="health">Здраве</option>
        <option value="culture">Култура</option>
        <option value="science">Наука</option>
      </select>
      <input type="submit" name="submit" value="chose">
    </form>
    <?php
    $conn = mysqli_connect('localhost', 'root', '', 'events');
      if(isset($_GET['submit'])){
    $category=$_GET['category'];
       $read_query = 	"SELECT * FROM `event` WHERE `category` LIKE '%$category%'";
     $read_result = mysqli_query($conn, $read_query);
         if (mysqli_num_rows($read_result) > 0) {
           while($row = mysqli_fetch_assoc($read_result)){
           echo '<div>';
           echo $row["name"]." ".'<a href="check.php?id='.$row["id"].'">check</a>';
           echo $row["description"];
          echo '</div>';
         }
         }
         else {
           echo "none some";
         }
    }
        ?>
  </body>
</html>
=======
  </body>
</html>
<?php
$conn = mysqli_connect('localhost', 'root', '', 'events');
  if(isset($_GET['id'])):
    $id = mysqli_real_escape_string($conn, $_GET['id']);
  endif;
   $read_query = 	"SELECT * FROM `event` WHERE `category` LIKE '%$id'";
 $read_result = mysqli_query($conn, $read_query);
     if (mysqli_num_rows($read_result) > 0) {
       while($row = mysqli_fetch_assoc($read_result)){
       echo '<div>';
       echo $row["name"]." ".'<a href="check.php?id='.$row["id"].'">check</a>';
       echo $row["description"];
      echo '</div>';
     }
     }
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
    ?>
>>>>>>> origin/master
