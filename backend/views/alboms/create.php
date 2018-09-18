<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Alboms */

$this->title = 'Create Alboms';
$this->params['breadcrumbs'][] = ['label' => 'Alboms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="alboms-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
