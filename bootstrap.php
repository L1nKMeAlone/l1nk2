<?php

use App\db\Connect;
use App\models\Post;

include $_SERVER['DOCUMENT_ROOT'] . '/db/config.php';
include $_SERVER['DOCUMENT_ROOT'] . '/db/Connect.php';
include $_SERVER['DOCUMENT_ROOT'] . '/db/function.php';
include $_SERVER['DOCUMENT_ROOT'] . '/models/Post.php';

$dataPost = new Post(Connect::make(CONN));