<?php
session_start();
require '../../config.php';


$post = new Content();
$posts = $post->getAll();

foreach ($posts as $post){
echo    '<div>
          <h1 class="text-center">'. $post->naziv.'</h1>
            <div class="text-center adminslika">
                <img src="images/'. $post->slika. '">
            </div>
                <h4>'. $post->podnaslov.'</h4>
                <hr>
                <h4 class="text-center">Category: <b>'. $post->kategorija.'</b></h4>
                <hr>
                <p>'. $post->text.'</p>
                <button class="btn btn-danger btn-lg" onclick="deletePost('.$post->id.')">Delete</button>
                <button class="btn btn-primary btn-lg" onclick="GetPostDetails('.$post->id.' )" data-backdrop="static" >Update</button>
                 <hr>
          </div>';
}

/*dodavanje sadrzaja*/

if(isset($_POST['naziv']) && isset($_POST['tekst'])  && isset($_POST['kategorija']) && isset($_POST['podnaslov']) && isset($_FILES['slika'])){

  $naziv = $_POST['naziv'];
  $tekst = $_POST['tekst'];
  $kategorija = $_POST['kategorija'];
  $podnaslov = $_POST['podnaslov'];
  $slika = $_FILES['slika'];
  $image = new File();
  $image->uploadFile($slika);
  $ins = new Content();
  $ins->addNewPost($naziv,$tekst,$kategorija,$podnaslov,$_FILES['slika']['name']);
}


 if(isset($_POST['id'])){
   $id = $_POST['id'];
   Content::delete($id);
 }

/*Update sadrzaja*/
if(isset($_POST['UpdTitle']) && isset($_POST['UpdText']) && isset($_POST['UpdCategory']) && isset($_POST['UpdSlug']) && isset($_FILES['UpdImage'])){
    $updImg = $_FILES['UpdImage'];
    $update = new Content();
	$updateImg = new File();
	$updateImg->uploadFile($updImg);
 $update->Update($_POST['UpdText'],$_POST['UpdText'],$_POST['UpdCategory'],$_POST['UpdSlug'],$_FILES['UpdImage']['name'],$_POST['Updid']);
}
 ?>