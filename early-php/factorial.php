<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Факториал числа</title>
  <link rel="stylesheet" href="css/styles-factorial.css">
</head>
<body>
  <div class="title-hat">Вычислиение факториала числа</div>
  <form method="post">
    <label class="input-label" for="factorial">Вычислиение факториала числа:</label>
    <div><input class="factorial" type="number" id="factorial" name="factorial" required></div>
    <div><button class="input-button" type="submit">Определить</button></div>
  </form>
  <div class="answer-message">
  <?php if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $count = $_POST['factorial'];
    function factorial($count) {
      if ($count === 0 || $count === 1) {
          return 1;
      }
      return $count * factorial($count - 1);
    }
    if ($count < 0) {
      echo"<span class='error-message'>Некорректное число!</span>";
    }
    else {
      echo"<span class='success-message'>Факториал числа $count - " . factorial($count) . "</span>";
    }
  }
  ?>
  </div>
</body>
</html>