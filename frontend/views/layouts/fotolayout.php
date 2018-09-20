<?php
use frontend\assets\AppAsset;
use yii\helpers\Html;
use yii\helpers\Url;
use \frontend\widgets\Phone;
use \frontend\widgets\Copyrights;

AppAsset::register($this);
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->head() ?>
    <?= Html::csrfMetaTags() ?>
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Свадебный фотограф. Дмитрий Куракин | <?= Html::encode($this->title) ?></title>
    <!-- Bootstrap -->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
<?php $this->beginBody() ?>
  <!-- Start Menu -->
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?= Url::to(['site/index']) ?>"> [Дмитрий Куракин]</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
          <li class="active"><a href="<?= Url::to(['site/index']) ?>">Портфолио<span class="sr-only">(current)</span></a></li>
            <li><a href="<?= Url::to(['site/services']) ?>">Услуги</a></li>
            <li><a href="<?= Url::to(['site/fotosets']) ?>">Фотосерии</a></li>
            <li><a href="<?= Url::to(['site/blog']) ?>">Блог</a></li>
            <li><a href="<?= Url::to(['site/contacts']) ?>">Контакты</a></li>
            <li><a 
            href="tel: <?= Phone::widget([]); ?>"
                            >
                                <?= Phone::widget([]); ?>
                            </a>
            </li>

          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
  <!-- End Menu -->

        <?= $content ?>

        <div class="scrollup">
            <i class="fa fa-angle-up" aria-hidden="true" id="angel-up"></i>
        </div>
<!-- Start Footer -->
      <div class="row footer">
          <div class="col-xs-12 container-footer">
              <p class="text-muted text-center">
                <?= Copyrights::widget(); ?>
            </p>
          </div>
      </div> <!--End row -->
<!-- End Footer -->
    </div>  <!--End conteiner -->
<?php $this->endBody() ?>
  </body>
</html>
<?php $this->endPage() ?>

