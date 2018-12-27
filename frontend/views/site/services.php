<?php 
use \frontend\widgets\Phone;

$this->title = 'Услуги ';

?>
<style>
    body {
        height:0px;
    }
</style>
 <!-- Main picture -->
    <div class="image-fluid" id='service-image' img> <!-- remove paralax style... -->
        <img src="<?= $site->services_main_image ?>" alt="" />
    </div>
  <!-- End main picture -
    <div class="container-fluid" id="must-be-white">

    <div class="row" id="first-div">
        <div class="col-md-8 col-md-offset-3 divider">
            <hr> 
        </div>
    </div>
End Разделитель -->
<!-- hellow start -
       <div class="main-text">
     </div>   
end hellow -->
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
<!--end packet  -->
  

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

