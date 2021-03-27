<?php include $_SERVER["DOCUMENT_ROOT"] . '/templates/header.php'; ?>
<div class="container">


    <p><span class="error" style="display: <?$_SESSION['errors']['update'] ? 'block' : 'none' ?>">
            <?= $_SESSION['errors']['update']?>
        </span></p>
    <form action="updatePost.php" method="post" enctype="multipart/form-data">
        <div class="row">
            <div>
                <input type="hidden" name="id" value="<?= $post->id ?>">
                <div>
                    <label for="title" class="form-label">Название статьи</label>
                    <input type="text" class="form-control" id="title" name="title"
                           value="<?= $post->title ?>"
                </div>

                <div>
                    <label for="text">Текст статьи</label>
                    <textarea class="form-control" id="text" name="text" rows="3">
                        <?= $post->text ?>
                    </textarea>
                </div>

                <div>
                    <label for="image">Выберите файл-изображение</label>
                    <input class="form-control" type="file" name="image" id="image">
                </div>
                <button type="submit" name="submitUpdate">Изменить</button>
            </div>
            <div class="col">
                <img src="../img/<?= $post->image ?>" alt="" id="loadImage">
            </div>
        </div>
    </form>
</div>
<script>
    let loadImage = document.querySelector("#loadImage"),
        image = document.querySelector("#image");

    image.addEventListener('change', function(e){
        loadImage.src = URL.createObjectURL(e.target.files[0]);
        loadImage.style.display = "block";
        loadImage.onload = function(){
            URL.revokeObjectURL(e.target.src)
        };
    })
</script>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/templates/footer.php'; ?>
