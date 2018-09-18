<?php
/* @var $this yii\web\View */

    $images = $fotoset->getImagesArray();

?>
    <br><br>
    <p><?=$fotoset->description ?></p>
    <br><br>
    <?php foreach ($images as $image): ?>

    <img src="<?= $image ?>" alt="" />
    
    <?php endforeach ?>

