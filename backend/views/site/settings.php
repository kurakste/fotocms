<?php
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use mihaildev\ckeditor\CKEditor;


?>
<style>
    input {
        width: 400px;
    }
</style>

<h1>Settings</h1>
<?php

/* @var $this yii\web\View */
/* @var $site backend\objects\Photosite */
/* @var $form ActiveForm */

?>

<div class="backend-views-settings">

    <?php $form = ActiveForm::begin([
    'method' => 'post',
    'action' => ['site/settings'],]); ?>

        <?= $form->field($site, 'phone') ?>
        <?= $form->field($site, 'aboutText') 
            ->widget(CKEditor::className(),[
                'editorOptions' => [
                'preset' => 'full', //разработанны стандартные настройки basic, standard, full данную возможность не обязательно использовать
                'inline' => false, //по умолчанию false
            ],
        ]);            
        ?>
        <?= $form->field($site, 'contacts') 
            ->widget(CKEditor::className(),[
                'editorOptions' => [
                'preset' => 'basic', //разработанны стандартные настройки basic, standard, full данную возможность не обязательно использовать
                'inline' => false, //по умолчанию false
            ],
        ]);            
        ?>
        <?= $form->field($site, 'copyrights') 
            ->widget(CKEditor::className(),[
                'editorOptions' => [
                'preset' => 'basic', //разработанны стандартные настройки basic, standard, full данную возможность не обязательно использовать
                'inline' => false, //по умолчанию false
            ],
        ]);            
        ?>
        <?= $form->field($site, 'services_main_image') 
            ->widget(alexantr\elfinder\InputFile::className(), [
                'clientRoute' => 'elfinder/input',
                'class' => 'myclass',
                'multiple' => false,
            ]);

        ?>
        <?= $form->field($site, 'services_second_image') 
            ->widget(alexantr\elfinder\InputFile::className(), [
                'clientRoute' => 'elfinder/input',
                'class' => 'myclass',
                'multiple' => false,
            ]);
        ?>
        <?= $form->field($site, 'services_video_link') ?>
        <?= $form->field($site, 'services_video_article')
            ->widget(CKEditor::className(),[
                'editorOptions' => [
                'preset' => 'basic', //разработанны стандартные настройки basic, standard, full данную возможность не обязательно использовать
                'inline' => false, //по умолчанию false
            ],
        ]);            
         ?>
        <?= $form->field($site, 'contacts_photo')
            ->widget(alexantr\elfinder\InputFile::className(), [
                'clientRoute' => 'elfinder/input',
                'class' => 'myclass',
                'multiple' => false,
            ]);

        ?>
        <?= $form->field($site, 'script_1') ?>
        <?= $form->field($site, 'script_2') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- backend-views-settings -->
