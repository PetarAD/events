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
      <div class="home-content">
      <section class="introduction">
        „Споделям враца” е сайт създаден с идеята да свърже хората от враца. Споделяйки моменти и спомени ние сближаваме хората. освен забавлението ние развиваме и кулртурата спорта, юдравето и науката. казузата ни е разнообрази сивия град и да свържем усмивките на хората.
      </section>
      <section class="form-container">
        <form class="login" action="login.php" method="POST">

          <fieldset>
            <label for="username">Потребителско име</label>
            <input id="username" type="text" name="username" placeholder="Въведете потребителско име.">
          </fieldset>
          <fieldset>
            <label for="password">Парола:</label>
            <input id="password" type="password" name="password" placeholder="Въведете парола.">
          </fieldset>
          <fieldset><input type="submit" name="submit" value="Влез"></fieldset>

        </form>
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
          <fieldset>
            <input type="submit" name="submit" value="Регистрирай се">
          </fieldset>
        </form>
    </section>
      </main>
      <?php include './modules/footer.php'; ?>
    </div>
    </div>
  </body>
</html>
