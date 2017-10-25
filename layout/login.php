
<div class="col-md-8 col-md-offset-2 text-center">
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
        <div class="form-group">
            <label for="KorisnickoIme">Korisnicko ime:</label>
            <input type="text" name="KorisnickoIme" class="form-control">
        </div>
        <div class="form-group">
            <label for="Lozinka">Lozinka</label>
            <input type="password" name="lozinka" class="form-control">
        </div>
        <div class="form-group text-center">
            <input type="submit" name="prijavi" value="Prijavi me" class="btn btn-success btn-lg btn-block">
        </div>   
    </form>
</div>

<?php
$prijavi= new Korisnici();
$prijavi->Prijavi($_POST);

?>