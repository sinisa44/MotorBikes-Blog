<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
      <?php
      $slider=Slider::getslider();

       foreach ($slider as $slideritem): ?>
        <div class="<?php echo ($slideritem->id == 1) ? "item active" : "item"; ?>" >
          <img src="images/<?= $slideritem->slika; ?>">
          <div class="carousel-caption d-none d-md-block">
            <h3><?= $slideritem->text; ?></h3>
          </div>
        </div>
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
</div> <!-- end of carousel -->

<hr>

<div class="container">
<h1 class="text-center">Some of our latest posts</h1>
<hr>
<?php
$contents = Content::getRandom();
//print_r($content);
foreach($contents as $content):
?>
  <div class="row drugi">
    <div class="col-md-7">
      <a href="<?= GET_SINGLE.$content->id; ?>"> <h2 class="featurette-heading"><?= $content->naziv; ?></a></h2>
        <p class="lead"><?= $content->podnaslov; ?></p>
    </div>
    <div class="col-md-5 slika">
        <img src="images/<?=$content->slika; ?>">
    </div>
  </div>
  <hr>
<?php endforeach ?>
</div>