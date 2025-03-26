<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Счастливые билеты</title>
  <link rel="stylesheet" href="css/styles-ticket.css">
</head>
<body>
  <div class="title-hat">Определение счастливых билетов</div>
  <form method="post">
    <label class="input-label" for="ticket1">Введите два счастливых билета:</label>
    <div><input class="ticket" type="number" id="ticket1" name="ticket1" placeholder="XXXXXX" required></div>
    <div><input class="ticket" type="number" id="ticket2" name="ticket2" placeholder="XXXXXX" required></div>
    <div><button class="input-button" type="submit">Определить</button></div>
  </form>
  <div class="answer-message">
  <?php if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $success = 0;
    if ($_POST['ticket1'] < $_POST['ticket2']) {
      $ticket1 = $_POST['ticket1'];
      $ticket2 = $_POST['ticket2'];
    }
    else {
      $ticket1 = $_POST['ticket2'];
      $ticket2 = $_POST['ticket1'];
    }
    while ($ticket1 <= $ticket2) {
      $t11 = intdiv($ticket1, 100000);
      $t12 = intdiv($ticket1, 10000) % 10;
      $t13 = intdiv($ticket1, 1000) % 10;
      $t21 = intdiv($ticket1, 100) % 10;
      $t22 = intdiv($ticket1, 10) % 10;
      $t23 = $ticket1 % 10;
      if (($t11 + $t12 + $t13) === ($t21 + $t22 + $t23)) {
        echo"<span class='success-message'>$ticket1  </span>";
        $success = 1;
      }
      $ticket1++;
    }
    if ($success !== 1) {
      echo"<span class='error-message'>Нет счастливых билетов</span>";
    }
  }
    ?>
    </div>
  </body>
  </html>