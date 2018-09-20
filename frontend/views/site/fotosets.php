<?php 
use yii\helpers\Url;
    
$this->registerCssFile('/css/hover/normalize.css');
$this->registerCssFile('/css/hover/demo.css');
$this->registerCssFile('/css/hover/set1.css');

$this->title = ' Альбомы ';

?>

<div class="content">
    <?php $count = count($alboms); ?>
    <?php for ($i = 0; $i <= $count-1; $i=$i+2): ?>
    <div class="grid">
        <figure class="effect-oscar">
        <img src="<?= $alboms[$i]->main_image ?>" alt=""/>
            <figcaption>
                <h2><?= $alboms[$i]->name ?></h2>
                <p><?= $alboms[$i]->short_description ?></p>
                <a href="<?= Url::to(['fotoset/index', 'id' => (int)$alboms[$i]->id]) ?>">View more</a>
            </figcaption>			
        </figure>
        <?php if(isset($alboms[$i+1])): ?>
        <figure class="effect-oscar">
            <img src="<?= $alboms[$i+1]->main_image ?>" alt=""/>
            <figcaption>
                <h2><?= $alboms[$i+1]->name ?></h2>
                <p><?= $alboms[$i+1]->short_description ?></p>
                <a href="<?= Url::to(['fotoset/index', 'id' => (int)$alboms[$i+1]->id]) ?>">View more</a>
            </figcaption>			
         <?php endif ?>
    </div>
    <?php endfor ?>

</div> <!-- class content -->
