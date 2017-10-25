<div class="col-md-8 col-md-offset-2 text-center">
    <form action="<?php $_SERVER['PHP_SELF'];?>" method="POST" >
        <div class="form-group">
            <label for="korisnickoIme">Korisnicko ime:</label>
            <input type="text" name="korisnickoIme" class="form-control">
        </div>
        <div class="form-group">
            <label for="emai">Email:</label>
            <input type="email" name="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="sifra">Sifra:</label>
            <input type="password" name="sifra" class="form-control">
        </div>
        <div class="form-group">
            <label for="sifr2">Ponovo unesite sifru:</label>
            <input type="password" name="sifra2" class="form-control">
        </div>
        <div class="form-group text-center">
            <input type="submit" name="registruj" value="Registracija" class="btn btn-info btn-block">
        </div>
    </form>
</div>

<?php
if(isset($_POST['registruj'])){
$registruj= new Korisnici();
$registruj->registruj($_POST['korisnickoIme'],$_POST['email'],$_POST['sifra'],$_POST['sifra2'],$_POST['registruj'],'user');
Message::setMessage('succes','you are successfly registered');
}
?>
