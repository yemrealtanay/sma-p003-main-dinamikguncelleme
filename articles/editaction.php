<?php

//  uygulamanın mevcut verisine erişimimiz olmalı
require "data.php";

$articleIndexToEdit = $_GET['id'];


//  articles dizisine yeni bir eleman ekliyoruz
$articles[$articleIndexToEdit] = [
    "title" => $_POST['title'],
    "content" => $_POST['content']
];

//  articles dizisinin yeni halini JSON'a çeviriyoruz
$articlesJson = json_encode($articles);

//  JSON'ın yeni halini dosyaya yazıyoruz
file_put_contents('articles.json', $articlesJson);

header("Location: detail.php");


