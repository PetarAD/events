<?php
  $conn = mysqli_connect('localhost', 'root', '', 'events');
if (!empty($_POST['submit'])) {
  $username= mysqli_real_escape_string($conn, $_POST['username']);
  $password=mysqli_real_escape_string($conn, $_POST['password']);
  $mail=mysqli_real_escape_string($conn, $_POST['email']);
  $name=mysqli_real_escape_string($conn, $_POST['name']);
  $last=mysqli_real_escape_string($conn, $_POST['last-name']);
  $password=md5($password);
    $insert_query ="INSERT INTO user( username, password, email, first_name, last_name) VALUES ('$username','$password','$mail','$name','$last')";
    $insert_result= mysqli_query($conn, $insert_query);
      if ($insert_result) {
        echo  "Успешно се регистрирахте!";
        header('Location:index.php');
      }else{
        echo "Неуспешна регистрация";
      }
  }
 ?>
