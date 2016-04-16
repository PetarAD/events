<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
        <title>create</title>
  </head>
  <body>
    <?php
if (isset($_POST['submit'])) {
  $category=$_POST['category'];
  $name=$_POST['name'];
  $description=$_POST['description'];
$publish=date('y-m-d');
$conn = mysqli_connect('localhost', 'root', '', 'events');
$insert_query = 	"INSERT INTO `event`( `category`, `description`,`name`,`published`) VALUES ('$category','$description','$name', '$publish')";
    $insert_result= mysqli_query($conn, $insert_query);
    if ($insert_result) {
      echo "Успешно добавихте събитие!";
    }else{
      echo "Неуспешна събитие";
    }
}
     ?>
    <form  action="create.php" method="post">
      <label for="category">Category</label>
      <select  name="category">
        <option value="sport">Спорт</option>
        <option value="health">Здраве</option>
        <option value="culture">Култура</option>
        <option value="science">Наука</option>
      </select>
      <label for="name">Име на събитието</label>
      <input type="text" name="name">
      <textarea name="description" rows="30" cols="50" placeholder="описание"></textarea>
      <input type="submit" name="submit" value="Създай">
    </form>

  </body>
</html>
