
<!-- Start Slide Show  -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
<!-- Indicators -->
    <ol class="carousel-indicators">
      <?php $i =0; ?>
      <?php foreach ($carusel as $item): ?>
          <li data-target="#myCarousel" data-slide-to="<?= $i ?>" 
                <?php if($i == 0): ?>  
                    class="active"
                <?php endif ?>
                >
          </li>
        <?php $i++; ?>
        <?php endforeach ?>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <?php $i = 0; ?>
        <?php foreach ($carusel as $item): ?>
            <div
                <?php if ($i == 0): ?> 
                    class="item active"
                <?php else: ?>
                    class="item"
                <?php endif ?>
            >
                <img src="<?= $item->filename ?>" alt="<?= $item->alt ?>" style="width:100%;">
            <!-- <div class="carousel-caption">
                <h3>Los Angeles</h3>
                <p>LA is always so much fun!</p>
            </div> -->
            </div>
        <?php $i++; ?>
        <?php endforeach ?>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
<!-- End of Slide Show -->
    <div class="container-fluid">
    <!-- Разделитель -->
    <div class="row">
        <div class="col-md-8 col-md-offset-3 divider">
            <hr> 
        </div>
    </div>
<!-- End Разделитель -->
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

