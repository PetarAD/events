<?php
session_start();
$_SESSION['username'];
if ( $_SESSION["username"]=='') {
  header('location:index.php');
}
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible", content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="./assets/components/normalize-css/normalize.css">
    <link rel="stylesheet" href="./assets/components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="./assets/layout/main.css">
    <!--[if lt IE 9]>
    <script src="./assets/html5shiv/dist/html5shiv.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
      <?php include './modules/header.php'; ?>
      <?php include './modules/navigation.php'; ?>
      <main>
        <?php
        $_SESSION["username"];
        $_SESSION["password"];
            $conn = mysqli_connect('localhost', 'root', '', 'events');
              if(empty($_POST['submit'])){
            	   $id = $_GET['id'];
            	    $q = "SELECT * FROM `event` WHERE `id` = '$id'";
                	$res = mysqli_query($conn, $q);
                	$row = mysqli_fetch_assoc($res);
                  $event=$row['name'];
                  echo "<form action='check.php' method='post'>";
                  echo "Записа се за събитие ".$row['name'];
                  echo "</form>";
          $user= $_SESSION['username'];
          $q="INSERT INTO user_event(username, event) VALUES ('$user', '$event')";
          $result = mysqli_query($conn, $q);
        }
             ?>
    </main>
      <?php include './modules/footer.php'; ?>
    </div>
    </div>
  </body>
</html>
