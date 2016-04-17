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

          <form  action="create.php" method="post">
            <fieldset>
              <label for="category">Категория</label>
              <select  name="category">
                <option value="sport">Спорт</option>
                <option value="health">Здраве</option>
                <option value="culture">Култура</option>
                <option value="science">Наука</option>
              </select>
            </fieldset>
            <fieldset>
              <label for="name">Име на събитието</label>
              <input type="text" name="name">
            </fieldset>
            <fieldset>
              <textarea name="description" rows="10" cols="30" placeholder="Въведете описание."></textarea>
            </fieldset>
            <fieldset>

              <input type="submit" name="submit" value="Създай">
            </fieldset>
          </form>
          <?php
        if (isset($_POST['submit'])) {
          $category=$_POST['category'];
          $name=$_POST['name'];
          $description=$_POST['description'];
          $publish=date('y-m-d');
          $conn = mysqli_connect('localhost', 'root', '', 'events');
          $insert_query = 	"INSERT INTO `event`( `category`, `description`,`name`,`published`) VALUES ('$category','$description','$name', '$publish')";
          $insert_result= mysqli_query($conn, $insert_query);
          if (empty($category) || empty($name)) {
            echo 'Всички полета са задължителни.';
          } elseif($insert_result) {
              echo "Успешно добавихте събитие.";
          }else{
              echo "Не успяхте да добавите събитието. Пробвайте пак.";
            }
          }
          ?>

    </main>
      <?php include './modules/footer.php'; ?>
    </div>
    </div>
  </body>
</html>
