<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible", content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="./assets/components/normalize-css/normalize.css">
  </head>
  <body>
    <?php
      if(isset($_GET['location'])) {
        $locationFile = $_GET['location'];
        $locationDir = './includes/'.$locationFile.'.php';
        if (file_exists($locationDir)) {
          include $locationDir;
        } else {
          header('Location: notfound.php');
        }
      }
    ?>
  </body>
</html>
