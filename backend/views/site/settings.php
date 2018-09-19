<?php
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;

?>

<h1>Settings</h1>
<?php $form = ActiveForm :: begin(['id' => 'custom-form']); ?>
<form action="<?= Url::to(['site/settings']) ?>" method="post">

<p><input type="text" name="phone" id="phone" value="<?= $site->phone ?>" /></p>
<textarea name="aboutText" cols="60" rows="20"><?= $site->aboutText ?>
</textarea>
<textarea  name="contacts" id="contacts" cols="60" rows="20"><?= $site->contacts ?></textarea>
<br>
<input type="submit" name="name" id="" value="Сохранить" />
<?php ActiveForm :: end(); ?>
