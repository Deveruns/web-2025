<?php
function formatTimestamp($timestamp) {
  $date = new DateTime("@$timestamp");
  return $date->format('d F Y, H:i');
}
$usersJson = file_get_contents('database/users.json');
$postsJson = file_get_contents('database/posts.json');
$users = json_decode($usersJson, true);
$posts = json_decode($postsJson, true);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">  
  <title>Главная</title>
  <link rel="stylesheet" href="css/styles-home.css">
  <link rel="stylesheet" href="css/font.css">
</head>
<body>
  <div class="side-panel">
    <a href="home.php">
      <img src="data/home.png" class="panel-buttons" alt="Домой">
    </a>   
    <a href="profile.php">
      <img src="data/user.png" class="panel-buttons" alt="Пользователь">
    </a>
    <a href="plus.php">
      <img src="data/plus.png" class="panel-buttons" alt="Добавить">
    </a>
  </div>
  <div class="news-feed">
    <?php
      foreach ($posts as $post) {
        $user = null;
        foreach ($users as $u) {
          if ($u['id'] === $post['userId']) {
            $user = $u;
            break;
          }
        }
          if ($user) {
            include 'templates/post-template.php';
          }
      }  
    ?>
  </div>
</body>
</html>