<?php
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;

?>

<h1>Settings</h1>
<?php $form = ActiveForm :: begin(['id' => 'custom-form']); ?>
<form action="<?= Url::to(['site/settings']) ?>" method="post">
    <p><span> Контактный номер: </span><input type="text" name="phone" id="phone" value="<?= $site->phone ?>" /></p>
    <textarea name="aboutText" cols="90" rows="20"><?= $site->aboutText ?>
    </textarea>
    <br>
    <textarea  name="contacts" id="contacts" cols="90" rows="20"><?= $site->contacts ?></textarea>
    <br>
    <p><span>Строка копирайтов:</span><input type="text" name="copyrights" value="<?= $site->copyrights ?>" /></p>
    <input type="submit" name="name" id="" value="Сохранить" />
<?php ActiveForm :: end(); ?>
