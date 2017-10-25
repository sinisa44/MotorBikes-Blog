
<nav class="navbar navbar-inverse ">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
          </button>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="<?= GET_PAGE?>home">Home</a></li>
            <li><a href="<?= GET_PAGE?>news">News</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <?php if (isset($_SESSION['user_logged_in'])) : ?>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                  <?= $_SESSION['korisnik']['ime']; ?>
                  <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">

            <?php if ($_SESSION['korisnik']['role']=='admin') : ?>
              <li><a href="<?= GET_PAGE ?>admin">Admin</a></li>
            <?php endif ?>

              <li>
               <a href="index.php?page=home&uid=<?= $_SESSION['korisnik']['id']; ?>">Logout</a>
              </li>
          </ul>
              </li>
            <?php else : ?>
              <li><a href="<?= GET_PAGE?>login">Login</a></li>
              <li><a href="<?= GET_PAGE?>register">Register</a></li>
            <?php endif ?>
         </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
<?php
$logout = new Korisnici();
$logout->Logout();
?>
