<?php
  $conn = mysqli_connect('localhost', 'root', '', 'events');
if (!empty($_POST['submit'])) {
  $username= mysqli_real_escape_string($conn, $_POST['username']);
  $password=mysqli_real_escape_string($conn, $_POST['password']);
  $mail=mysqli_real_escape_string($conn, $_POST['email']);
  $name=mysqli_real_escape_string($conn, $_POST['name']);
  $last=mysqli_real_escape_string($conn, $_POST['last-name']);
 // var_dump($_POST);
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> origin/master
 $password=md5($password);
    $insert_query ="INSERT INTO user( username, password, email, first_name, last_name) VALUES ('$username','$password','$mail','$name','$last')";
    $insert_result= mysqli_query($conn, $insert_query);
    if ($insert_result) {
      echo  "Успешно се регистрирахте!";
    }else{
      echo "Неуспешна регистрация";
    }

<<<<<<< HEAD
=======
=======
    $insert_query ="INSERT INTO user( username, password, email, first_name, last_name) VALUES ('$username','$password','$mail','$name','$last')";
    $insert_result= mysqli_query($conn, $insert_query);
    $password=md5($password);

    if(!preg_match('/^\p{L}[\p{L} _.-]+$/u', $name) || empty($name)) {
      echo "<p>Неправилен формат на името.</p>";
    } elseif ($insert_result) {
      echo  "Успешно се регистрирахте.";
    }
>>>>>>> origin/master
>>>>>>> origin/master
  }
 ?>
