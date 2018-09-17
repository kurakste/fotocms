<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Servecies */

$this->title = 'Create Servecies';
$this->params['breadcrumbs'][] = ['label' => 'Servecies', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="servecies-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
