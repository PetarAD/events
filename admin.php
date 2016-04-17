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
        echo '<h1>'.$_SESSION['username']."</h1>";
        $user=$_SESSION['username'];
          $conn = mysqli_connect('localhost', 'root', '', 'events');
        $q="SELECT * FROM `user_event` WHERE `username` LIKE '%$user%'";
        $read_result = mysqli_query($conn, $q);
            if (mysqli_num_rows($read_result) > 0) {
              while($row = mysqli_fetch_assoc($read_result)){
              echo '<section>';
              echo '<em>Събитие: </em>'. $row["event"];
             echo '</section>';
           }
         }



         ?>
    </main>
      <?php include './modules/footer.php'; ?>
    </div>
    </div>
  </body>
</html>
