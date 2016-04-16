<?php
  $conn = mysqli_connect('localhost', 'root', '', 'events');
if (isset($_POST['submit'])) {
  $username= mysqli_real_escape_string($conn, $_POST['username']);
  $password=mysqli_real_escape_string($conn, $_POST['password']);
  $mail=mysqli_real_escape_string($conn, $_POST['email']);
  $name=mysqli_real_escape_string($conn, $_POST['name']);
  $last=mysqli_real_escape_string($conn, $_POST['last-name']);
 var_dump($_POST);
    $insert_query ="INSERT INTO user( username, password, email, first_name, last_name) VALUES ('$username','$password','$mail','$name','$last')";
    $insert_result= mysqli_query($conn, $insert_query);
    if ($insert_result) {
      echo "Успешно се регистрирахте!";
    }else{
      echo "Неуспешна регистрация";
    }

  }
 ?>
