<div class="main-profile">
    <div class="profile-hat">
        <div></div>
        <div>
            <img src="<?= htmlspecialchars($user['avatar']) ?>" alt="Аватар" class="user-avatar">
        </div>
        <div class="user-name"><?= htmlspecialchars($user['name']) ?></div>
        <div class="user-info"><?= htmlspecialchars($user['info']) ?></div>
        <div class="all-posts">
            <img src="data/image.png" alt="Изображения" class="image">
            <span class="posts-counter"><?= count($userPosts) ?> постов</span>
        </div>
    </div>
    <div class="user-posts">
        <?php foreach ($userPosts as $post): ?>
            <a href="<?= htmlspecialchars($post['image']) ?>">
                <img src="<?= htmlspecialchars($post['image']) ?>" class="post-photo" alt="Фотография">
            </a>
        <?php endforeach; ?>
    </div>
</div>