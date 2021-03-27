<?php
include $_SERVER['DOCUMENT_ROOT'] . '/bootstrap.php';
$id = $_GET['id'] ?? 1;
$post = $dataPost->getOnePost($id);
$comments = $dataPost->getComments($id);
include $_SERVER['DOCUMENT_ROOT'] . "/posts/post.view.php";