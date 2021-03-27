<?php //include $_SERVER['DOCUMENT_ROOT'] . '/templates/header.php'; ?>
<div class="main">
    <?php if ($post): ?>
        <p><h2><?= $post->title ?></h2></p>
        <img src="../img/<?= $post->image ?>" alt="" style="width: 200px; height: 190px">

        <div><?= $post->text ?></div>
    <form action="deletePost.php" method="post">
        <input type="hidden" name="id" value="<?= $post->id ?>">
        <button type="submit" name="deleteBtn" id="deleteBtn" onclick="return confirm('Вы действительно хотите удалить статью?');">
            Удалить статью
        </button>
    </form>
    <a href="edit.php?id=<?= $post->id ?>">
        Изменить статью
    </a>
    <?php else: ?>
        <div>Запрашиваемый ресурс не найден...</div>
    <?php endif ?>
    <p><?= $post->created_at ?></p>


</div>
    <hr>
<div class="comments">
    <?php foreach($comments as $comment): ?>
    <p><?= $comment->nik ?> </p>
    <p><?= $comment->text ?> </p>
    <p><?= $comment->created_at ?> </p>
    <?php endforeach ?>
</div>

<?php //include $_SERVER['DOCUMENT_ROOT'] . '/templates/footer.php'; ?>