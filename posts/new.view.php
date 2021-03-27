<div class="container">
    <p class="alert <?= $_SESSION['alert'] ?>"><?= $_SESSION['msg'] ?? ''?></p>
    <form action="insertPost.php" method="post" enctype="multipart/form-data">
        <div>
            <label for="title">Название статьи</label>
            <input type="text" name="title">
        </div>
        <div>
            <label for="text">Текст статьи</label>
            <textarea rows="3" name="text"></textarea>
        </div>
        <div>
            <label for="image">Выберите файл-изображение</label>
            <input type="file" name="image" id="image">
        </div>
        <img src="" alt="" id="loadImage">
        <button type="submit" name="submit">Добавить</button>
    </form>
</div>

<script>
    let loadImage = document.querySelector("#loadImage"),
        image = document.querySelector("#image")

    image.addEventListener("change", function(e){
        loadImage.src = URL.createObjectURL(e.target.files[0]);
        loadImage.style.display = "block";
        loadImage.onload = function(){
            URL.revokeObjectURL(e.target.src)
        };
    })
</script>