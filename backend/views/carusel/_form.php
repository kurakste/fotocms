<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Carusel */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="carusel-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alt')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'filename')
             ->widget(alexantr\elfinder\InputFile::className(), [
                'clientRoute' => 'elfinder/input',
                'class' => 'myclass',
            ]);
    ?>

  <?= $form->field($model, 'link')->textInput(['maxlength' => true]) ?>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
