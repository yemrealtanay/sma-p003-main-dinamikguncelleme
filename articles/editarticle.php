<?php
//  uygulamanın mevcut verisine erişimimiz olmalı
require "data.php";

include "theme.php";

?>
<?php

$articleIndexToEdit = $_GET['id'];
$article = $articles[$articleIndexToEdit];

include "header.php";?>

<div class="container">
    
        <div class="mb-3">
        <form action="editaction.php?id=<?= $articleIndexToEdit ?>" method="post">
        <label for="exampleFormControlInput1" class="form-label">Başlığı Düzenle</label>
        <input type="text" class="form-control" id="inpTitle" name="title">
        </div>
        <div class="mb-3">
            <label for="txtContent" class="form-label">İçerik Düzenle</label>
            <textarea class="form-control" id="txtContent" rows="3" name="content"><?php echo $article["content"]; ?></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Değişiklikleri Kaydet</button>
    </form>
</div>

