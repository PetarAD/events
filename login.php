<?php
session_start();

 $conn = mysqli_connect('localhost', 'root', '', 'events');
if (isset($_POST['submit'])) {
    $username=mysqli_real_escape_string($conn, $_POST['username']);
    $password=mysqli_real_escape_string($conn, $_POST['password']);
    $_SESSION["username"]=$username;
    $_SESSION["password"]=$password;
    var_dump($_SESSION);
  $read_query = 	"SELECT * FROM `user`";
  $read_result = mysqli_query($conn, $read_query);
  	if (mysqli_num_rows($read_result) > 0) {
  		while($row = mysqli_fetch_assoc($read_result)){
  if ($username==$row['username']) {
    if ($password==$row['password']) {
echo "yes";
header ('Location:index.php');
    }
    else {
      echo "You have worng password";
    }
  }
}
}
}
?>
