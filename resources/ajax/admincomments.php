<?php

require '../../config.php';


 $comments = Komentari::PrikaziSve();


$data=  '<table class="table table-hover">
           <tr>
             <th>Comments</th>
             <th>Category</th>
             <th>User</th>
             <th>***</th>
           </tr>';
            foreach ($comments as $comment){
$data .=  '<tr>
             <td>'. $comment->komentar.'</td>
             <td>'. $comment->kategorija.'</td>
             <td>'. $comment->korisnik.'</td>
             <td><button class="btn btn-danger bt-xs" onclick="delAdminCom('.$comment->id.');">Delete</button></td>
           </tr>';
         }
$data .=   '</table>';
echo $data;

if(isset($_POST['id'])){
  $del = new Komentari();
  $del->obrisi($_POST['id']);
}
?>
