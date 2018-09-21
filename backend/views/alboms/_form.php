<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use mihaildev\ckeditor\CKEditor;

/* @var $this yii\web\View */
/* @var $model app\models\Alboms */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="alboms-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'short_description')
            ->widget(CKEditor::className(),[
                'editorOptions' => [
                'preset' => 'full', //разработанны стандартные настройки basic, standard, full данную возможность не обязательно использовать
                'inline' => false, //по умолчанию false
            ],
        ]);            

    ?>    
    <?= $form->field($model, 'description')
            ->widget(CKEditor::className(),[
                'editorOptions' => [
                'preset' => 'full', //разработанны стандартные настройки basic, standard, full данную возможность не обязательно использовать
                'inline' => false, //по умолчанию false
            ],
        ]);            
        ?>

    <?= $form->field($model, 'main_image')

             ->widget(alexantr\elfinder\InputFile::className(), [
                'clientRoute' => 'elfinder/input',
                'class' => 'myclass',
                'multiple' => false,
            ]);
    ?>

    <?= $form->field($model, 'images')
             ->widget(alexantr\elfinder\InputFile::className(), [
                'clientRoute' => 'elfinder/input',
                'class' => 'myclass',
                'multiple' => true,
            ]);
    ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
