<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Цифра в текст</title>
  <link rel="stylesheet" href="css/styles-numbers.css">
</head>
<body>
  <div class="title-hat">Перевод цифры в текст</div>
  <form method="post">
    <label class="input-label" for="number">Цифру:</label>
    <div><input  class="input-blank" type="number" id="number" name="number" required></div>
    <div><button class="input-button" type="submit">Перевести</button></div>
  </form>
  <div class="answer-message">
  <?php if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = $_POST['number'];
    if (($number < 0) || ($number > 9)) {
      echo"<span class='error-message'>Ошибка! Введите цифру от 0 до 9!.</span>"; } 
    else {
      if ($number == 0) { 
        echo"<span class='success-message'>Ноль.</span>"; 
      }
      if ($number == 1) { 
        echo"<span class='success-message'>Один.</span>"; 
      }
      if ($number == 2) { 
        echo"<span class='success-message'>Два.</span>"; 
      }
      if ($number == 3) { 
        echo"<span class='success-message'>Три.</span>"; 
      }
      if ($number == 4) { 
        echo"<span class='success-message'>Четыре.</span>"; 
      }
      if ($number == 5) { 
        echo"<span class='success-message'>Пять.</span>"; 
      }
      if ($number == 6) { 
        echo"<span class='success-message'>Шесть.</span>"; 
      }
      if ($number == 7) { 
        echo"<span class='success-message'>Семь.</span>"; 
      }
      if ($number == 8) { 
        echo"<span class='success-message'>Восемь.</span>"; 
      }
      if ($number == 9) { 
        echo"<span class='success-message'>Девять.</span>"; 
      }
    }
  }
  ?>
  </div>
</body>
</html>