<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible", content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="./assets/components/normalize-css/normalize.css">
    <!--[if lt IE 9]>
    <script src="./assets/html5shiv/dist/html5shiv.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
      <?php include './modules/header.php'; ?>
      <?php include './modules/navigation.php'; ?>
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

      <section class="register-form">
        <form class="register" action="register.php" method="POST">
          <fieldset>
            <label for="username">Потребителско име</label>
            <input id="username" type="text" name="username" placeholder="Въведете потребителско име.">
          </fieldset>
          <fieldset>
            <label for="password">Парола:</label>
            <input id="password" type="password" name="password" placeholder="Въведете парола.">
          </fieldset>
          <fieldset>
            <label for="repeat-password">Повторете паролата:</label>
            <input id="repeat-password" type="password" name="repeat-password" placeholder="Паролата отново.">
          </fieldset>
          <fieldset>
            <label for="email">Електронна поща</label>
            <input id="email" type="email" name="email" placeholder="Въведете електронна поща.">
          </fieldset>
          <fieldset>
            <label for="name">Име</label>
            <input id="name" type="text" name="name" placeholder="Въведете име.">
          </fieldset>
          <fieldset>
            <label for="last-name">Фамилия</label>
            <input id="last-name" type="text" name="last-name" placeholder="Въведете фамилия">
          </fieldset>
          <input type="submit" name="submit" value="Регистрирай се">
        </form>
      </section>

      <?php include './modules/footer.php'; ?>
    </div>
  </body>
</html>
