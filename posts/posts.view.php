<?php //include $_SERVER['DOCUMENT_ROOT'] . '/templates/header.php'; ?>
<div class="main">
    <table border="1">
        <tr>
            <th>Изображение</th>
            <th>Название статьи</th>
            <th>Содержимое</th>
            <th>Дата создания</th>
        </tr>

        <?php foreach($posts as $post): ?>
            <tr>
                <td>
                    <a href="/posts/post.php?id=<?= $post->id ?>">
                        <img src="../img/<?= $post->image ?>" alt="" style="width: 200px; height: 190px">
                    </a>
                </td>
                <td><?= $post->title ?> </td>
                <td><?= $post->text ?> </td>
                <td><?= $post->created_at ?> </td>
            </tr>
        <?php endforeach ?>
    </table>
</div>
<a href="/posts/new.view.php">Добавить пост<a>
<?php //include $_SERVER['DOCUMENT_ROOT'] . '/templates/footer.php'; ?>