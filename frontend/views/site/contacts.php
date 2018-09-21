<?php
$this->title = 'Контакты ';

?>
<style>
    .about {
       margin: 0px 50px 50px 50px;
    } 
</style>


<div class="row">
    <div class="col-md-4">
        <div id="about-img">
            <img src="<?= $site->contacts_photo; ?>" alt="" />
        </div>
        <div class="contacts">
            <?= $site->contacts; ?>
        </div>
    </div> <!-- col -->
    <div class="col-md-8">
        <div class="about">
            <?= $site->aboutText ?>
        </div>
    </div>  <!--col -->
</div> <!-- row -->

  <!-- End Блок Контакты -->

