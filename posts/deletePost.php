<?php
include $_SERVER["DOCUMENT_ROOT"] . '/bootstrap.php';

if(isset($_POST['deleteBtn'])) {
    $id = $_POST['id'];
    $post = $dataPost->getOnePost($id);
    $error = deleteImg('../img/' . $post->image);

    if (empty($error)) {
        $_SESSION['msg'] = "Файл успешно удалён";
        $_SESSION['alert'] = 'alert-success';
        $dataPost->deletePost($id);
        header('Location: /');
    }

    else {
        $_SESSION['msg'] = $error;
        $_SESSION['alert'] = 'alert-danger';
        header('Location: /posts/post.view.php');
    }
}