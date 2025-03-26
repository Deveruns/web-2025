<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Знак зодиака</title>
  <link rel="stylesheet" href="css/styles-zodiac.css">
</head>
<body>
  <div class="title-hat">Определение знака зодиака</div>
  <form method="post">
    <label class="input-label" for="day">Введите дату рождения:</label>
    <div>
    <span><input class="day-blank" type="number" id="day" name="day" placeholder="ДД" required> .</span>
    <span><input class="month-blank" type="number" id="month" name="month" placeholder="ММ" required> .</span>
    <span><input class="year-blank" type="number" id="year" name="year" placeholder="ГГГГ" required></span>
</div>
    <div><button class="input-button" type="submit">Определить</button></div>
  </form>
  <div class="answer-message">
  <?php if ($_SERVER["REQUEST_METHOD"] ==== "POST") {
    $day = $_POST['day'];
    $month = $_POST['month'];
    $year = $_POST['year'];
    if ($year < 1 || $month < 1 || $month > 12 || $day < 1 || 
        (
          ($month === 1 && $day > 31) || // Январь
          ($month === 2 && $day > 29 && ((($year % 4) === 0) && (($year % 100) != 0) || (($year % 400) === 0))) || // Февраль (високосный)
          ($month === 2 && $day > 28 && (($year % 4) === 0) && (($year % 100) != 0) || (($year % 400) === 0)) || // Февраль (не високосный)
          ($month === 3 && $day > 31) || // Март
          ($month === 4 && $day > 30) || // Апрель
          ($month === 5 && $day > 31) || // Май
          ($month === 6 && $day > 30) || // Июнь
          ($month === 7 && $day > 31) || // Июль
          ($month === 8 && $day > 31) || // Август
          ($month === 9 && $day > 30) || // Сентябрь
          ($month === 10 && $day > 31) || // Октябрь
          ($month === 11 && $day > 30) || // Ноябрь
          ($month === 12 && $day > 31) // Декабрь
        )) 
    {
      echo"<span class='error-message'>Неверная дата</span>"; 
    }
    else 
    {
      if ((($month === 1) && ($day >= 20)) || (($month === 2) && ($day <= 18))) {
        echo"<span class='success-message'>Водолей</span>"; 
      } 
      if ((($month === 2) && ($day >= 19)) || (($month === 3) && ($day <= 20))) {
        echo"<span class='success-message'>Рыбы</span>";
      }
      if ((($month === 3) && ($day >= 21)) || (($month === 4) && ($day <= 19))) {
        echo"<span class='success-message'>Овен</span>"; 
      } 
      if ((($month === 4) && ($day >= 20)) || (($month === 5) && ($day <= 20))) {
        echo"<span class='success-message'>Телец</span>"; 
      } 
      if ((($month === 5) && ($day >= 21)) || (($month === 6) && ($day <= 20))) {
        echo"<span class='success-message'>Близнецы</span>"; 
      } 
      if ((($month === 6) && ($day >= 21)) || (($month === 7) && ($day <= 22))) {
        echo"<span class='success-message'>Рак</span>"; 
      } 
      if ((($month === 7) && ($day >= 23)) || (($month === 8) && ($day <= 22))) {
        echo"<span class='success-message'>Лев</span>"; 
      } 
      if ((($month === 8) && ($day >= 23)) || (($month === 9) && ($day <= 22))) {
        echo"<span class='success-message'>Дева</span>"; 
      } 
      if ((($month === 9) && ($day >= 23)) || (($month === 10) && ($day <= 22))) {
        echo"<span class='success-message'>Весы</span>"; 
      } 
      if ((($month === 10) && ($day >= 23)) || (($month === 11) && ($day <= 21))) {
        echo"<span class='success-message'>Скорпион</span>"; 
      } 
      if ((($month === 11) && ($day >= 22)) || (($month === 12) && ($day <= 21))) {
        echo"<span class='success-message'>Стрелец</span>"; 
      } 
      if ((($month === 12) && ($day >= 22)) || (($month === 1) && ($day <= 19))) {
        echo"<span class='success-message'>Козерог</span>"; 
      }
    }
  }
  ?>
  </div>
</body>
</html>