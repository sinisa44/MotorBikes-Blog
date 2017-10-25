   <?php
   session_start();
    require '../../config.php';

    $comments = new Komentari();

   if(isset($_POST['catid'])) {
	    $kat = $_POST['catid'];

	   $comments = Komentari::prikazi( $kat );
	   foreach ( $comments as $comment ) {
		   echo '<blockquote>
                <p>' . $comment->korisnik . '</p>
                 <footer>' . $comment->komentar .
		                  '<button class="btn btn-danger btn-sm pull-right" onclick="deleteKomentar('.$comment->id.')" >obrisi</button>
                 </footer>
             </blockquote>
                <hr>';
	   }
   }
/* dodavanje komentara */

if(isset($_POST['button'])){
      $komentar = $_POST['komentar'];
      $dugme = $_POST['button'];
      $kategorija = $_POST['hidden'];
      $comments->dodaj($komentar,$dugme,$kategorija);
   }
/*brisanje komentara */
if(isset($_POST['comid'])){
  $comid = $_POST['comid'];
  $comments->obrisi($comid);
}
?>
