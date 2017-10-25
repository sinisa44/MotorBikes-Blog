<div class="container">
    <?php


    $single= new Content();
    $content = $single->getSingle();



    ?>
    <div class="row">
        <h1 class="text-center"><?=  $content->naziv;?></h1>
        <div class="col-md-10 col-md-offset-1 single">
                <img src="images/<?= $content->slika; ?>" >
        </div>
     </div>
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <p><?= $content->text; ?></p>
            </div>
        </div>

        <div class="row">

           <hr>
            <div class="col-md-6 col-md-offset-3" id="PostComment">

            </div>
        </div>

    <?php if(isset($_SESSION['user_logged_in'])): ?>
        <div class="row">
            <hr>

            <div class="col-md-6 col-md-offset-3">
            <h4 class="text-center">Add Comment:</h4>

                    <div class="form-group">
                        <input class="form-control" type="hidden" value="<?php if(isset($_GET['catid'])): echo $_GET['catid']; endif ?>" name="hidden" id="hidden">
                    </div>
                    <div class="form-group">
                      <textarea name="komentar" class="form-control" cols="30" rows="10" id="komentar"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="dodajkom" value="dodaj" class="btn btn-success btn-block" id="addbtn" onclick="addcomment()">
                    </div>


            </div>
        </div>
    <?php endif ?>
</div>
