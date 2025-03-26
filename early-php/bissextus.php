<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Проверка високосного года</title>
  <link rel="stylesheet" href="css/styles-bissextus.css">
</head>
<body>
  <div class="title-hat">Проверка високосного года</div>
  <form method="post">
    <label class="input-label" for="year">Введите год:</label>
    <div><input  class="input-blank" type="number" id="year" name="year" min="1" required></div>
    <div><button class="input-button" type="submit">Проверить</button></div>
  </form>
  <div class="answer-message">
  <?php if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $year = $_POST['year'];
    if (($year < 1) || ($year>30000)) {
      echo"<span class='error-message'>Год должен быть в диапазоне от 1 до 30000.</span>"; } 
    else {
      if ((($year % 4) === 0) && (($year % 100) !== 0) || (($year % 400) === 0)) { 
        echo"<span class='success-message'>Год $year является високосным.</span>"; }
      else{
        echo"<span class='error-message-biss'>Год $year не является високосным.</span>"; }
      }
    }
  ?>
  </div>
</body>
</html>