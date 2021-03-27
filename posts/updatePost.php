<?php
session_start();

use App\models\Validator;
include $_SERVER['DOCUMENT_ROOT'] . '/bootstrap.php';

if(isset($_POST['submitUpdate'])) {
    unset($_SESSION['errors']);
    $data['title'] = htmlspecialchars($_POST['title']);
    $data['text'] = htmlspecialchars($_POST['text']);
    $data['id'] = $_POST['id'];

    $post = $dataPost->getOnePost($data['id']);
    [$errorLoad, $fileName] =
        loadImg($maxFileSize, $validFiletypes, $uploadPath, 'image');
    if ($_FILES['image']['error'] == UPLOAD_ERR_NO_FILE) {
        $fileName = $post->image;
        $errorLoad = "";
    } else {
        deleteImg('../img/ . $post->image');
    }

    if (empty($errorLoad)) {
        $data['image'] = $fileName;
        $dataPost->updatePost($data);
        header('Location: /posts/post.php?id=' . $data['id']);
    }
    else {
        $_SESSION['error']['update'] = $errorLoad;
        header('Location: /posts/edit.php?id' . $data['id']);
    }
}