<?php
require "data.php";

if (!isset($_GET['id']) || !isset($articles[$_GET['id']])) {
    header("Location: index.php");
    die();
}

$articleId = $_GET["id"];

$article = $articles[$articleId];
?>
<?php
$documentTitle = $article['title'];
include "header.php";
?>
<div class="container">
    <div class="row">
        <div class="col-md-3  my-2">
            <div class="list-group">
                <?php foreach ($articles as $key => $item) : ?>
                    <a href="detail.php?id=<?php echo $key ?>" class="list-group-item list-group-item-action <?php if ($_GET['id'] == $key) echo "active" ?>">
                        <?php echo $item['title'] ?>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="col-md-9  my-2">
            <div class="card">
                <div class="card-body">
                    <h1><?echo $article["title"]; ?></h1>
                    <p><?php echo $article["content"]; ?></p>
                    <hr>
                    <a href="deletearticle.php?id=<?= $articleId ?>" class="btn btn-outline-danger">Delete</a>
                    <a href="editarticle.php?id=<?= $articleId ?>" class="btn btn-outline-primary">Düzenle</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include "footer.php";
?>