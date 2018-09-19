<?php 
    use yii\helpers\Url;
    $count = count($posts);
?>
s
  <!-- Блог три колонки с блогом -->
    <div class="container-fluid">
    <?php for ($i=0; $i<= $count; $i = $i + 3 ): ?>
            <div class="row">
            <?php for ($j=0; $j<=2; $j++): ?>
                <?php if(isset($posts[$i+$j])): ?>
                <div class="col-md-4">
                    <div class="thumbnail">
                    <img src="<?= $posts[$i+$j]->main_image ?>" alt="...">
                      <div class="caption">
                      <h3><?= $posts[$i + $j]->title ?></h3>
                      <p><?= $posts[$i + $j]->short_description ?></p>
                      <p>
                      <a href="<?= Url::to(['post/index','id' => $posts[$i+$j]->id]) ?>" class="btn btn-primary" role="button">Дальше</a> 
                      </p>
                    </div>
                  </div>
                </div>
                <?php endif; ?>
            <?php endfor ?>
        </div>
    <?php endfor ?>
</div> 
  <!-- END Блог три колонки с блогом -->


