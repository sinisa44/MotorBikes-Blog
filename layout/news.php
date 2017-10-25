<?php
$news = new Content();
$contents = $news->getContent();
?>

<div class="container-fluid home1">
    <div class="row home1">
        <div class="col-md-3">
            <h3 class="text-center">Select category</h3>
            <hr>
                <table class="table  table-bordered">
                    <tr class="text-center">
                        <td><a href="<?= GET_CATEGORY;?>racing"> Racing Bikes</a></td>
                    </tr>
                    <tr class="text-center">
                        <td><a href="<?= GET_CATEGORY;?>chopper">Chopper Bikes</a></td>
                    </tr>
                    <tr class="text-center">
                        <td><a href="<?= GET_CATEGORY;?>dragster">Dragster Bikes</a></td>
                    </tr>
                    <tr class="text-center">
                        <td><a href="<?= GET_CATEGORY;?>cross">Cross Bikes</a></td>
                    </tr>
                </table>
         </div>
            <?php 
            
                foreach($contents as $content):
            ?>
            <div class="col-md-9" style="float:right;">
                <h1>
                    <a href="<?= GET_SINGLE.$content->id; ?>">
                        <?= $content->naziv;?>
                    </a>
                </h1>
                 <hr>
                <div class="col-md-5 vestiSlika">
                    <img src="images/<?= $content->slika; ?>">
                 </div>
                 <div class="col-md-7">
                     <p>
                        <?= $content->text; ?>
                     </p>
                </div>
            </div>
              
            <?php endforeach ?>
    </div>
  
</div>