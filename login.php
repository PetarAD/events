<?php
session_start();
?>

        <?php
         $conn = mysqli_connect('localhost', 'root', '', 'events');
        if (isset($_POST['submit'])) {
            $username=mysqli_real_escape_string($conn, $_POST['username']);
            $password=mysqli_real_escape_string($conn, $_POST['password']);
            $password=md5($password);
            $_SESSION["username"]=$username;
            $_SESSION["password"]=$password;
          $read_query = 	"SELECT * FROM `user`";
          $read_result = mysqli_query($conn, $read_query);
          	if (mysqli_num_rows($read_result) > 0) {
          		while($row = mysqli_fetch_assoc($read_result)){
              if ($username==$row['username']) {
                if ($password==$row['password']) {
                  header ('Location:category.php');
            }
            else {
              echo "Грешна парола";
            }
            echo "Грешенo потребителско име";
          }
        }
        }
        }
        ?>
