
<!-- Start Slide Show  -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
<!-- Indicators -->
    <ol class="carousel-indicators">
      <?php $i =0; ?>
      <?php foreach ($carusel as $item): ?>
          <li data-target="#myCarousel" data-slide-to="<?= $i ?>" 
                <? if($i == 0): ?>  
                    class="active">
                <? endif ?>
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
      <div class="row">
        <div class="col-md-1"> </div>
        <div class="col-md-2 avatar">
            <img src="/img/elena_belgorod.png" alt="" />            
        </div>  
        <div class="col-md-8">
           <h4> Елена </h4>
          <p> 
            «Мне до сих пор не верится, что на нашей свадьбе – самом ярком событии в жизни – был такой Профессионал с большой буквы. Игорь, незаметно для нас, сумел сделать сногсшибательные кадры, передающие настроение именно нашего праздника, именно нашей пары. Никаких клише и наигранных поз, без слов типа «станьте туда, сделайте это». Короче, спасибо Игорь большое пребольшое за то, что каждый раз пересматривая наши фото, мы будем испытывать не только эстетическое наслаждение, но и вспоминать те эмоции, которые ты здоровски передал!!!»
         </p>
        </div>
        <div class="col-md-1"> </div>
      </div> <!-- End of Row -->
      <div class="row">
        <div class="col-md-1"> </div>
        <div class="col-md-2 avatar">
            <img src="/img/Diana_Alexey.png" alt="" />            
        </div>  
        <div class="col-md-8">
           <h4> Диана </h4>
          <p> 
            «Игорь!!! Просмотрели фотографии, мы в восторге!!! Ты так точно передал все эмоции и настроение того дня, сделал нас такими красивыми и чувственными! При выборе фотографа мы руководствовались тем, что будет заснята каждая мелочь, улыбка, взгляд, а самое главное, чтобы фотографии были «живыми», тебе удалось воплотить все это на 200%. Ты большой молодец, помимо твоего профессионального подхода, ты прекрасный человек. Ты влюбил в себя не только нас с Лёшей, но и всех гостей. Я помню какая стояла жара, мне было так жаль тебя тогда, потому что я представляю как тебе было сложно физически: на плечах 2 фотокамеры и еще ты был в рубашке… На мой вопрос почему ты одет так строго, ты ответил: «Это же свадьба! Я не могу быть в шортах!» Меня тронули твои слова, это говорит о твоей ответственности, которая выражается во всем, даже в таких мелочах! На самом деле говорить можно бесконечно о том, какой ты талантливый фотограф, скажу лишь одно — ни разу, ни разу мы не пожалели о своем выборе, ты умничка! Мы желаем тебе продолжать то, что у тебя получается, делать кучу прекрасных снимков, вдохновляющих молодоженов, прекрасных свадеб и успешных результатов, например таких как наша свадьба!!!
P.S. Надеемся когда-нибудь ты снимешь нас уже втроём 
Любим, обнимаем, Диана и Лёша!!!»
         </p>
        </div>
        <div class="col-md-1"> </div>
      </div> <!-- End of Row -->
<!-- Start link -->
      <div class="row">
          <div class="col-md-2"></div>
          <div class="col-md-10">
              <p class="rec"> ОСТАЛЬНЫЕ ОТЗЫВЫ</p>
          </div>
      </div> <!--End row -->
<!-- End link -->

