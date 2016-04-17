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
        <form  class="categories" action="category.php" method="get">
          <fieldset>
            <label for="category">Категории:</label>
            <select  name="category">
              <option value="sport">Спорт</option>
              <option value="health">Здраве</option>
              <option value="culture">Култура</option>
              <option value="science">Наука</option>
            </select>
          </fieldset>
          <fieldset>
            <input type="submit" name="submit" value="Избери">

          </fieldset>
        </form>
      <?php
        $conn = mysqli_connect('localhost', 'root', '', 'events');
          if(isset($_GET['submit'])){
            $category=$_GET['category'];
            $read_query = 	"SELECT * FROM `event` WHERE `category` LIKE '%$category%'";
            $read_result = mysqli_query($conn, $read_query);
            echo "<section class=\"summary-wrapper\">";
             if (mysqli_num_rows($read_result) > 0) {
               while($row = mysqli_fetch_assoc($read_result)){
               echo '<figure class="summary">';
               echo "<div class=\"summary-image\"></div>";
               echo '<h2>'.$row["name"]." ".'<a class="link" href="check.php?id='.$row["id"].'">Запиши се</a>'.'</h2>';
               echo "<article>";
               echo '<p>'.$row["description"]. '</p>';
              echo ' </article>';
              echo ' </figure>';
             }
             echo "</section>";
             }
             else {
               echo "Няма събития в тази категория.";
             }
           }
      ?>
      </main>
      <?php include './modules/footer.php'; ?>
    </div>
    </div>
  </body>
</html>
