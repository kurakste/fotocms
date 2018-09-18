<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Aitems */

$this->title = 'Create Aitems';
$this->params['breadcrumbs'][] = ['label' => 'Aitems', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="aitems-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
