<div class="user-post">
    <div class="post-hat">
        <a href="profile.php" class="user-profile">
            <img src="<?= htmlspecialchars($user['avatar']) ?>" class="profile-avatar" alt="Аватар">
            <span class="user-name"><?= htmlspecialchars($user['name']) ?></span>
        </a>
        <a href="edit-post.html">
            <img src="data/edit.png" class="edit-post" alt="Изменить">
        </a>
    </div>
    <div>
        <a href="<?= htmlspecialchars($post['image']) ?>">
            <img src="<?= htmlspecialchars($post['image']) ?>" class="post-img" alt="Фотография">
        </a>
    </div>
    <div>
        <button class="like-button">
            <img src="data/like.png" class="like-png" alt="Нравится">
            <span><?= htmlspecialchars($post['likes']) ?></span>
        </button>
    </div>
    <div class="post-description">
        <p><?= !empty($post['description']) ? htmlspecialchars($post['description']) : 'Без описания' ?></p>
    </div>
    <div class="post-publication-time">
        <span><?= formatTimestamp($post['timestamp']) ?></span>
    </div>
</div>