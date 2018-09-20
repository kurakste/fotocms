<?php 
use \frontend\widgets\Phone;

$this->title = 'Услуги ';

?>
 <!-- Main picture -->
    <div class="image-fluid parallax">
    <img src="<?= $site->services_main_image ?>" alt="" />
    </div>
  <!-- End main picture -->
    <div class="container-fluid" id="must-be-white">

    <div class="row" id="first-div">
        <div class="col-md-8 col-md-offset-3 divider">
            <hr> 
        </div>
    </div>
<!-- End Разделитель -->
<!-- hellow start -->
       <div class="main-text">
        <?= $site->services_video_article ?>
     </div>   
<!--end hellow -->
    <div class="row">
        <div class="col-md-10 col-md-offset-1 divider">
            <hr> 
        </div>
    </div>
<!--packet start  -->
    <div class="row">
      <div class="col-md-2 col-md-offset-5 avatar">
        <img src="/img/paketi.png" alt="" />    
      </div>
    </div>
    
        <div class="main-text">

    <?php foreach ($servecies as $service): ?>
    <h4><?= $service->title ?> </h4>
        <?= $service->body ?> 
<br>
<br>
    <?php endforeach ?>
Вне зависимости от выбранного пакета услуг фотографии проходят не только тчательную обработку, но и в обязательном порядке приезжают к вам в приятной упаковке.<br>
    </div>
    <div class="image">
        <img src="<?= $site->services_second_image ?>" alt="" />
    </div>
<!--end packet  -->
  
<div class="row">
        <div class="col-md-10 col-md-offset-1 divider">
            <hr> 
        </div>
    </div>

    <div class="image">    
    <?= $site->services_video_article ?>
    <div class="video">    
        <iframe src="<?= $site->services_video_link ?>" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
    </div>
    </div>
<!-- Start link -->
    <div class="row">
        <div class="col-md-10 col-md-offset-1 divider">
            <hr> 
            <h4> ЗВОНИТЕ <?= Phone::widget([]); ?> и мы договоримся о встрече, на которой все обсудим. </h4>
            <hr>
        </div>
    </div>
<!--feedback start  -->
    <div class="row">
        <div class="col-md-2 col-md-offset-5 avatar">
            <img src="/img/otzivii.png" alt="" />    
        </div>
    </div>
<!--Блок отзывы -->
    <?php foreach ($feedbacks as $feedback): ?>
      <div class="row">
        <div class="col-md-1"> </div>
        <div class="col-md-2 avatar">
        <img src="<?= $feedback->image ?>" alt="" />            
        </div>  
        <div class="col-md-8">
           <h4><?= $feedback->title ?></h4>
          <p> 
            <?= $feedback->body ?>
         </p>
        </div>
        <div class="col-md-1"> </div>
      </div> <!-- End of Row -->
    <?php endforeach ?>
          <div class="col-md-2"></div>
          <div class="col-md-10">
              <p class="rec"> ОСТАЛЬНЫЕ ОТЗЫВЫ</p>
          </div>
      </div> <!--End row -->
<!-- End link -->

