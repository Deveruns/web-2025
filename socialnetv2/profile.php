<?php
function formatDate($timestamp) {
  $date = new DateTime("@$timestamp");
  return $date->format('d F Y');
}
$usersJson = file_get_contents('database/users.json');
$postsJson = file_get_contents('database/posts.json');
$users = json_decode($usersJson, true);
$posts = json_decode($postsJson, true);
$userId = isset($_GET['id']) ? (int)$_GET['id'] : 1;
$user = null;
foreach ($users as $u) {
  if ($u['id'] === $userId) {
    $user = $u;
    break;
  }
}
if (!$user) {
    die('Пользователь не найден.');
}
$userPosts = array_filter($posts, function ($post) use ($userId) {
    return $post['userId'] === $userId;
});
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Профиль</title>
    <link rel="stylesheet" href="css/styles-profile.css">
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
    <?php include 'templates/profile-template.php'; ?>
</body>
</html>